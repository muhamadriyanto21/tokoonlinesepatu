<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DaftarProdukController;

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
    return view('home');
});
// routes/web.php

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/daftarproduk', [DaftarProdukController::class, 'index'])->name('admin.daftarproduk');
    // ...
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/keranjang', function () {
    // Logika untuk halaman keranjang
    return view('keranjang');
})->name('keranjang');
Route::get('/admin/daftarproduk', function () {
    return view('admin.daftarproduk');
})->name('admin.daftarproduk');
Route::get('/admin/statistik', function () {
    return view('admin.statistik');
})->name('admin.statistik');
Route::get('/admin/laporan', function () {
    return view('admin.laporan');
})->name('admin.laporan');
Route::get('/admin/pesanan', function () {
    return view('admin.pesanan');
})->name('admin.pesanan');




