<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('home');
// });

//Jadwal
Route::get('/jadwal',[JadwalController::class, 'index'])->middleware('verAdmin');
Route::get('/jadwal/form',[JadwalController::class, 'create'])->middleware('verAdmin');
Route::post('/jadwal/store',[JadwalController::class, 'store'])->middleware('verAdmin');
Route::get('/jadwal/edit/{id}',[JadwalController::class, 'edit'])->middleware('verAdmin');
Route::put('/jadwal/{id}',[JadwalController::class, 'update'])->middleware('verAdmin');
Route::delete('/jadwal/{id}',[JadwalController::class, 'destroy'])->middleware('verAdmin');

//Lapangan
Route::get('/lapangan',[LapanganController::class, 'index'])->middleware('verAdmin');
Route::get('/lapangan/form',[LapanganController::class, 'create'])->middleware('verAdmin');
Route::post('/lapangan/store',[LapanganController::class, 'store'])->middleware('verAdmin');
Route::get('/lapangan/edit/{id}',[LapanganController::class, 'edit'])->middleware('verAdmin');
Route::put('/lapangan/{id}',[LapanganController::class, 'update'])->middleware('verAdmin');
Route::delete('/lapangan/{id}',[LapanganController::class, 'destroy'])->middleware('verAdmin');

//Sewa
Route::get('/sewa',[SewaController::class, 'index'])->middleware('verAdmin');
Route::get('/sewa/form',[SewaController::class, 'create'])->middleware('verAdmin');
Route::post('/sewa/store',[SewaController::class, 'store'])->middleware('verAdmin');
Route::get('/sewa/edit/{id}',[SewaController::class, 'edit'])->middleware('verAdmin');
Route::put('/sewa/{id}',[SewaController::class, 'update'])->middleware('verAdmin');
Route::delete('/sewa/{id}',[SewaController::class, 'destroy'])->middleware('verAdmin');
//cetak
Route::get('/cetaksewa',[SewaController::class, 'cetaksewa'])->middleware('verAdmin');
Route::get('/indexcetak',[SewaController::class, 'indexcetak'])->middleware('verAdmin');

//admin
Route::get('/admin',[HomeController::class, 'index'])->middleware('verAdmin');
Route::get('/home',[SewaController::class, 'home'])->middleware('verAdmin');

//user
Route::get('/lapanganuser',[SewaController::class, 'lapanganuser']);
Route::get('/sewalapangan',[SewaController::class, 'sewalapangan']);
Route::get('/tentang',[SewaController::class, 'tentang']);
Route::get('/buktibayar/{ID}',[SewaController::class, 'upload']);
Route::put('/upload/buktibayar/{ID}',[SewaController::class, 'updatebukti']);
Route::post('/sewa/user',[SewaController::class, 'user']);
Route::get('/struk/{id}',[SewaController::class, 'struk']);

// Route::get('/sewa/{id}',[SewaController::class, 'edituser']);
Route::get('/sewa/{id}',[SewaController::class, 'updateuser']);
Route::put('/sewa/{id}',[SewaController::class, 'update']);

Route::get('/homeuser',[SewaController::class, 'homeuser'])->middleware('verAdmin');

Route::get('/',[HomeController::class, 'user'])->name('user');

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
