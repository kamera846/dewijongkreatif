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
//     return view('welcome');
// });
    return view('layouts.admin');
})->middleware('auth');
Route::get('register', [RegisterController::class, 'index']);
Route::post('register/store', [RegisterController::class, 'store']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

// route baru
Route::get('/dashboard', function () {
        return view('dashboard', ['judul_halaman' => 'Admin | Dashboard']);
    });