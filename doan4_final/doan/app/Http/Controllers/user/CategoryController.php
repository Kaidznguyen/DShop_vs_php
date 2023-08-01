<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function category(){

        $category_figure = DB::table('figure_category')->get();
        $brand_figure = DB::table('brand')->get();
        $getall = DB::table('figure')->paginate(9);

       
        return view('user.category_item')->with('cate',$category_figure)->with('brand',$brand_figure)->with('all',$getall);

    }
    public function categorybybc($id){
        $category_figure = DB::table('figure_category')->get();
        $brand_figure = DB::table('brand')->get();
        // $figure_by_cate_and_brand = DB::table('figure')
        // ->join('figure_category','figure_category.id_cate', '=', 'figure.figure_category_id')
        // ->join('brand','brand.id_brand', '=', 'figure.brand_id')->
        // where(function($query) use ($id) {
        //     $query->where('figure_category.id_cate',$id)
        //           ->orWhere('brand.id_brand',$id);
        //  })->get();
         $figure_by_cate_and_brand = DB::table('figure')
         ->join('figure_category','figure_category.id_cate', '=', 'figure.figure_category_id')
         ->join('brand','brand.id_brand', '=', 'figure.brand_id')->where('figure_category.id_cate',$id)
         ->orwhere(function($query) use ($id) {
            
            $query->where('brand.id_brand',$id)
            ->where('figure_category.id_cate','!=',$id);
         })->paginate(9);        
       
        return view('user.category_item')->with('cate',$category_figure)->with('brand',$brand_figure)->with('all',$figure_by_cate_and_brand);

    }
    public function categorybyprice(Request $request){
        $category_figure = DB::table('figure_category')->get();
        $brand_figure = DB::table('brand')->get();
        $min = $request->min;
        $max = $request->max;
        
        $result = DB::table('figure')
        ->whereBetween('promotionprice', [$min, $max])
        ->get();
        return view('user.figure.search')->with('cate',$category_figure)->with('brand',$brand_figure)->with('searchkey',$result);
    }
}
