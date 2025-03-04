<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'KG001', 'kategori_nama' => 'Obat'],
            ['kategori_kode' => 'KG002', 'kategori_nama' => 'Pakaian'],
            ['kategori_kode' => 'KG003', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'KG004', 'kategori_nama' => 'Minuman'],
            ['kategori_kode' => 'KG005', 'kategori_nama' => 'Skincare & Makeup'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}