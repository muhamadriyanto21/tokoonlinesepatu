<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DaftarProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
// routes/web.php

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/crud', [DaftarProdukController::class, 'index'])->name('admin.crud');
    // ...
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/keranjang', function () {
    // Logika untuk halaman keranjang
    return view('keranjang');
})->name('keranjang');
Route::get('/crud', [HomeController::class, 'crud'])->name('crud');
// Route::get('/admin/daftarproduk', function () {
//     return view('admin.daftarproduk');
// })->name('admin.daftarproduk');
// Route::get('/admin/create', function () {
//     return view('admin.create');
// })->name('admin.create');
// Route::get('/admin/laporan', function () {
//     return view('admin.laporan');
// })->name('admin.laporan');
// Route::get('/admin/pesanan', function () {
//     return view('admin.pesanan');
// })->name('admin.pesanan');
// Route::get('/admin/pengaturan', function () {
//     return view('admin.pengaturan');
// })->name('admin.pengaturan');
Route::resource('products', ProductController::class);

// Menampilkan daftar produk
Route::get('/products', 'ProductController@index')->name('products.index');

// Menampilkan formulir tambah produk
Route::get('/products/create', 'ProductController@create')->name('products.create');

// Menyimpan produk baru ke database
Route::post('/products', 'ProductController@store')->name('products.store');

// Menampilkan detail produk
Route::get('/products/{product}', 'ProductController@show')->name('products.show');

// Menampilkan formulir edit produk
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');

// Mengupdate produk ke database
Route::put('/products/{product}', 'ProductController@update')->name('products.update');

// Menghapus produk dari database
Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');

Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::post('/upload/image', [TestController::class, 'testgambar']);
Route::get('/test', function () {
    return view('test');
})->name('admin.pengaturan');
