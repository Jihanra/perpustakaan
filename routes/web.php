<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PeminjamanController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('anggotas', AnggotaController::class);

Route::resource('users', UserController::class);

Route::get('/search', [AnggotaController::class, 'search'])->name('search');

Route::resource('books', BookController::class);

Route::get('/searching', [BookController::class, 'searching'])->name('searching');

Route::get('anggotas/{id}/peminjaman', [AnggotaController::class, 'peminjaman']);

Route::get('/anggotas/{id}/report', [AnggotaController::class, 'report']);

Route::resource('peminjamans', PeminjamanController::class);



