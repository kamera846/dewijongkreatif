<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    //     return view('welcome');
    // });
    return view('layouts.admin');
})->middleware('auth');
Route::get('register', [RegisterController::class, 'index']);
Route::post('register/store', [RegisterController::class, 'store']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('/dashboard/login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

// route baru
Route::get('admin/dashboard', function () {
        return view('dashboard', ['judul_halaman' => 'Admin | Dashboard']);
    });
    
Route::get('admin/user', function () {
        return view('user', ['judul_halaman' => 'Admin | Data Pengguna']);
    });
Route::get('admin/add-user', function () {
        return view('add-user', ['judul_halaman' => 'Admin | Tambah Pengguna']);
    });
Route::get('admin/edit-user', function () {
        return view('edit-user', ['judul_halaman' => 'Admin | Edit Pengguna']);
    });
Route::get('admin/detail-user', function () {
        return view('detail-user', ['judul_halaman' => 'Admin | Detail Pengguna']);
    });

Route::get('admin/blog', function () {
    return view('blog', ['judul_halaman' => 'Admin | Data Postingan']);
});
Route::get('admin/add-post', function () {
        return view('add-post', ['judul_halaman' => 'Admin | Tambah Postingan']);
    });
Route::get('admin/edit-post', function () {
        return view('edit-post', ['judul_halaman' => 'Admin | Edit Postingan']);
    });
Route::get('admin/detail-post', function () {
        return view('detail-post', ['judul_halaman' => 'Admin | Detail Postingan']);
    });

Route::get('admin/gallery', function () {
    return view('gallery', ['judul_halaman' => 'Admin | Data Galeri']);
});
Route::get('admin/add-gallery', function () {
        return view('add-gallery', ['judul_halaman' => 'Admin | Tambah Galeri']);
    });
Route::get('admin/edit-gallery', function () {
        return view('edit-gallery', ['judul_halaman' => 'Admin | Edit Galeri']);
    });
Route::get('admin/detail-gallery', function () {
        return view('detail-gallery', ['judul_halaman' => 'Admin | Detail Galeri']);
    });