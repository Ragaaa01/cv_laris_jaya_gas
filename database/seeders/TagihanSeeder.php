<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tagihans')->insert([
            [
                'id_tagihan' => 1,
                'id_transaksi' => 1,
                'jumlah_dibayar' => 50000.00,
                'sisa' => 50000.00,
                'status' => 0,
                'tanggal_bayar_tagihan' => '2025-04-05',
                'hari_keterlambatan' => 0,
                'periode_ke' => 1,
                'keterangan' => 'baru bayar 50000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tagihan' => 2,
                'id_transaksi' => 2,
                'jumlah_dibayar' => 175000.00,
                'sisa' => 0.00,
                'status' => 1,
                'tanggal_bayar_tagihan' => '2025-04-29',
                'hari_keterlambatan' => 1,
                'periode_ke' => 1,
                'keterangan' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tagihan' => 3,
                'id_transaksi' => 3,
                'jumlah_dibayar' => 100000.00,
                'sisa' => 100000.00,
                'status' => 0,
                'tanggal_bayar_tagihan' => '2025-08-03',
                'hari_keterlambatan' => 3,
                'periode_ke' => 1,
                'keterangan' => 'Denda 70rb karena keterlambatan isi ulang/kembali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
