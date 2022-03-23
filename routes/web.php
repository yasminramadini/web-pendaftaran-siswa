<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/form-daftar', [PageController::class, 'formDaftar'])->name('form-daftar');
Route::put('/siswa/diterima/{id}', [SiswaController::class, 'diterima'])->name('siswaDiterima')->middleware(['auth', 'admin']);
Route::put('/siswa/tidak-diterima/{id}', [SiswaController::class, 'tidakDiterima'])->name('siswaTidakDiterima')->middleware(['auth', 'admin']);
Route::resource('/siswa', SiswaController::class);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/store', [AuthController::class, 'storeLogin'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function() {
  Route::get('/dashboard', [SiswaController::class, 'index'])->name('admin.dashboard');
  
  Route::get('/pengaturan/edit-visi', [PengaturanController::class, 'editVisi'])->name('pengaturan.edit-visi');
  Route::put('/pengaturan/update-visi', [PengaturanController::class, 'updateVisi'])->name('pengaturan.update-visi');
    
  Route::get('/pengaturan/edit-misi', [PengaturanController::class, 'editMisi'])->name('pengaturan.edit-misi');
  Route::put('/pengaturan/update-misi', [PengaturanController::class, 'updateMisi'])->name('pengaturan.update-misi');
  
  Route::get('/pengaturan/edit-fasilitas', [PengaturanController::class, 'editFasilitas'])->name('pengaturan.edit-fasilitas');
  Route::put('/pengaturan/update-fasilitas', [PengaturanController::class, 'updateFasilitas'])->name('pengaturan.update-fasilitas');
  
  Route::resource('/pengaturan', PengaturanController::class);
});
