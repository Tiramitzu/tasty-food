<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('tentang', [TentangController::class, 'index'])->name('tentang');
Route::post('tentang/{nama}', [TentangController::class, 'update'])->name('tentang.update');

Route::resource('berita', BeritaController::class)->only(['index', 'show']);

Route::get('berita_paginate', [BeritaController::class, 'berita_paginate'])->name('ajax.paginate.berita');

Route::get('galeri', [GaleriController::class, 'index'])->name('galeri.index');

Route::get('galeri_paginate', [GaleriController::class, 'galeri_paginate'])->name('ajax.paginate.galeri');

Route::get('kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('kontak/{nama}', [KontakController::class, 'update'])->name('kontak.update');

Route::get('cba/login', [UserController::class, 'login'])->name('login');
Route::post('cba/login', [UserController::class, 'proc_login'])->name('proc_login');

Route::post('cba/berita/store', [BeritaController::class, 'store'])->name('berita.store');
Route::get('cba/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::get('cba/berita/edit/{slug}', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('cba/berita/update/{slug}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('cba/berita/destroy/{slug}', [BeritaController::class, 'destroy'])->name('berita.destroy');

Route::post('cba/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
Route::delete('cba/galeri/destroy/{name}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

Route::get('cba/logout', [UserController::class, 'logout'])->name('logout');

Route::post('send-email', [EmailController::class, 'sendEmail'])->name('send-email');
