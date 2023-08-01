<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class ProductCategoryController extends Controller
{
    public function showadd(){
        return view('admin.productcategory.add',[
            'title' => 'Thêm Danh Mục Danh Mục Mô Hình'
        ]);
    }
    public function edit($id){
        $edit = DB::table('figure_category')->where('id_cate', $id)->get();
        return view('admin.productcategory.edit',['edit'=>$edit]);
        
    }
    public function add(Request $request){
        $data = array();
        $data['name_cate'] = $request->name_cate;
        $data['description_cate'] = $request->description;
        DB::table('figure_category')->insert($data);
        Session::flash('message','Thêm loại mô hình thành công');
        return Redirect::to('/admin/productcategory/list');
    }

    public function listcategory(){
        $listcategory = DB::table('figure_category')->get(); 
      
        return view('admin.productcategory.list',['listcategory'=>$listcategory]);
    }
    public function deletecategory($id){
        DB::table('figure_category')->where('id_cate', $id)->delete();  
        Session::flash('message','Xóa loại mô hình thành công');
        // Session::put('message','Xóa danh mục sản phẩm thành công'); 
        return Redirect::to('/admin/productcategory/list');
    }
    public function update(Request $request,$id){
        $data = array();
        $data['name_cate'] = $request->name_cate;
        $data['description_cate'] = $request->description;
        DB::table('figure_category')->where('id_cate', $id)->update($data);  
        Session::flash('message','Sửa loại mô hình thành công'); 
        return Redirect::to('/admin/productcategory/list');
    }
    public function detail($id){
        $detail = DB::table('figure_category')->where('id_cate', $id)->get();
        return view('admin.productcategory.detail',['detail'=>$detail]);
    }
}