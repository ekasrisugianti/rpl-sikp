<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalUjianController;
use App\Http\Controllers\DaftarBimbinganController;
use App\Http\Controllers\PengajuanSuratKetKPController;


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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', function () {
    return view('home');    
});

// ------ Jadwal Ujian -------------------------------------------------------------------
Route::get('/dosen/jadwalujian',[JadwalUjianController::class, 'getAllJadwalUjian']);
Route::get('/dosen/jadwalujian/vcreate',[JadwalUjianController::class, 'vCreateJadwalUjian']);
Route::post('/dosen/jadwalujian/create',[JadwalUjianController::class, 'createJadwalUjian']);
Route::get('/dosen/jadwalujian/vedit/{id}',[JadwalUjianController::class, 'vEditJadwalUjian']);
Route::post('/dosen/jadwalujian/edit/{id}',[JadwalUjianController::class, 'editJadwalUjian']);
Route::get('/dosen/jadwalujian/delete/{id}',[JadwalUjianController::class, 'deleteJadwalUjian']);


// ------ Daftar Bimbingan -------------------------------------------------------------------
Route::get('/dosen/daftarbimbingan',[DaftarBimbinganController::class, 'getAllDaftarBimbingan']);
Route::get('/dosen/daftarbimbingan/vcreate',[DaftarBimbinganController::class, 'vCreateDaftarBimbingan']);
Route::post('/dosen/daftarbimbingan/create',[DaftarBimbinganController::class, 'createDaftarBimbingan']);
Route::get('/dosen/daftarbimbingan/vedit/{id}',[DaftarBimbinganController::class, 'vEditDaftarBimbingan']);
Route::post('/dosen/daftarbimbingan/edit/{id}',[DaftarBimbinganController::class, 'editDaftarBimbingan']);
Route::get('/dosen/daftarbimbingan/delete/{id}',[DaftarBimbinganController::class, 'deleteDaftarBimbingan']);


// ------ Pengajuan Surat Ket KP -------------------------------------------------------------------
Route::get('/mahasiswa/pengajuansuratketkp',[PengajuanSuratKetKPController::class, 'getAllPengajuanSuratKetKP']);
Route::get('/mahasiswa/pengajuansuratketkp/vcreate',[PengajuanSuratKetKPController::class, 'vCreatePengajuanSuratKetKP']);
Route::post('/mahasiswa/pengajuansuratketkp/create',[PengajuanSuratKetKPController::class, 'createPengajuanSuratKetKP']);
Route::get('/mahasiswa/pengajuansuratketkp/vedit/{id}',[PengajuanSuratKetKPController::class, 'vEditPengajuanSuratKetKP']);
Route::post('/mahasiswa/pengajuansuratketkp/edit/{id}',[PengajuanSuratKetKPController::class, 'editPengajuanSuratKetKP']);
Route::get('/mahasiswa/pengajuansuratketkp/delete/{id}',[PengajuanSuratKetKPController::class, 'deletePengajuanSuratKetKP']);
