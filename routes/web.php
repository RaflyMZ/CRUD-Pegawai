<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PegawaiController;


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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//About Me
Route::get('about', [AboutController::class, 'abt'])->name('about');

Route::get('pegawai', [PegawaiController::class, 'index'])->name('pegawai')->middleware('auth');
Route::get('job', [JobController::class, 'index'])->name('job')->middleware('auth');

//PEGAWAI
Route::get('tambah_pegawai', [PegawaiController::class, 'tambahPegawai'])->name('tambahPegawai');
Route::post('proses_tambah_pegawai', [PegawaiController::class, 'proses_tambahPegawai'])->name('proses_tambahPegawai');
Route::post('proses_edit_pegawai', [PegawaiController::class, 'proses_editPegawai'])->name('proses_editPegawai');
Route::get('edit_pegawai', [PegawaiController::class, 'editPegawai'])->name('editPegawai');
Route::get('proses_hapus_pegawai', [PegawaiController::class, 'proses_hapus_pegawai'])->name('proses_hapusPegawai');

//JOB
Route::get('tambah_job', [JobController::class, 'tambahJob'])->name('tambahJob');
Route::post('proses_tambahJob', [JobController::class, 'proses_tambahJob'])->name('proses_tambahJob');
Route::post('proses_editJob', [JobController::class, 'proses_editJob'])->name('proses_editJob');
Route::get('editJob', [JobController::class, 'editJob'])->name('editJob');
Route::get('proses_hapus_job', [JobController::class, 'proses_hapus_job'])->name('proses_hapusJob');
