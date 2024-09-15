<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'HMCR',
                'kategori_nama' => 'Home Care',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'BYK',
                'kategori_nama' => 'Baby Kid',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'KCK',
                'kategori_nama' => 'Kecantikkan',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'FSH',
                'kategori_nama' => 'Fashion',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'ELK',
                'kategori_nama' => 'Elektronik',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
