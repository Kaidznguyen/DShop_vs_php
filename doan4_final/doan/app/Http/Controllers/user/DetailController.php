<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DetailController extends Controller
{
    public function detail($id){
        $category_product = DB::table('figure_category')->orderBy('id_cate','desc')->get();
        $brand = DB::table('brand')->orderBy('id_brand','desc')->get();


        $details_product = DB::table('figure')
        ->join('figure_category','figure_category.id_cate', '=', 'figure.figure_category_id')
        ->join('brand','brand.id_brand', '=', 'figure.brand_id')

        ->where('figure.id',$id)->get();
        
        $comment = DB::table('comment_figure')->where('figure_id',$id)->get();

        foreach($details_product as $key=>$value_relate){
            $category_id = $value_relate->id_cate;
        }   
        
        $related_product = DB::table('figure')
        ->join('figure_category','figure_category.id_cate', '=', 'figure.figure_category_id')
        ->join('brand','brand.id_brand', '=', 'figure.brand_id')
        ->join('comment_figure','comment_figure.figure_id', '=', 'figure.id')
        ->where('figure_category.id_cate',$category_id)->whereNotIn('figure.id',[$id])->get();     
        return view('user.figure.Detail',['detail'=>$details_product[0],'comment'=>$comment,'sp'=>$category_product,'brand'=>$brand,'relate'=> $related_product]);
    }
    public function comment(Request $request){

        if($request->id){
            
            $data = array();
            $data['name_com'] = $request->name_com;
            $data['comment_mes'] = $request->comment_mes;
            $data['figure_id'] = $request->id;
            DB::table('comment_figure')->insert($data);
           
            // return redirect()->route('/user/Detail/', ['id' => $request->id]);
            return redirect()->route('Detail', ['id' => $request->id]);

        }
    }



}
