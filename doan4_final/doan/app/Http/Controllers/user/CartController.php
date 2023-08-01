<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
    public function showcarts(){
        $carts = session()->get('cart');
        return view('user.cart.showcart',compact('carts'));
    }
    public function AddtoCart($id){
        // session()->flush('cart');
        // echo "<pre>";
        $figure = DB::table('figure')->where('id',$id)->first();
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] +=1;
        }
        else{
            $cart[$id] = [
                'id'=>$figure->id,
                'name'=>$figure->name,
                'price'=>$figure->promotionprice,
                'quantity'=>1,
                'img'=>$figure->img  
                  
            ];
        }
        session()->put('cart',$cart);
        return response()->json([
            'code'=>200,
            'mess'=>'ok'
        ],200);
        // echo "<pre>";
        // print_r(session()->get('cart'));
    }
    public function updatecart(Request $request){
        if($request->id && $request->quantity){
            $carts = session()->get('cart');
            $carts[$request->id]['quantity']=$request->quantity;
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cart_component = view('user.cart.showcart',compact('carts'));
            return response()->json([
                'cart_component'=>$cart_component,
            'code'=>200

            ],200);
        }
    }
    public function deletecart(Request $request){
        if($request->id){
            
            $carts = session()->get('cart');
            unset($carts[$request->id]);
        
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cart_component = view('user.cart.showcart',compact('carts'));
            return response()->json([
                'cart_component'=>$cart_component,
            'code'=>200

            ],200);
        }
    }
}
