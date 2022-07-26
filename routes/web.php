<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Sk_DirjenController;
use App\Http\Controllers\LayananKamiController;
use App\Http\Controllers\ProdukHukumController;
use App\Http\Controllers\SuratEdaranController;
use App\Http\Controllers\ProfilKepalaController;
use App\Http\Controllers\AkuntabilitasController;
use App\Http\Controllers\LayananOnlineController;
use App\Http\Controllers\Undang_undangController;
use App\Http\Controllers\PengajuanLayananController;
use App\Http\Controllers\Peraturan_MenteriController;
use App\Http\Controllers\Peraturan_PresidenController;
use App\Http\Controllers\Peraturan_PmerintahController;
use App\Http\Controllers\Peraturan_RistekdiktiController;
use App\Http\Controllers\PPIDController;
use App\Http\Controllers\ProsedurOperasionalStandarController;
use App\Http\Controllers\PetaProsesBisnisController;
use App\Http\Controllers\BukuPanduanPedomanController;


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

Route::get('/layananOnline', [LayananOnlineController::class, 'index']);

Route::get('/layananKami', [LayananKamiController::class, 'index']);

Route::get('/caraPengajuanLayanan', [PengajuanLayananController::class, 'index']);

Route::get('/produkHukum', [ProdukHukumController::class, 'index']);

Route::get('/suratEdaran', [SuratEdaranController::class, 'index']);

Route::get('/undang_undang', [Undang_undangController::class, 'index']);

Route::get('/peraturan_ristekdikti', [Peraturan_RistekdiktiController::class, 'index']);

Route::get('/peraturan_presiden', [Peraturan_PresidenController::class, 'index']);

Route::get('/peraturan_menteri', [Peraturan_MenteriController::class, 'index']);

Route::get('/peraturan_pemerintah', [Peraturan_PmerintahController::class, 'index']);

Route::get('/sk_dirjen', [Sk_DirjenController::class, 'index']);

Route::get('/spp', [SppController::class, 'index']);

Route::get('/PPID', [PPIDController::class, 'index']);

Route::get('/prosedurOperasionalStandar', [ProsedurOperasionalStandarController::class, 'index']);

Route::get('/petaProsesBisnis', [PetaProsesBisnisController::class, 'index']);

Route::get('/bukuPanduanPedoman', [BukuPanduanPedomanController::class, 'index']);
