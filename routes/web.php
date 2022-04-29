<?php

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', function () {
    return view('layouts.admin', [
        'judul_halaman' => 'desa wisata',
        // 'users' => $user
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'judul_halaman' => 'Admin | Dashboard',
            'jumlahusers' => User::count(),
            'jumlahblog' => Blog::count()
        ]);
    });
    // user route
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::put('/user/{user}/update', [UserController::class, 'update']);
    Route::get('/user/{user}/detail', [UserController::class, 'show']);
    Route::get('/user/{user}/edit', [UserController::class, 'edit']);
    Route::delete('/user/{user}/delete', [UserController::class, 'destroy']);
    Route::get('/user/{user}/editprofile', [UserController::class, 'editProfile']);
    Route::put('/user/{user}/updateprofile', [UserController::class, 'updateProfile']);

    //blog route
    Route::get('/blog', [BlogController::class, 'index']);
    Route::get('/blog/create', [BlogController::class, 'create']);
    Route::get('/blog/{blog}/detail', [BlogController::class, 'show']);
    Route::get('/blog/{blog}/edit', [BlogController::class, 'edit']);
    Route::put('/blog/{blog}/update', [BlogController::class, 'update']);
    Route::delete('/blog/{blog}/delete', [BlogController::class, 'destroy']);
    Route::post('/blog/store', [BlogController::class, 'store']);
});


// route baru
// Route::get('/dashboard', function () {
//     return view('dashboard', ['judul_halaman' => 'Admin | Dashboard']);
// });

// Route::get('/user', function () {
//     return view('user', ['judul_halaman' => 'Admin | Data Pengguna']);
// });
// Route::get('/create-user', function () {
//     return view('create-user', ['judul_halaman' => 'Admin | Tambah Pengguna']);
// });
// Route::get('/edit-user', function () {
//     return view('edit-user', ['judul_halaman' => 'Admin | Edit Pengguna']);
// });
// Route::get('/detail-user', function () {
//     return view('detail-user', ['judul_halaman' => 'Admin | Detail Pengguna']);
// });
