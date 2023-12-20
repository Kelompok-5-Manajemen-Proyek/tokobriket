<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TentangKamiController;
use APP\Http\Controllers\Home;

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
//Home
Route::get('/', [AuthController::class, 'index'])->name('home');


//Login
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/login', [AuthController::class, 'login'])->name('login');

// Logout
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');
// Route::middleware('auth')->group(function () {
//     Route::get('/', function () {
//         return view('home');
//     });
// });

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//PRODUK
Route::get('produk', [ProdukController::class, 'produk'])->name('produk');

//BLOG
Route::get('blog', [BlogController::class, 'blog'])->name('blog');

//Tentang Kami
Route::get('/tentangkami', [TentangKamiController::class, 'tentangkami'])->name('tentangkami');
Route::post('tentangkami/action', [TentangKamiController::class, 'tentangkami'])->name('tentangkami');


//Route::get('/logout', function () {
//    auth()->logout();
//    return redirect('/login');
//})->name('logout');
//Route::middleware('auth')->group(function () {
//    Route::get('/', function () {
//        return view('home');
//    });
//    Route::resource('categories', CategoryController::class);
// });