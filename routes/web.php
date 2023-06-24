<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});



Route::resource('dashboard', DashboardController::class);

// hapus
Route::get('/dashboard/hapus/{id}', [DashboardController::class, 'hapus'])->name('Hapus');

// checkout
Route::get('/checkout', [DashboardController::class, 'checkout'])->name('Checkout');

// registrasi
Route::post('/registrasi', [DashboardController::class, 'registrasi'])->name('Registrasi');

// informasi lanjut
Route::get('/informasi', [DashboardController::class, 'informasi'])->name('Informasi');

// pdf
Route::get('/dashboard/cetak_pdf', [DashboardController::class, 'cetakpdf'])->name('CetakPdf');

// controller halaman depan
Route::get('/', [DashboardController::class, 'index2'])->name('HalamanDepan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
