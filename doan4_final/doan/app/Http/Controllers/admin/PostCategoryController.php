<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PostCategoryController extends Controller
{
    public function showadd(){
        return view('admin.postcategory.add',[
            'title' => 'Thêm Danh Mục Bài Viết Thành Công'
        ]);
    }
    public function edit($id){
        $edit = DB::table('post_category')->where('id_cate', $id)->get();
        return view('admin.postcategory.edit',['edit'=>$edit]);
        
    }
    public function add(Request $request){
        $data = array();
        $data['name_cate'] = $request->name_cate;
        $data['description_cate'] = $request->description_cate;
        DB::table('post_category')->insert($data);
        Session::flash('message','Thêm loại bài viết thành công');
        return Redirect::to('/admin/postcategory/list');
    }

    public function listcategory(){
        $listcategory = DB::table('post_category')->get(); 
      
        return view('admin.postcategory.list',['listcategory'=>$listcategory]);
    }
    public function deletecategory($id){
        DB::table('post_category')->where('id_cate', $id)->delete();  
        Session::flash('message','Xóa loại bài viết thành công');
        // Session::put('message','Xóa danh mục sản phẩm thành công'); 
        return Redirect::to('/admin/postcategory/list');
    }
    public function update(Request $request,$id){
        $data = array();
        $data['name_cate'] = $request->name_cate;
        $data['description_cate'] = $request->description_cate;
        DB::table('post_category')->where('id_cate', $id)->update($data);  
        Session::flash('message','Sửa loại bài viết thành công'); 
        return Redirect::to('/admin/postcategory/list');
    }
    public function detail($id){
        $detail = DB::table('post_category')->where('id_cate', $id)->get();
        return view('admin.postcategory.detail',['detail'=>$detail]);
    }
}
