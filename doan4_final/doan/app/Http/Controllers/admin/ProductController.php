<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();
class ProductController extends Controller
{
    public function list(){
        $listproduct = DB::table('figure')
        ->join('figure_category','figure_category.id_cate', '=', 'figure.figure_category_id')
        ->join('brand','brand.id_brand', '=', 'figure.brand_id')
        ->orderBy('figure.id','desc')->get();

        return view('admin.product.list',['listproduct'=>$listproduct]);
    }
    public function showadd(){
        $category_product = DB::table('figure_category')->orderBy('figure_category.id_cate','desc')->get();
        $brand_product = DB::table('brand')->orderBy('brand.id_brand','desc')->get();


        return view('admin.product.add')->with('category_product',$category_product)
        ->with('brand_product', $brand_product);

    }
    public function add(Request $request){
        
        $data = array();
        $data['name'] = $request->name;
        $data['figure_category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        $data['promotionprice'] = $request->promotionprice;
        $data['quantity'] = $request->quantity;
        $data['img'] = $request->img;
        $data['warranty'] = $request->warranty;


        $get_image =  $request-> file('img');
        if($get_image){
            $new_image = $get_image->getClientOriginalName();
            if(file_exists('Upload/'.$new_image)){
                unlink('Upload/'.$new_image);
            }
            $get_image->move('Upload/', $new_image);
            $data['img'] = $new_image;

            DB::table('figure')->insert($data);
            Session::flash('message','Thêm mô hình thành công');
            return Redirect::to('/admin/product/list');
        }

        $data['img'] = '';

            DB::table('figure')->insert($data);
            Session::flash('message','Thêm mô hình thành công');
            return Redirect::to('/admin/product/list');
    }
    public function delete($id){
       
        DB::table('figure')->where('id', $id)->delete();  
        Session::flash('message','Xóa mô hình thành công'); 
        return Redirect::to('/admin/product/list');
    }
    
    public function edit($id){
        
        $category_product = DB::table('figure_category')->orderBy('figure_category.id_cate','desc')->get();
        $brand_product = DB::table('brand')->orderBy('brand.id_brand','desc')->get();
        $edit = DB::table('figure')->where('id', $id)->get();

        
        $mamagerproduct = view('admin.product.edit')->with('edit', $edit)
        ->with('category_product', $category_product)
        ->with('brand_product', $brand_product);
        return view('admin.layout')->with('admin.product.edit',$mamagerproduct);
    }
    public function update(Request $request,$id){
        
        $data = array();
        $data['name'] = $request->name;
        $data['figure_category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        $data['promotionprice'] = $request->promotionprice;
        $data['quantity'] = $request->quantity;
        // $data['img'] = $request->img;
        $data['warranty'] = $request->warranty;

        $get_image =  $request-> file('img');
        if($get_image){
            $new_image = $get_image->getClientOriginalName();

            if(file_exists('Upload/'.$new_image)){
                unlink('Upload/'.$new_image);
            }
            $get_image->move('Upload/', $new_image);

            $data['img'] = $new_image;

            DB::table('figure')->where('id',$id)->update($data);
            Session::flash('message','Cập nhật mô hình thành công');
            return Redirect::to('/admin/product/list');
        }
        DB::table('figure')->where('id', $id)->update($data);  
        Session::flash('success','Cập nhật mô hình thành công'); 
        return Redirect::to('/admin/product/list');
    }
}
