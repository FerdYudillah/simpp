<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NaikBerkalaController;
use App\Http\Controllers\NaikPangkatController;
use App\Http\Controllers\NonPNSController;
use App\Http\Controllers\PangkatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuamiIstriController;
use App\Http\Controllers\UserAkunController;
use App\Http\Controllers\UserController;
use App\Models\NaikPangkat;

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

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

// Route::get('login', [LoginController::class, 'index'])->name('login');

//Route Home
Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');

//Route Login
Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

//Route Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//Route User
Route::resource('user', UserController::class)->middleware('admin');
//Route Akun
Route::resource('akun', AkunController::class)->middleware('auth');
//Route Pesan
Route::resource('pesan', PesanController::class)->middleware('admin');

//Route PNS /Pegawai
Route::resource('pegawai', DataPegawaiController::class)->middleware('auth');
Route::get('/exportpdf', [DataPegawaiController::class, 'exportpdf'])->middleware('auth');
Route::get('/exportPegawai/{id}', [DataPegawaiController::class, 'exportPegawai'])->middleware('auth');
Route::get('pegawai-excel', [DataPegawaiController::class, 'pegawaiExcel'])->name('pegawai.excel')->middleware('auth');


//Route Pegawai Non PNS
Route::resource('non_pns', NonPNSController::class)->middleware('auth');
Route::get('/exportNon', [NonPNSController::class, 'exportNon'])->middleware('auth');
Route::get('export-excel', [NonPNSController::class, 'exportExcel'])->name('export.excel')->middleware('auth');


//Route Anak
Route::resource('anak', AnakController::class)->middleware('auth');
Route::get('/exportanak', [AnakController::class, 'exportanak'])->middleware('auth');
Route::get('anak-excel', [AnakController::class, 'anakExcel'])->name('anak.excel')->middleware('auth');

//Route Suami Istri
Route::resource('suami_istri', SuamiIstriController::class)->middleware('auth');
Route::get('/exportsi', [SuamiIstriController::class, 'exportsi'])->middleware('auth');
Route::get('si-excel', [SuamiIstriController::class, 'suamiExcel'])->name('si.excel')->middleware('auth');

//Route Kenaikan Berkala
Route::resource('naik_berkala', NaikBerkalaController::class)->middleware('auth');
Route::get('/exportberkala', [NaikBerkalaController::class, 'exportberkala'])->middleware('auth');
Route::get('nb-excel', [NaikBerkalaController::class, 'nbExcel'])->name('nb.excel')->middleware('auth');


//Route Kenaikan Pangkat
Route::resource('naik_pangkat', NaikPangkatController::class)->middleware('auth');
Route::get('/exportpangkat', [NaikPangkatController::class, 'exportpangkat'])->middleware('auth');
Route::get('np-excel', [NaikPangkatController::class, 'npExcel'])->name('np.excel')->middleware('auth');


//Route Data Master
Route::resource('pangkat', PangkatController::class)->middleware('admin');
Route::resource('golongan', GolonganController::class)->middleware('admin');
Route::resource('jabatan', jabatanController::class)->middleware('admin');



// Route::group(['middleware' => ['auth']],function(){
//     Route::group(['middleware' =>['cekUserLogin:1']],function(){
//         Route::resource('beranda',BerandaController::class);

//     });

//     Route::group(['middleware' =>['cekUserLogin:2']],function(){
//         Route::resource('client',ClientController::class);
//     });

// });

