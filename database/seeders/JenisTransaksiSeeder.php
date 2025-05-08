<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_transaksis')->insert([
            [
                'nama_jenis_transaksi' => 'Peminjaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_jenis_transaksi' => 'Isi Ulang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
