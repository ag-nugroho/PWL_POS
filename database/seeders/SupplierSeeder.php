<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SPKD01',
                'supplier_nama' => 'PT. Sumber Karya Duta',
                'supplier_alamat' => 'Jl. Raya No. 1, Kec. Purwosari',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SPPJ02',
                'supplier_nama' => 'PT. Sumber Jaya',
                'supplier_alamat' => 'Jl. Raya No. 2, Kec. Kepanjen',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SPPK03',
                'supplier_nama' => 'PT. Sumber Karya',
                'supplier_alamat' => 'Jl. Raya No. 3, Kec. Pakisaji',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
