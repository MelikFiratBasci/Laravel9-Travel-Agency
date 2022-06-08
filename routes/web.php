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

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

});
Route::middleware('auth')->prefix('user')->namespace('myaccount')->group(function () {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');

});






//admin
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminHome')->middleware('auth');
//login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin.login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin.logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//admin database
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');




    #Category
    Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('/category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::get('/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #Package
    Route::prefix('package')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\PackageController::class, 'index'])->name('admin_packages');
        Route::get('create', [\App\Http\Controllers\Admin\PackageController::class, 'create'])->name('admin_package_add');
        Route::post('store', [\App\Http\Controllers\Admin\PackageController::class, 'store'])->name('admin_package_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\PackageController::class, 'edit'])->name('admin_package_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\PackageController::class, 'update'])->name('admin_package_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\PackageController::class, 'destroy'])->name('admin_package_delete');
        Route::get('show', [\App\Http\Controllers\Admin\PackageController::class, 'show'])->name('admin_package_show');
    });
    #message
    Route::prefix('message')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
    });
    #product Image
    Route::prefix('image')->group(function () {
        Route::get('create/{package_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{package_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{package_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });
    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

});


//homepage//
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/fag', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');

Route::get('/test', [HomeController::class, 'test'])->name('test');





