<?php

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
