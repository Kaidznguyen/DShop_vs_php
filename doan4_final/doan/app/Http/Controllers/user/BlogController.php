<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function category(){

        $category = DB::table('post_category')->get();
        // dd($category);
        // $brand_figure = DB::table('brand')->get();
        $getall = DB::table('post')->get();

       
        return view('user.blog_category')->with('cate',$category)->with('all',$getall);

    }
    public function blogbycategory($id){
        $category_figure = DB::table('post_category')->get();

         $post_by_cate = DB::table('post')
         ->join('post_category','post_category.id_cate', '=', 'post.post_category_id')
         ->where('post_category.id_cate','=',$id)->get();        
       
        return view('user.blog_category')->with('cate',$category_figure)->with('all',$post_by_cate);

    }
    public function detail($id){
        $category_product = DB::table('post_category')->orderBy('id_cate','desc')->get();
    


        $details_product = DB::table('post')
        ->join('post_category','post_category.id_cate', '=', 'post.post_category_id')

        ->where('post.id',$id)->get();
        
        

        foreach($details_product as $key=>$value_relate){
            $category_id = $value_relate->id_cate;
        }   
        
     
        return view('user.blog_detail',['detail'=>$details_product[0],'sp'=>$category_product]);
    }
}
