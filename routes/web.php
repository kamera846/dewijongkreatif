<?php

use App\Models\Blog;
use App\Models\Section;
use App\Models\User;
use App\Models\Social;
use App\Models\Gallery;
use App\Models\Setting;
use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SettingController;
// use App\Http\Controllers\RegisterController;

// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard', [
            'judul_halaman' => 'Admin | Dashboard',
            'jumlah_pengguna' => User::count(),
            'jumlah_blog' => Blog::count(),
            'jumlah_galeri' => Gallery::count(),
            'settings' => Setting::get()
        ]);
    });

    // user route
    Route::get('/dashboard/user', [UserController::class, 'index']);
    Route::get('/dashboard/user/create', [UserController::class, 'create']);
    Route::post('/dashboard/user/store', [UserController::class, 'store']);
    Route::put('/dashboard/user/{user}/update', [UserController::class, 'update']);
    Route::get('/dashboard/user/{user}/detail', [UserController::class, 'show']);
    Route::get('/dashboard/user/{user}/edit', [UserController::class, 'edit']);
    Route::delete('/dashboard/user/{user}/delete', [UserController::class, 'destroy']);
    Route::get('/dashboard/user/{user}/profile-edit', [UserController::class, 'editProfile']);
    Route::put('/dashboard/user/{user}/profile-update', [UserController::class, 'updateProfile']);

    //blog route
    Route::get('/dashboard/blog', [BlogController::class, 'index']);
    Route::get('/dashboard/blog/create', [BlogController::class, 'create']);
    Route::post('/dashboard/blog/store', [BlogController::class, 'store']);
    Route::get('/dashboard/blog/{blog}/detail', [BlogController::class, 'show']);
    Route::get('/dashboard/blog/{blog}/edit', [BlogController::class, 'edit']);
    Route::put('/dashboard/blog/{blog}/update', [BlogController::class, 'update']);
    Route::delete('/dashboard/blog/{blog}/delete', [BlogController::class, 'destroy']);

    // gallery route 
    Route::get('/dashboard/gallery', [GalleryController::class, 'index']);
    Route::get('/dashboard/gallery/create', [GalleryController::class, 'create']);
    Route::post('/dashboard/gallery/store', [GalleryController::class, 'store']);
    Route::get('/dashboard/gallery/{gallery}/detail', [GalleryController::class, 'show']);
    Route::get('/dashboard/gallery/{gallery}/edit', [GalleryController::class, 'edit']);
    Route::put('/dashboard/gallery/{gallery}/update', [GalleryController::class, 'update']);
    Route::delete('/dashboard/gallery/{gallery}/delete', [GalleryController::class, 'destroy']);

    Route::get('/dashboard/section', [SectionController::class, 'index']);
    Route::get('/dashboard/section/create', [SectionController::class, 'create']);
    Route::post('/dashboard/section/store', [SectionController::class, 'store']);
    Route::get('/dashboard/section/{section:slug}/detail', [SectionController::class, 'show']);
    Route::get('/dashboard/section/{section:slug}/edit', [SectionController::class, 'edit']);
    Route::put('/dashboard/section/{section:slug}/update', [SectionController::class, 'update']);
    Route::delete('/dashboard/section/{section:slug}/delete', [SectionController::class, 'destroy']);
});


// Landing Page
Route::get('/', [MainController::class, 'index']);
Route::get('/blog', [BlogController::class, 'landingPage']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'postDetails']);
Route::get('/gallery', [GalleryController::class, 'landingPage']);


Route::get('/contact', [Contact::class, 'show']);
Route::post('/contact', [Contact::class, 'sendMail']);

Route::get('/about', function() {
    return view('about', [
        'judul_halaman' => 'Tentang Kami | Desa Wisata Loha',
    ]);
});



// admin
Route::get('/dashboard/setting', [SettingController::class, 'index']);
Route::post('/dashboard/setting/store', [SettingController::class, 'store']);
Route::put('/dashboard/setting/{setting}/update', [SettingController::class, 'update']);
// Route::get('/dashboard/contact', function () {
//     return view('dashboard.contact', ['judul_halaman' => 'Admin | Profil Kontak']);
// });
// Route::get('/dashboard/social', function () {
//     return view('dashboard.social', ['judul_halaman' => 'Admin | Profil Sosial Media']);
// });
Route::get('/dashboard/social', [SocialController::class, 'index']);
Route::get('/dashboard/social/create', [SocialController::class, 'create']);
Route::post('/dashboard/social/store', [SocialController::class, 'store']);
Route::get('/dashboard/social/{social}/edit', [SocialController::class, 'edit']);
Route::put('/dashboard/social/{social}/update', [SocialController::class, 'update']);
Route::delete('/dashboard/social/{social}/delete', [SocialController::class, 'destroy']);


Route::get('/about', function () {
    $settings = Setting::get();
    foreach ($settings as $setting) {
        if ($setting->web_title !== null) {
            return view('about', ['judul_halaman' => 'Tentang Kami | ' . $setting->web_title, 'settings' => Setting::get(), 'socials' => Social::get(), 'sections' => Section::get(), 'newBlogs' => Blog::latest('updated_at')->get()]);
        } else {
            return view('about', ['judul_halaman' => 'Tentang Kami', 'settings' => Setting::get(), 'socials' => Social::get(), 'sections' => Section::get(), 'newBlogs' => Blog::latest('updated_at')->get()]);
        }
    }
});
Route::get('/blog/slug', function () {
    $settings = Setting::get();
    foreach ($settings as $setting) {
        if ($setting->web_title !== null) {
            return view('blog-details', ['judul_halaman' => 'Judul Postingan | ' . $setting->web_title]);
        } else {
            return view('blog-details', ['judul_halaman' => 'Judul Postingan']);
        }
    }
});
