<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function showadmin(){
        return view('admin.index',[
            'title' => 'Dshop - Admin'
        ]);
    }
}
