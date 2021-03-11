<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesanController;
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

//User
Route::get('/', [HomeController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/{kategori}', [MenuController::class, 'showByKategori']);
Route::get('/pesan/{id}',[PesanController::class, 'index']);

// Admin //
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/viewmenu', [AdminController::class, 'viewMenu']);
Route::get('/admin/addmenu', [AdminController::class, 'addMenu']);
Route::post('/admin/insert', [AdminController::class, 'insert']);
Route::get('/admin/editmenu/{id_menu}', [AdminController::class, 'editMenu']);
Route::post('/admin/update', [AdminController::class, 'update']);
Route::get('/admin/delete/{id_menu}', [AdminController::class, 'deleteMenu']);



Route::get('/menu/{id_menu}', [HomeController::class, 'menu']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::view('/aboutus','v_about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
