<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

session_start();
class BrandController extends Controller
{
    public function list(){
        $listbrand = DB::table('brand')->get(); 
      
        return view('admin.brand.list',['listbrand'=>$listbrand]);
    }
    public function showadd(){
        return view('admin.brand.add',[
            'title' => 'Thêm nhà cung cấp'
        ]);
    }
    public function add(Request $request){
        $data = array();
        $data['name_brand'] = $request->name_brand;
        $data['img_brand'] = $request->img;
        $data['description_brand'] = $request->description;
        $get_image =  $request-> file('img');

        if($get_image){
            $new_image = $get_image->getClientOriginalName();
            // $name_image = current(explode('.', $get_name_image));
            // $new_image = $name_image.rand(0,1000). '.' .$get_image->getClientOriginalExtension();
            if(file_exists('Upload/'.$new_image)){
                unlink('Upload/'.$new_image);
            }
            $get_image->move('Upload/', $new_image);
            $data['img_brand'] = $new_image;

            DB::table('brand')->insert($data);
            Session::flash('message','Thêm nhà cung cấp thành công');
            return Redirect::to('/admin/brand/list');

        }
        $data['img_brand'] = ' ';
            // Storage::disk('public')->put($path, $contents);

        DB::table('brand')->insert($data);
        Session::flash('message','Thêm nhà cung cấp thành công');
        return Redirect::to('/admin/brand/list');
    }
    public function delete($id){
        DB::table('brand')->where('id_brand', $id)->delete();  
        Session::flash('message','Xóa nhà cung cấp thành công');
        return Redirect::to('/admin/brand/list');
    }
    public function edit($id){
        $edit = DB::table('brand')->where('id_brand', $id)->get();
        return view('admin.brand.edit',['edit'=>$edit]);
        
    }
    public function update(Request $request,$id){
        $data = array();
        $data['name_brand'] = $request->name_brand;
        $data['description_brand'] = $request->description;
        $get_image =  $request-> file('img');
        if($get_image){
            $new_image = $get_image->getClientOriginalName();
            // $name_image = current(explode('.', $get_name_image));
            // $new_image = $name_image.rand(0,1000). '.' .$get_image->getClientOriginalExtension();
            if(file_exists('Upload/'.$new_image)){
                unlink('Upload/'.$new_image);
            }
            $get_image->move('Upload/', $new_image);

            $data['img_brand'] = $new_image;

            DB::table('brand')->where('id_brand',$id)->update($data);
            Session::flash('message','Cập nhật sản phẩm thành công');
            return Redirect::to('/admin/brand/list');
        }
        DB::table('brand')->where('id', $id)->update($data);  
        Session::flash('message','Sửa nhà cung cấp thành công');
        return Redirect::to('/admin/brand/list');
    }
    public function detail($id){
        $detail = DB::table('brand')->where('id_brand', $id)->get();
        return view('admin.brand.detail',['detail'=>$detail]);
    }
}
