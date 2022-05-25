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


// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard', [
            'judul_halaman' => 'Admin | Dashboard',
            'jumlahUsers' => User::count(),
            'jumlahBlogs' => Blog::count(),
            'jumlahGalleries' => Gallery::count()
        ]);
    });

    // user route
    Route::get('/dashboard/users', [UserController::class, 'index']);
    Route::get('/dashboard/user-create', [UserController::class, 'create']);
    Route::post('/dashboard/user-store', [UserController::class, 'store']);
    Route::put('dashboard/user-update/{user}', [UserController::class, 'update']);
    Route::get('/dashboard/user-details/{user}', [UserController::class, 'show']);
    Route::get('/dashboard/user-edit/{user}', [UserController::class, 'edit']);
    Route::get('/dashboard/user-delete/{user}', [UserController::class, 'destroy']);
    Route::get('/dashboard/profile-edit/{user}', [UserController::class, 'editProfile']);
    Route::put('/dashboard/profile-update/{user}', [UserController::class, 'updateProfile']);

    //blog route
    Route::get('/dashboard/blogs', [BlogController::class, 'index']);
    Route::get('/dashboard/blog-create', [BlogController::class, 'create']);
    Route::get('/dashboard/blog-details', [BlogController::class, 'show']);
    Route::get('dashboard//blog-edit/{blog}', [BlogController::class, 'edit']);
    Route::put('/dashboard/blog-update/{blog}', [BlogController::class, 'update']);
    Route::delete('/dashboard/blog-delete/{blog}', [BlogController::class, 'destroy']);
    Route::post('/dashboard/blog-store', [BlogController::class, 'store']);

    // gallery route 
    Route::get('/dashboard/galleries', [GalleryController::class, 'index']);
    Route::get('/dashboard/gallery-create', [GalleryController::class, 'create']);
    Route::post('/dashboard/gallery-store', [GalleryController::class, 'store']);
    Route::get('/dashboard/gallery-details/{gallery}', [GalleryController::class, 'show']);
    Route::get('/dashboard/gallery-edit/{gallery}', [GalleryController::class, 'edit']);
    Route::put('/dashboard/gallery-update/{gallery}', [GalleryController::class, 'update']);
    Route::delete('/dashboard/gallery-delete/{gallery}', [GalleryController::class, 'destroy']);

});




// admin
Route::get('dashboard/contact', function () {
    return view('dashboard.contact', ['judul_halaman' => 'Admin | Profil Kontak']);
});
Route::get('dashboard/social', function () {
    return view('dashboard.social', ['judul_halaman' => 'Admin | Profil Sosial Media']);
});

// landing page
Route::get('/', function() {
    return view('index', ['judul_halaman' => 'Desa Wisata Loha']);
});
Route::get('/about', function() {
    return view('about', ['judul_halaman' => 'Tentang Kami | Desa Wisata Loha']);
});
Route::get('/gallery', function() {
    return view('gallery', ['judul_halaman' => 'Galeri | Desa Wisata Loha']);
});
Route::get('/blog', function() {
    return view('blog', ['judul_halaman' => 'Blog | Desa Wisata Loha']);
});
Route::get('/contact', function() {
    return view('contact', ['judul_halaman' => 'Kontak Kami | Desa Wisata Loha']);
});