<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // CODE ĐĂNG NHẬP & ĐĂNG KÝ
    public function showlogin(){
        return view('user.login');
    }

    // public function login(Request $request){
 
    //     $email = $request->email;
    //     $password = md5($request->password);
    //     $result = DB::table('user')
    //         ->where('email', $email)
    //         ->where('password', $password)
    //         ->first();

    // //    dd($result);
    //     if($result){
        
    //     Session::put('id_us', $result->id_us);
    //     Session::put('username', $result->username);
    //     Session::put('role', $result->role);
       
    //     return Redirect::to('/')->with('result',$result);
    //     }
    //     else{
    //     return Redirect::to('/user/login');
    //     }
    //    }
    public function login(Request $request){
        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('user')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
    
        if($result){
            Session::put('id_us', $result->id_us);
            Session::put('username', $result->username);
            Session::put('role', $result->role);
            return Redirect::to('/')->with('result',$result);
        }
        else{
            return Redirect::to('/user/showlogin')->with('error', 'Email hoặc password không đúng');
        }
    }
    
    public function logout(){

        Session::flush();
        return Redirect::to('/');
    }

    public function showregister(){
        return view('user.register');
    }
    public function register(Request $request){
        $data = array();
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        $data['role'] = $request->role;
        
        
        $user_id = DB::table('user')->insertGetId($data);

        Session::put('user', $user_id);
       
        return Redirect::to('/user/showlogin');
    }
    // CODE CHECKOUT
    public function checkout(){
        return view('user.checkout');
    }
    public function saveshipping(Request $request){
        // thêm vào bảng shipping
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['note'] = $request->note;
        $data['payment'] = $request->payment;
        $shipping = DB::table('customer_shipping')->insertGetId($data);
        Session::put('shipping_id', $shipping);
        // thêm vào bảng orders
        $order_data=array();
        $order_data['shipping_id']=Session::get('shipping_id');
        $order_data['user_id']=Session::get('id_us');
        $order_data['status']='pending';
        $order_id=DB::table('orders')->insertGetId($order_data);
        $cart = Session::get('cart');
        
        foreach($cart as $x){
            $order__detail_data=array();
            $order__detail_data['order_id']=$order_id;
            $order__detail_data['figure_id']=$x['id'];
            $order__detail_data['totalquantity']=$x['quantity'];
            $order__detail_data['totalprice']=$x['quantity']*$x['price'];
            DB::table('order_detail')->insert($order__detail_data);

        }
        Session::forget('cart');

        return Redirect::to('/order');

    }
    public function order(){
        $id = Session::get('id_us');
        
        $order = DB::table('orders')
        ->join('customer_shipping','customer_shipping.id_ship', '=', 'orders.shipping_id')->where('user_id',$id)
        ->get();
        
        return view('user.order')->with('order',$order);

    }
    public function orderdetail($id){
        $listproduct = DB::table('order_detail')
        ->join('orders as or','or.id_order', '=', 'order_detail.order_id')
        ->join('figure as f','f.id', '=', 'order_detail.figure_id')
        ->where('order_detail.order_id',$id)->get();
        
        $customerId = DB::table('orders')
        ->join('customer_shipping','customer_shipping.id_ship', '=', 'orders.shipping_id')
        ->where('orders.id_order', $id)
        ->first();

        

        return view('user.order_detail')
        ->with('order_by_id', $listproduct)
        ->with('cus', $customerId);
      

    }
}
