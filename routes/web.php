<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilKepalaController;
use App\Http\Controllers\AkuntabilitasController;

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

Route::get('/', [BerandaController::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/profilKepala', [ProfilKepalaController::class, 'index']);

Route::get('/info', [InfoController::class, 'index']);
Route::get('/infoPage/{info:slug}', [InfoController::class, 'show']);

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/akuntabilitas', [AkuntabilitasController::class, 'index']);
