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

// 2=call controller function
Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/',function (){
    return view('home.index');
});

//3= route-> controller->view
Route::get('/test',[HomeController::class,'test'])->name('test');

//4- route with parameters
Route::get('/param/{id}/{nmbr}',[HomeController::class,'param'])->name('param');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
