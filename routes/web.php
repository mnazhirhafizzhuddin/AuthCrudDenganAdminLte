<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataasetController;
use App\Http\Controllers\BarangController;
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
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('home', [HomeController::class, 'hitungjumlahkaryawan'])->name('home')->middleware('auth');

//data pegawai
Route::get('/dashboarddatakaryawan', [LoginController::class, 'halamandatapegawai'])->name('halamandatapegawai')->middleware('auth');
Route::get('/tambahdatakaryawan',[LoginController::class, 'tambahpegawai'])->name('tambahpegawai')->middleware('auth');
Route::post('/insertdata',[LoginController::class, 'insertdata'])->name('insertdata')->middleware('auth');
Route::get('/tampildatakaryawan/{id}',[LoginController::class, 'tampildatakaryawan'])->name('tampildatakaryawan')->middleware('auth');
Route::post('/updatedatapegawai/{id}',[LoginController::class, 'updatedatapegawai'])->name('updatedatapegawai')->middleware('auth');
Route::get('/deletedatakaryawan/{id}',[LoginController::class, 'deletedatapegawai'])->name('deletedatapegawai')->middleware('auth');

//dataruangan
Route::get('/tambahdataruangan',[DataasetController::class, 'tambahdataaset'])->name('tambahdataaset')->middleware('auth');
Route::get('/dashboarddataruangan',[DataasetController::class, 'dataruangan'])->name('dataruangan')->middleware('auth');
Route::post('/insertdataasetnya',[DataasetController::class, 'insertdata'])->name('insertdataku')->middleware('auth');
Route::get('/editdataruangan/{id}',[DataasetController::class, 'editdataruanganku'])->name('editdataruangan')->middleware('auth');
Route::post('/updatedataruangan/{id}',[DataasetController::class, 'updatedataruangan'])->name('updatedataruangan')->middleware('auth');
Route::get('/deletedataruangan/{id}',[DataasetController::class, 'deletedataruangan'])->name('deletedataruangan')->middleware('auth');
Route::get('/dashboarddetailbarang/{id}',[DataasetController::class, 'masukdetailbarang'])->name('dashboard')->middleware('auth');

// datadetailbarang
Route::post('/tambahdatabarang',[BarangController::class, 'tambahbarang'])->name('tambahbarang')->middleware('auth');
