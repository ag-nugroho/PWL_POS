<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Agung',
                'penjualan_kode' => 'BUY-001',
                'penjualan_tanggal' => '2024-09-14 07:45:26',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Chyntia',
                'penjualan_kode' => 'BUY-002',
                'penjualan_tanggal' => '2024-09-14 08:00:05',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Ria',
                'penjualan_kode' => 'BUY-003',
                'penjualan_tanggal' => '2024-09-14 08:15:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'BUY-004',
                'penjualan_tanggal' => '2024-09-14 08:30:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Munadi',
                'penjualan_kode' => 'BUY-005',
                'penjualan_tanggal' => '2024-09-14 08:45:10',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Munadi',
                'penjualan_kode' => 'BUY-006',
                'penjualan_tanggal' => '2024-09-14 09:00:00',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Nadira',
                'penjualan_kode' => 'BUY-007',
                'penjualan_tanggal' => '2024-09-14 09:15:00',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Anindita',
                'penjualan_kode' => 'BUY-008',
                'penjualan_tanggal' => '2024-09-14 09:30:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Sampit',
                'penjualan_kode' => 'BUY-009',
                'penjualan_tanggal' => '2024-09-14 09:45:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Nugroho',
                'penjualan_kode' => 'BUY-010',
                'penjualan_tanggal' => '2024-09-14 10:00:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
