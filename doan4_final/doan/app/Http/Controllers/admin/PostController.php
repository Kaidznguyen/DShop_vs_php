<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class PostController extends Controller
{
    public function list(){
        $listproduct = DB::table('post')
        ->join('post_category','post_category.id_cate', '=', 'post.post_category_id')
        ->get();

        return view('admin.blog.list',['listproduct'=>$listproduct]);
    }
    public function showadd(){
        $category_product = DB::table('post_category')->get();
        


        return view('admin.blog.add')->with('category_product',$category_product);

    }
    public function add(Request $request){
        
        $data = array();
        $data['title'] = $request->title;
        $data['author'] = $request->author;
        $data['description'] = $request->description;
        $data['content'] = $request->content;
        $data['post_category_id'] = $request->post_category_id;
        $data['img'] = $request->img;


        $get_image =  $request-> file('img');
        if($get_image){
            $new_image = $get_image->getClientOriginalName();
            if(file_exists('Upload/'.$new_image)){
                unlink('Upload/'.$new_image);
            }
            $get_image->move('Upload/', $new_image);
            $data['img'] = $new_image;

            DB::table('post')->insert($data);
            Session::flash('message','Thêm bài viết thành công');
            return Redirect::to('/admin/post/list');
        }

        $data['img'] = '';

            DB::table('post')->insert($data);
            Session::flash('message','Thêm bài viết thành công');
            return Redirect::to('/admin/post/list');
    }
    public function delete($id){
       
        DB::table('post')->where('id', $id)->delete();  
        Session::flash('message','Xóa bài viết thành công'); 
        return Redirect::to('/admin/post/list');
    }
    
    public function edit($id){
        
        $category_product = DB::table('post_category')->get();
        $edit = DB::table('post')->where('id', $id)->get();

        
        $mamagerproduct = view('admin.blog.edit')->with('edit', $edit)
        ->with('post_category', $category_product);
        return view('admin.layout')->with('admin.blog.edit',$mamagerproduct);
    }
    public function update(Request $request,$id){
        
        $data = array();
        $data['title'] = $request->title;
        $data['author'] = $request->author;
        $data['description'] = $request->description;
        $data['content'] = $request->content;
        $data['post_category_id'] = $request->post_category_id;
        // $data['img'] = $request->img;

        $get_image =  $request-> file('img');
        if($get_image){
            $new_image = $get_image->getClientOriginalName();

            if(file_exists('Upload/'.$new_image)){
                unlink('Upload/'.$new_image);
            }
            $get_image->move('Upload/', $new_image);

            $data['img'] = $new_image;

            DB::table('post')->where('id',$id)->update($data);
            Session::flash('message','Cập nhật bài viết thành công');
            return Redirect::to('/admin/post/list');
        }
        DB::table('post')->where('id', $id)->update($data);  
        Session::flash('success','Cập nhật bài viết thành công'); 
        return Redirect::to('/admin/post/list');
    }
}
