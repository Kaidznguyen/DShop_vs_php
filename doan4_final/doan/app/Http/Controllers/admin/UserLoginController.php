<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

session_start();

class UserLoginController extends Controller
{
    public function list(){
        $listuser = DB::table('user')->get(); 
      
        return view('admin.user_login.list',['listuser'=>$listuser]);
    }
    public function showadd(){
        return view('admin.user_login.add');
    }
    public function add(Request $request){
        $data = array();
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        $data['role'] = $request->role;
        
        
        DB::table('user')->insert($data);
        Session::flash('message','Thêm tài khoản thành công');
        return Redirect::to('/admin/user_login/list');
    }
    public function delete($id){
        DB::table('user')->where('id_us', $id)->delete();  
        Session::flash('message','Xóa tài khoản thành công');
        return Redirect::to('/admin/user_login/list');
    }
    public function edit($id){
        $edit = DB::table('user')->where('id_us', $id)->get();
        return view('admin.user_login.edit',['edit'=>$edit]);
        
    }
    public function update(Request $request,$id){
        $data = array();
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        $data['role'] = $request->role;
        
        DB::table('user')->where('id_us', $id)->update($data);  
        Session::flash('message','Sửa tài khoản thành công');
        return Redirect::to('/admin/user_login/list');
    }
    public function detail($id){
        $detail = DB::table('user')->where('id_us', $id)->get();
        return view('admin.user_login.detail',['detail'=>$detail]);
    }
}
