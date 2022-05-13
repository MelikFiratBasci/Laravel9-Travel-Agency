<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 1- write in route
Route::get('/hello', function () {
    return 'hello World';
});




//admin
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminHome')->middleware('auth');
//login
Route::get('/admin/login',[HomeController::class,'login'])->name('admin.login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin.logincheck');
Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin.logout');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//admin database
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
    Route::get('/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('/category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('/category/update',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('/category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('/category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

});


// 2=call controller function
Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/',function (){
    return view('home.index');
});





