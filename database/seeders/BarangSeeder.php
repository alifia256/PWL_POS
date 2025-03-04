<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 6000000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone', 'harga_beli' => 3000000, 'harga_jual' => 4000000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Kaos', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Celana', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Mie Instan', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Beras', 'harga_beli' => 10000, 'harga_jual' => 12000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG007', 'barang_nama' => 'Air Mineral', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Kopi', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['kategori_id' => 5, 'barang_kode' => 'BRG009', 'barang_nama' => 'Moisturizer', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Toner', 'harga_beli' => 200000, 'harga_jual' => 250000],
        ];

        DB::table('m_barang')->insert($data);
    }
}