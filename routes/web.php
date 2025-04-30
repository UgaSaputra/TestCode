<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AksesController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RekapdataController;

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
    return view('Akses.login');
});

Route::get('login', [AksesController::class, 'showLoginForm'])->name('login');
Route::post('login', [AksesController::class, 'login'])->name('login.store');


Route::middleware(['auth'])->group(function () {
    Route::post('logout', [AksesController::class, 'logout'])->name('logout');

    // GURU
    Route::get('show', [GuruController::class, 'show'])->name('input.guru');
    Route::get('guru/data', [GuruController::class, 'data'])->name('guru.data');
    Route::post('guru', [GuruController::class, 'store'])->name('guru.store');
    Route::get('guru/{guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
    Route::put('guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
    Route::patch('guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
    Route::delete('guru/{guru}', [GuruController::class, 'destroy'])->name('guru.destroy');

    // SISWA
    Route::get('show/siswa', [SiswaController::class, 'show'])->name('input.siswa');
    Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.data');
    Route::get('siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::patch('siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    // KELAS
    Route::get('show/kelas', [KelasController::class, 'show'])->name('input.kelas');
    Route::post('kelas', [KelasController::class, 'store'])->name('kelas.store');
    Route::get('kelas', [KelasController::class, 'index'])->name('kelas.index');
    Route::get('kelas/{kelas}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::put('kelas/{kelas}', [KelasController::class, 'update'])->name('kelas.update');
    Route::patch('kelas/{kelas}', [KelasController::class, 'update'])->name('kelas.update');
    Route::delete('kelas/{kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');

    // REKAP
    Route::get('show/rekap', [RekapdataController::class, 'show'])->name('input.rekap');
    Route::post('rekap', [RekapdataController::class, 'store'])->name('rekap.store');
    Route::get('rekap', [RekapdataController::class, 'index'])->name('rekap.data');
    Route::delete('rekap/{rekap}', [RekapdataController::class, 'destroy'])->name('rekap.destroy');
});
