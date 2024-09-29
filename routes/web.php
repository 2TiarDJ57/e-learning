<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DownloadFileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengumpulanCourseController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegistController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/fakultas/{fakultas}', [HomeController::class, 'showProdiFromFakultas'])->name('show.prodi');
Route::get('/home/fakultas/{fakultas}/prodi/{prodi}', [HomeController::class, 'showMataKuliahFromProdi'])->name('show.matakuliah');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegistController::class, 'index'])->name('register')->middleware('guest');

Route::resource('matakuliah.course', CourseController::class)->names([
    'index' => 'show.course',
    'create' => 'create.course',
    'store' => 'store.course',
    'show' => 'detail.course',
    'edit' => 'edit.course',
    'update' => 'update.course',
    'destroy' => 'destroy.course',
])->middleware('auth');

Route::get('/downloadfile/tugas/{course}', [DownloadFileController::class, 'fileTugas'])->name('download.tugas');
Route::get('/downloadfile/materi/{course}', [DownloadFileController::class, 'fileMateri'])->name('download.materi');

Route::post('/pengumpulancourse/{course}', [PengumpulanCourseController::class, 'store'])->name('store.pengumpulan');

Route::get('/prodi', [ProdiController::class, 'index'])->name('all.prodi');