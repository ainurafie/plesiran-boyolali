<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfirmationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    return view('index',  ['wisata' => DB::table('wisatas')->get()]);
})->name('beranda');

Auth::routes();

Route::get('/admin', function () {
    return view('home');
})->name('admin')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('wisata', \App\Http\Controllers\WisataController::class)->middleware('auth');
Route::resource('kontak', \App\Http\Controllers\KontakController::class)->middleware('auth');
