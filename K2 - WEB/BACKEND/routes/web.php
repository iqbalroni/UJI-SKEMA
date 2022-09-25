<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\login;

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
Route::get('/',[IndexController::class,'index']);


Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/warga',[WargaController::class,'index'])->name('warga');
Route::get('/tambahwarga',[WargaController::class,'create']);
Route::post('/simpanwarga',[WargaController::class,'save']);
Route::get('/editwarga/{nik}',[WargaController::class,'edit']);
Route::post('/updatewarga/{nik}',[WargaController::class,'update']);
Route::get('/hapuswarga/{nik}',[WargaController::class,'delete']);

Route::get('/petugas',[PetugasController::class,'index'])->name('petugas');
Route::get('/tambahpetugas',[PetugasController::class,'create']);
Route::post('/simpanpetugas',[PetugasController::class,'save']);

Route::get('/vaksin',[VaksinController::class,'index'])->name('vaksin');
Route::get('/tambahvaksin',[VaksinController::class,'create'])->name('reg');
Route::post('/simpanvaksin',[VaksinController::class,'save']);

Route::get('/login',[login::class,'index'])->name('login');
Route::get('/logout',[login::class,'logout']);
Route::post('/confirmAuth',[login::class,'authlogin']);