<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class HomeController extends Controller
{
    public function index(){
        $list_product = DB::table('figure')->where('figure_category_id', 17)->orWhere('figure_category_id', 1)->orWhere('figure_category_id', 9)->orWhere('figure_category_id', 14)->orWhere('figure_category_id', 16)->orderBy('id','desc')->limit(8)->get();
        $list_product_pk = DB::table('figure')->where('figure_category_id', '15')->orderBy('id','desc')->limit(8)->get();
        $hot_figure = DB::table('figure')->where('id', '33')->orwhere('id', '37')->orwhere('id', '32')->orderBy('id','desc')->limit(3)->get();
        $brand = DB::table('brand')->orderBy('id_brand','desc')->get();
       
        return view('user.index')->with('figure',$list_product)->with('pk',$list_product_pk)->with('hot',$hot_figure)->with('brand',$brand);

    }
    public function search(Request $request){

        $keywords  = $request->keywords_submit  ;
        $category_figure = DB::table('figure_category')->get();
        $brand_figure = DB::table('brand')->get();

        $search_product = DB::table('figure')->where('name', 'like', '%' .$keywords. '%')->get();
       
        return view('user.figure.search')->with('cate',$category_figure)->with('brand',$brand_figure)->with('searchkey',$search_product);
    }
}
