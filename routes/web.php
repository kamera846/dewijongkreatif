<?php

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
<<<<<<< HEAD
    return view('welcome');
});
Route::get('/login', function () {
    return view('login', ['judul_halaman' => 'Admin | Log in admin']);
});
Route::get('/register', function () {
    return view('register', ['judul_halaman' => 'Admin | Daftar Admin']);
});
Route::get('/dashboard', function () {
    return view('dashboard', ['judul_halaman' => 'Admin | Dashboard']);
});
=======
    return view('layouts.admin');
})->middleware('auth');
Route::get('register', [RegisterController::class, 'index']);
Route::post('register/store', [RegisterController::class, 'store']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);
>>>>>>> 4845357df311c2c13777b1265c7911c059705e58
