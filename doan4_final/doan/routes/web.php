<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\PostCategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ProductCategoryController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserLoginController;
use App\Http\Controllers\user\BlogController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\CategoryController;
use App\Http\Controllers\user\DetailController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// TRANG ADMIN
Route::get('/admin/showadmin',[AdminController::class,'showadmin']);
//************************************************************************************ */
// QUẢN LÝ USER LOGIN
Route::get('/admin/user_login/list',[UserLoginController::class,'list']);
Route::get('/admin/user_login/showadd',[UserLoginController::class,'showadd']);
Route::get('/admin/user_login/detail{id}',[UserLoginController::class,'detail']);
Route::post('/admin/user_login/add',[UserLoginController::class,'add']);
Route::get('/admin/user_login/edit{id}',[UserLoginController::class,'edit']);
Route::get('/admin/user_login/delete{id}',[UserLoginController::class,'delete']);
Route::post('/admin/user_login/update{id}',[UserLoginController::class,'update']);
// QUẢN LÝ LOẠI MÔ HÌNH
Route::get('/admin/productcategory/list',[ProductCategoryController::class,'listcategory']);
Route::get('/admin/productcategory/showadd',[ProductCategoryController::class,'showadd']);
Route::get('/admin/productcategory/detail{id}',[ProductCategoryController::class,'detail']);
Route::post('/admin/productcategory/add',[ProductCategoryController::class,'add']);
Route::get('/admin/productcategory/edit{id}',[ProductCategoryController::class,'edit']);
Route::get('/admin/productcategory/delete{id}',[ProductCategoryController::class,'deletecategory']);
Route::post('/admin/productcategory/update{id}',[ProductCategoryController::class,'update']);
//************************************************************************************ */
// QUẢN LÝ Thương hiệu
Route::get('/admin/brand/list',[BrandController::class,'list']);
Route::get('/admin/brand/showadd',[BrandController::class,'showadd']);
Route::get('/admin/brand/detail{id}',[BrandController::class,'detail']);
Route::post('/admin/brand/add',[BrandController::class,'add']);
Route::get('/admin/brand/edit{id}',[BrandController::class,'edit']);
Route::get('/admin/brand/delete{id}',[BrandController::class,'delete']);
Route::post('/admin/brand/update{id}',[BrandController::class,'update']);
//************************************************************************************ */
// QUẢN LÝ mô hình
Route::get('/admin/product/list',[ProductController::class,'list']);
Route::get('/admin/product/showadd',[ProductController::class,'showadd']);
// Route::get('/admin/product/detail{id}',[ProductController::class,'detail']);
Route::post('/admin/product/add',[ProductController::class,'add']);
Route::get('/admin/product/edit{id}',[ProductController::class,'edit']);
Route::get('/admin/product/delete{id}',[ProductController::class,'delete']);
Route::post('/admin/product/update{id}',[ProductController::class,'update']);
//************************************************************************************ */
// QUẢN LÝ LOẠI BÀI VIẾT
Route::get('/admin/postcategory/list',[PostCategoryController::class,'listcategory']);
Route::get('/admin/postcategory/showadd',[PostCategoryController::class,'showadd']);
Route::get('/admin/postcategory/detail{id}',[PostCategoryController::class,'detail']);
Route::post('/admin/postcategory/add',[PostCategoryController::class,'add']);
Route::get('/admin/postcategory/edit{id}',[PostCategoryController::class,'edit']);
Route::get('/admin/postcategory/delete{id}',[PostCategoryController::class,'deletecategory']);
Route::post('/admin/postcategory/update{id}',[PostCategoryController::class,'update']);
//************************************************************************************ */
// QUẢN LÝ BÀI VIẾT
Route::get('/admin/post/list',[PostController::class,'list']);
Route::get('/admin/post/showadd',[PostController::class,'showadd']);
Route::get('/admin/post/detail{id}',[PostController::class,'detail']);
Route::post('/admin/post/add',[PostController::class,'add']);
Route::get('/admin/post/edit{id}',[PostController::class,'edit']);
Route::get('/admin/post/delete{id}',[PostController::class,'delete']);
Route::post('/admin/post/update{id}',[PostController::class,'update']);
//************************************************************************************ */
// QUẢN LÝ HÓA ĐƠN
Route::get('/admin/order/list',[OrderController::class,'list']);
Route::get('/admin/order/detail{id}',[OrderController::class,'detail']);

//************************************************************************************ */
// TRANG USER PAGE
// GD trang chủ
Route::get('/',[HomeController::class,'index']);
Route::post('/user/search',[HomeController::class,'search']);
// GD CHI TIẾT MÔ HÌNH
Route::get('/user/Detail/{id}',[DetailController::class,'detail'])->name('Detail');
Route::post('/user/Detail/{id}',[DetailController::class,'comment']);

// GD XEM TẤT CẢ SẢN PHẨM VÀ GD XEM SẢN PHẨM THEO LOẠI, THƯƠNG HIỆU, GIÁ TIỀN
Route::get('/user/category_item',[CategoryController::class,'category']);// TẤT CẢ
Route::get('/user/category_item/{id}',[CategoryController::class,'categorybybc']);//THEO LOẠI VÀ THƯƠNG HIỆU
Route::get('/user/category_item_by_price',[CategoryController::class,'categorybyprice']);// XEM THEO GIÁ

//GD GIỎ HÀNG
Route::get('/addcart/{id}',[CartController::class,'AddtoCart']);
Route::get('/user/showcarts',[CartController::class,'showcarts']);
Route::get('/updatecart',[CartController::class,'updatecart']);
Route::get('/deletecart',[CartController::class,'deletecart']);
// GD LOGIN
Route::get('/user/showlogin',[UserController::class,'showlogin']);
Route::post('/user/login',[UserController::class,'login']);
Route::get('/user/logout',[UserController::class,'logout']);
// GD REGISTER
Route::get('/user/showregister',[UserController::class,'showregister']);
Route::Post('/user/register',[UserController::class,'register']);
// GD CHECKOUT
Route::get('/user/checkout',[UserController::class,'checkout']);
Route::post('/save',[UserController::class,'saveshipping']);
Route::get('/order',[UserController::class,'order']);
Route::get('/user/order_detail/{id}',[UserController::class,'orderdetail']);
// GD TRANG BÀI VIẾT VÀ CHI TIẾT BÀI VIẾT
Route::get('/user/blog_item',[BlogController::class,'category']);// TẤT CẢ
Route::get('/user/category_blog_item/{id}',[BlogController::class,'blogbycategory']);//THEO LOẠI
Route::get('/user/blog_detail/{id}',[BlogController::class,'detail']);











