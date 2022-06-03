<?php

use App\Models\Blog;
use App\Models\User;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
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
            'jumlahUsers' => User::count(),
            'jumlahBlogs' => Blog::count(),
            'jumlahGalleries' => Gallery::count()
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
    Route::get('/user/{user}/profil', [UserController::class, 'editProfile']);
    Route::put('/user/{user}/updateprofil', [UserController::class, 'updateProfile']);

    //blog route
    Route::get('/blog', [BlogController::class, 'index']);
    Route::get('/blog/create', [BlogController::class, 'create']);
    Route::post('/blog/store', [BlogController::class, 'store']);
    Route::get('/blog/{blog:slug}/detail', [BlogController::class, 'show']);
    Route::get('/blog/{blog:slug}/edit', [BlogController::class, 'edit']);
    Route::put('/blog/{blog:slug}/update', [BlogController::class, 'update']);
    Route::delete('/blog/{blog}/delete', [BlogController::class, 'destroy']);

    // gallery route 
    Route::get('/gallery', [GalleryController::class, 'index']);
    Route::get('/gallery/create', [GalleryController::class, 'create']);
    Route::post('/gallery/store', [GalleryController::class, 'store']);
    Route::get('/gallery/{gallery}/detail', [GalleryController::class, 'show']);
    Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit']);
    Route::put('/gallery/{gallery}/update', [GalleryController::class, 'update']);
    Route::delete('/gallery/{gallery}/delete', [GalleryController::class, 'destroy']);
});


Route::get('/gallery', function () {
    return view('gallery', [
        'judul_halaman' => 'Admin | Data Galeri',
        'galleries' => Gallery::latest()->get()
    ]);
});
Route::get('/add-gallery', function () {
    return view('add-gallery', ['judul_halaman' => 'Admin | Tambah Galeri']);
});
Route::get('/edit-gallery', function () {
    return view('edit-gallery', ['judul_halaman' => 'Admin | Edit Galeri']);
});

Route::get('/contact', function () {
    return view('contact', ['judul_halaman' => 'Admin | Profil Kontak']);
});
Route::get('/social', function () {
    return view('social', ['judul_halaman' => 'Admin | Profil Sosial Media']);
});
