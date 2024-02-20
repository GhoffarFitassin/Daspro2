<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\IndoregionController;


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

Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'auth']);
Route::post('/logout', [AuthController::class, 'logout']);
// Route::get('/register', [AuthController::class, 'regis'])->middleware('guest');
Route::post('/getkabupaten', [IndoregionController::class, 'getkabupaten'])->middleware('auth')->name('getkabupaten');
Route::post('/getkecamatan', [IndoregionController::class, 'getkecamatan'])->middleware('auth')->name('getkecamatan');
Route::post('/getdesa', [IndoregionController::class, 'getdesa'])->middleware('auth')->name('getdesa');

// Owner
Route::get('/owner', [MasterController::class, 'owner'])->middleware('auth');
Route::get('/owner/dashboard', [MasterController::class, 'owner'])->middleware('auth');
// detail
Route::resource('/owner/detail', DetailController::class)->middleware('auth');
Route::get('/owner/detail/invoice', [DetailController::class, 'show'])->middleware('auth');
// detail End
// user
Route::resource('/owner/user', UserController::class)->middleware('auth');
// user End
// End Owner

// admin
Route::get('/admin', [MasterController::class, 'admin'])->middleware('auth');
Route::get('/admin/dashboard', [MasterController::class, 'admin'])->middleware('auth');
// Outlet
Route::resource('/admin/outlet', OutletController::class)->middleware('auth');
// Outlet End
// paket
Route::resource('/admin/paket', PaketController::class)->middleware('auth');
// paket End
// user
Route::resource('/admin/user', UserController::class)->middleware('auth');
// user End
// pelanggan
Route::resource('/admin/member', MemberController::class)->middleware('auth');
// pelanggan End
// transaksi
Route::resource('/admin/transaksi', TransaksiController::class)->middleware('auth');
// transaksi End
// detail
// Route::get('/admin/detail', [TransaksiController::class, 'load'])->middleware('auth');
Route::resource('/admin/detail', DetailController::class)->middleware('auth');
Route::get('/admin/detail/invoice', [DetailController::class, 'show'])->middleware('auth');
// detail End
// End admin

// cashier
Route::get('/kasir', [MasterController::class, 'kasir'])->middleware('auth');
Route::get('/kasir/dashboard', [MasterController::class, 'kasir'])->middleware('auth');
// pelanggan
Route::resource('/kasir/member', MemberController::class)->middleware('auth');
// pelanggan End
// transaksi
Route::resource('/kasir/transaksi', TransaksiController::class)->middleware('auth');
// transaksi End
// detail
Route::resource('/kasir/detail', DetailController::class)->middleware('auth');
Route::get('/kasir/detail/invoice', [DetailController::class, 'show'])->middleware('auth');
// detail End
// End cashier

// wilayah
Route::get('/form', [IndoregionController::class,'form']);