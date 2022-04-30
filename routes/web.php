<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// 2=call controller function
Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/',function (){
    return view('home.index');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
