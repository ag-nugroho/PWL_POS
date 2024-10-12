<?php

use App\Http\Controllers\AuthController;
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

Route::pattern('id', '[0-9]+');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister']);

Route::middleware(['auth'])->group(function(){
    
    Route::get('/', [WelcomeController::class, 'index']);

    Route::middleware(['authorize:ADM'])->group(function() {
        Route::get('/user', [UserController::class, 'index']);
        Route::post('user/list', [UserController::class, 'list']);
        Route::get('user/create', [UserController::class, 'create']);
        Route::post('/user', [UserController::class, 'store']);
        Route::get('user/create_ajax', [UserController::class, 'create_ajax']);
        Route::post('user/ajax', [UserController::class, 'store_ajax']);
        Route::get('user/{id}', [UserController::class, 'show']);
        Route::get('user/{id}/show_ajax', [UserController::class, 'show_ajax']);
        Route::get('user/{id}/edit', [UserController::class, 'edit']);
        Route::put('user/{id}', [UserController::class, 'update']);
        Route::get('user/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
        Route::put('user/{id}/update_ajax', [UserController::class, 'update_ajax']);
        Route::get('user/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
        Route::delete('user/{id}/delete_ajax', [UserController::class, 'delete_ajax']);
        Route::delete('user/{id}', [UserController::class, 'destroy']); 
    });

    Route::middleware(['authorize:ADM'])->group(function() {
        Route::get('/level', [LevelController::class, 'index']);          // Menampilkan halaman awal level
        Route::post('level/list', [LevelController::class, 'list']);      // Menampilkan data level dalam bentuk list
        Route::get('level/create', [LevelController::class, 'create']);   // Menampilkan halaman form tambah level
        Route::post('/level', [LevelController::class, 'store']);         // Menyimpan data level
        Route::get('level/create_ajax', [LevelController::class, 'create_ajax']);
        Route::post('level/ajax', [LevelController::class, 'store_ajax']);
        Route::get('level/{id}', [LevelController::class, 'show']);       // Menampilkan detail level
        Route::get('level/{id}/show_ajax', [LevelController::class, 'show_ajax']);
        Route::get('level/{id}/edit', [LevelController::class, 'edit']);  // Menampilkan halaman form edit level
        Route::put('level/{id}', [LevelController::class, 'update']);     // Menyimpan perubahan data level
        Route::get('level/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
        Route::put('level/{id}/update_ajax', [LevelController::class, 'update_ajax']);
        Route::get('level/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
        Route::delete('level/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
        Route::delete('level/{id}', [LevelController::class, 'destroy']); // Menghapus data level
    });

    Route::group(['prefix' => 'kategori'], function() {
        Route::get('/', [KategoriController::class, 'index']);          
        Route::post('/list', [KategoriController::class, 'list']);     
        Route::get('/create', [KategoriController::class, 'create']);   
        Route::post('/', [KategoriController::class, 'store']);         
        Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
        Route::post('/ajax', [KategoriController::class, 'store_ajax']);
        Route::get('/{id}', [KategoriController::class, 'show']);     
        Route::get('/{id}/show_ajax', [KategoriController::class, 'show_ajax']);
        Route::get('/{id}/edit', [KategoriController::class, 'edit']);  
        Route::put('/{id}', [KategoriController::class, 'update']);    
        Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
        Route::delete('/{id}', [KategoriController::class, 'destroy']); 
    });

    Route::group(['prefix' => 'supplier'], function() {
        Route::get('/', [SupplierController::class, 'index']);        
        Route::post('/list', [SupplierController::class, 'list']);      
        Route::get('/create', [SupplierController::class, 'create']);   
        Route::post('/', [SupplierController::class, 'store']);        
        Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
        Route::post('/ajax', [SupplierController::class, 'store_ajax']);
        Route::get('/{id}', [SupplierController::class, 'show']);      
        Route::get('/{id}/show_ajax', [SupplierController::class, 'show_ajax']);
        Route::get('/{id}/edit', [SupplierController::class, 'edit']);  
        Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
        Route::put('/{id}', [SupplierController::class, 'update']);     
        Route::delete('/{id}', [SupplierController::class, 'destroy']);
    });

    Route::middleware(['authorize:ADM,MNG,STF'])->group(function() {
        Route::get('/barang', [BarangController::class, 'index']);          
        Route::post('barang/list', [BarangController::class, 'list']);     
        Route::get('barang/create', [BarangController::class, 'create']);   
        Route::post('/barang', [BarangController::class, 'store']);
        Route::get('barang/create_ajax', [BarangController::class, 'create_ajax']);
        Route::post('barang/ajax', [BarangController::class, 'store_ajax']);
        Route::get('barang/{id}', [BarangController::class, 'show']);
        Route::get('barang/{id}/show_ajax', [BarangController::class, 'show_ajax']);
        Route::get('barang/{id}/edit', [BarangController::class, 'edit']);
        Route::get('barang/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
        Route::put('barang/{id}/update_ajax', [BarangController::class, 'update_ajax']);
        Route::get('barang/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
        Route::delete('barang/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
        Route::put('barang/{id}', [BarangController::class, 'update']);
        Route::delete('barang/{id}', [BarangController::class, 'destroy']);
    });
    
});

// Route::get('/', [WelcomeController::class, 'index']);

