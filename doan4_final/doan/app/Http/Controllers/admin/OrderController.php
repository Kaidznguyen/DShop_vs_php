<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
class OrderController extends Controller
{
    public function list(){
         
        $order = DB::table('orders')
        ->join('customer_shipping','customer_shipping.id_ship', '=', 'orders.shipping_id')
        ->orderBy('orders.id_order','desc')->get();
        return view('admin.order.list',['order'=>$order]);
    }
    public function detail($id){

        // $order_by_id = DB::table('orders')
        // ->join('orders as od','od.id_order', '=', 'order_detail.order_id')
        // ->join('order_detail','order_detail.figure_id', '=', 'figure.id')
        // ->where('orders.id_order', $id)
        // ->get();
        $listproduct = DB::table('order_detail')
        ->join('orders as or','or.id_order', '=', 'order_detail.order_id')
        ->join('figure as f','f.id', '=', 'order_detail.figure_id')
        ->where('order_detail.order_id',$id)->get();
        
        $customerId = DB::table('orders')
        ->join('customer_shipping','customer_shipping.id_ship', '=', 'orders.shipping_id')
        ->where('orders.id_order', $id)
        ->first();

        

        return view('admin.order.detail')
        ->with('order_by_id', $listproduct)
        ->with('cus', $customerId);
    }
}
