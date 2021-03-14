<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CaptchaServiceController;
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

//Guest
Route::get('/', [HomeController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/{kategori}', [MenuController::class, 'showByKategori']);
Route::view('/aboutus','v_about');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);


// User Logged In //
Route::group(['middleware' => 'user'], function(){
    Route::post('/pesan/langsung', [PesanController::class, 'submitOrder']);
    Route::get('/keranjang', [PesanController::class, 'showKeranjang']);
    Route::get('/keranjang/{id_menu}/{jumlah}', [PesanController::class, 'setKeranjang']);
    Route::get('/checkout', [PesanController::class, 'pesanDariKeranjang']);
    Route::get('/order', [PesanController::class, 'history']);
    Route::get('/deleteCart/{id_menu}/{email}',[PesanController::class, 'deleteDariKeranjang']);
    Route::post('/cart/edit', [PesanController::class, 'updateKeranjang']);
});

Auth::routes();

//Captcha
Route::get('/contact-form', [CaptchaServiceController::class, 'index']);
Route::post('/captcha-validation', [CaptchaServiceController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);

// Admin;
Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', [AdminController::class, 'viewMenu']);
    Route::get('/admin/addmenu', [AdminController::class, 'addMenu']);
    Route::post('/admin/insert', [AdminController::class, 'insert']);
    Route::get('/admin/editmenu/{id_menu}', [AdminController::class, 'editMenu']);
    Route::post('/admin/update', [AdminController::class, 'update']);
    Route::get('/admin/delete/{id_menu}', [AdminController::class, 'deleteMenu']);
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin/viewmenu', [AdminController::class, 'viewMenu']);