<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\PenjualanModel;
use App\Models\SupplierModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $breadcrumb = (object) [
        'title' => 'Selamat Datang',
        'list' => ['Home', 'Welcome']
        ];
        

        $activeMenu = 'dashboard';

        $totalUser = UserModel::count();
        $totalBarang = BarangModel::count();
        $totalSupplier = SupplierModel::count();
        $totalPenjualan = PenjualanModel::count();

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'totalUser' => $totalUser, 'totalBarang' => $totalBarang, 'totalSupplier' => $totalSupplier, 'totalPenjualan' => $totalPenjualan]);
    }
}
