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

Route::view('/', 'index');
Route::view('/form-daftar', 'form-daftar')->name('form-daftar');

Route::prefix('admin')->group(function() {
  Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
  Route::view('/pengaturan', 'admin.pengaturan')->name('admin.pengaturan');
});
