<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Ani', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Cahyo', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Dina', 'penjualan_kode' => 'TRX004', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Eko', 'penjualan_kode' => 'TRX005', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Fani', 'penjualan_kode' => 'TRX006', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Gita', 'penjualan_kode' => 'TRX007', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Hadi', 'penjualan_kode' => 'TRX008', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Indah', 'penjualan_kode' => 'TRX009', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Joko', 'penjualan_kode' => 'TRX010', 'penjualan_tanggal' => Carbon::now()],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}