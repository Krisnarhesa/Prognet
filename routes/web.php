<?php
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\FlowController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Jenssegers\Mongodb\Auth\User;
use Psy\Readline\Userland;

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



//user
Route::get('/',[FlowController::class,'index']);
Route::get('/user', [UserController::class,'index']);
Route::get('/add', [UserController::class,'add']) -> middleware('is_admin');
Route::post('processAdd', [UserController::class,'processAdd']) ->name('processAddUser')-> middleware('is_admin');
Route::get('/edit/{id}', [UserController::class,'edit'])-> middleware('is_admin');
Route::post('processEdit', [UserController::class,'processEdit'])-> name('processEditUser')-> middleware('is_admin');
Route::get('/delete/{id}',[UserController::class,'delete'])-> name('processDeleteUser') -> middleware('is_admin');



// produk
Route::get('/produk', [App\Http\Controllers\ProdukController::class,'index']);
Route::get('/add-produk', [App\Http\Controllers\ProdukController::class,'add'])-> middleware('is_admin');
Route::post('processAddProduk', [App\Http\Controllers\ProdukController::class,'processAdd'])->name('processAddProduk')-> middleware('is_admin');
Route::get('/edit-produk/{id}', [App\Http\Controllers\ProdukController::class,'edit'])-> middleware('is_admin');;
Route::post('processEditProduk', [App\Http\Controllers\ProdukController::class,'processEdit'])->name('processEditProduk')-> middleware('is_admin');
Route::get('/delete-produk/{id}',[App\Http\Controllers\ProdukController::class,'delete'])->name('processDeleteProduk')-> middleware('is_admin');

// review
Route::get('/review', [App\Http\Controllers\ReviewController::class,'index']);
Route::get('/add-review', [App\Http\Controllers\ReviewController::class,'add'])-> middleware('is_admin');
Route::post('processAddReview', [App\Http\Controllers\ReviewController::class,'processAdd'])->name('processAddReview')-> middleware('is_admin');
Route::get('/edit-review/{id}', [App\Http\Controllers\ReviewController::class,'edit'])-> middleware('is_admin');
Route::post('processEditReview', [App\Http\Controllers\ReviewController::class,'processEdit'])->name('processEditReview')-> middleware('is_admin');;
Route::get('/delete-review/{id}',[App\Http\Controllers\ReviewController::class,'delete'])->name('processDeleteReview')-> middleware('is_admin');

//pembelian
Route::get('/pembelian', [App\Http\Controllers\PembelianController::class,'index']);
Route::get('/add-pembelian', [App\Http\Controllers\PembelianController::class,'add']) -> middleware('is_admin');
Route::post('processAddPembelian', [App\Http\Controllers\PembelianController::class,'processAdd']) ->name('processAddPembelian')-> middleware('is_admin');
Route::get('/edit-pembelian/{id}', [App\Http\Controllers\PembelianController::class,'edit'])-> middleware('is_admin');
Route::post('processEditPembelian', [App\Http\Controllers\PembelianController::class,'processEdit'])-> name('processEditPembelian')-> middleware('is_admin');
Route::get('/delete-pembelian/{id}',[App\Http\Controllers\PembelianController::class,'delete'])->name('processDeletePembelian') -> middleware('is_admin');

// //pengiriman
Route::get('/pengiriman', [App\Http\Controllers\PengirimanController::class,'index']);
Route::get('/add-pengiriman', [App\Http\Controllers\PengirimanController::class,'add']) -> middleware('is_admin');
Route::post('processAddPengiriman', [App\Http\Controllers\PengirimanController::class,'processAdd']) ->name('processAddPengiriman')-> middleware('is_admin');
Route::get('/edit-pengiriman/{id}', [App\Http\Controllers\PengirimanController::class,'edit'])-> middleware('is_admin');
Route::post('processEditPengiriman', [App\Http\Controllers\PengirimanController::class,'processEdit'])-> name('processEditPengiriman')-> middleware('is_admin');
Route::get('/delete-pengiriman/{id}',[App\Http\Controllers\PengirimanController::class,'delete'])->name('processDeletePengiriman') -> middleware('is_admin');

Auth::routes();

Route::controller(App\Http\Controllers\ReportController::class)->group(function(){
    Route::get('/report','index');
    Route::get('/admin/report','admin');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home') -> middleware('is_admin');
