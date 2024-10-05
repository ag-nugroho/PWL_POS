<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function() {
//     return view('welcome');
// });

// Route::get('/', [WelcomeController::class, 'index']);
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function(){
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/create_ajax', [UserController::class, 'create_ajax']);
    Route::post('/ajax', [UserController::class, 'store_ajax']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);
    Route::delete('/{id}', [UserController::class, 'destroy']); 
});

Route::group(['prefix' => 'level'], function() {
    Route::get('/', [LevelController::class, 'index']);          // Menampilkan halaman awal User
    Route::post('/list', [LevelController::class, 'list']);      // Menampilkan data user dalam bentuk list
    Route::get('/create', [LevelController::class, 'create']);   // Menampilkan halaman form tambah user
    Route::post('/', [LevelController::class, 'store']);         // Menyimpan data user baru
    Route::get('/{id}', [LevelController::class, 'show']);       // Menampilkan detail user
    Route::get('/{id}/edit', [LevelController::class, 'edit']);  // Menampilkan halaman form edit user
    Route::put('/{id}', [LevelController::class, 'update']);     // Menyimpan perubahan data user
    Route::delete('/{id}', [LevelController::class, 'destroy']); // Menghapus data user
});

Route::group(['prefix' => 'kategori'], function() {
    Route::get('/', [KategoriController::class, 'index']);          // Menampilkan halaman awal User
    Route::post('/list', [KategoriController::class, 'list']);      // Menampilkan data user dalam bentuk list
    Route::get('/create', [KategoriController::class, 'create']);   // Menampilkan halaman form tambah user
    Route::post('/', [KategoriController::class, 'store']);         // Menyimpan data user baru
    Route::get('/{id}', [KategoriController::class, 'show']);       // Menampilkan detail user
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);  // Menampilkan halaman form edit user
    Route::put('/{id}', [KategoriController::class, 'update']);     // Menyimpan perubahan data user
    Route::delete('/{id}', [KategoriController::class, 'destroy']); // Menghapus data user
});

Route::group(['prefix' => 'supplier'], function() {
    Route::get('/', [SupplierController::class, 'index']);          // Menampilkan halaman awal User
    Route::post('/list', [SupplierController::class, 'list']);      // Menampilkan data user dalam bentuk list
    Route::get('/create', [SupplierController::class, 'create']);   // Menampilkan halaman form tambah user
    Route::post('/', [SupplierController::class, 'store']);         // Menyimpan data user baru
    Route::get('/{id}', [SupplierController::class, 'show']);       // Menampilkan detail user
    Route::get('/{id}/edit', [SupplierController::class, 'edit']);  // Menampilkan halaman form edit user
    Route::put('/{id}', [SupplierController::class, 'update']);     // Menyimpan perubahan data user
    Route::delete('/{id}', [SupplierController::class, 'destroy']); // Menghapus data user
});

Route::group(['prefix' => 'barang'], function() {
    Route::get('/', [BarangController::class, 'index']);          // Menampilkan halaman awal User
    Route::post('/list', [BarangController::class, 'list']);      // Menampilkan data user dalam bentuk list
    Route::get('/create', [BarangController::class, 'create']);   // Menampilkan halaman form tambah user
    Route::post('/', [BarangController::class, 'store']);         // Menyimpan data user baru
    Route::get('/{id}', [BarangController::class, 'show']);       // Menampilkan detail user
    Route::get('/{id}/edit', [BarangController::class, 'edit']);  // Menampilkan halaman form edit user
    Route::put('/{id}', [BarangController::class, 'update']);     // Menyimpan perubahan data user
    Route::delete('/{id}', [BarangController::class, 'destroy']); // Menghapus data user
});