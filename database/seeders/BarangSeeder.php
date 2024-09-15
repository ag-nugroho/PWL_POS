<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'SKL01',
                'barang_nama' => 'So Klin 780 ml',
                'harga_beli' => 18500,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'LT01',
                'barang_nama' => 'Vixal 750 ml',
                'harga_beli' => 14500,
                'harga_jual' => 16000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'STL01',
                'barang_nama' => 'Stella',
                'harga_beli' => 65000,
                'harga_jual' => 70000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'SLK01',
                'barang_nama' => 'Sleek 450 ml',
                'harga_beli' => 25000,
                'harga_jual' => 28000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'PRB01',
                'barang_nama' => 'Pure Baby',
                'harga_beli' =>  30000,
                'harga_jual' =>  32000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'CSB01',
                'barang_nama' => 'Cussons Baby Hair Lotion 200 ml',
                'harga_beli' =>  14500,
                'harga_jual' =>  16000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'KCK01',
                'barang_nama' => 'Skintific 5X',
                'harga_beli' => 115000,
                'harga_jual' => 125000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'KCK02',
                'barang_nama' => 'Arazine Sunscreen',
                'harga_beli' => 35000,
                'harga_jual' => 37500,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'KCK03',
                'barang_nama' => 'Pixy Concealing',
                'harga_beli' =>  34500,
                'harga_jual' => 36000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'FSH01',
                'barang_nama' => 'POLO Cap',
                'harga_beli' =>  125000,
                'harga_jual' => 129000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 'FSH02',
                'barang_nama' => 'POLO T-Shirt',
                'harga_beli' =>  80000,
                'harga_jual' =>  90000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 4,
                'barang_kode' => 'FSH03',
                'barang_nama' => 'POLO Long Sleeve',
                'harga_beli' =>  95000,
                'harga_jual' => 105000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'ELK01',
                'barang_nama' => 'Fujifilm Instax Mini Evo',
                'harga_beli' =>  2990000,
                'harga_jual' =>  3290000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'ELK02',
                'barang_nama' => 'Fujifilm Instax Mini 9',
                'harga_beli' =>  1990000,
                'harga_jual' =>  2290000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'ELK03',
                'barang_nama' => 'Fujifilm Instax Mini 70',
                'harga_beli' =>  2490000,
                'harga_jual' =>  2790000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}