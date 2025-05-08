<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_transaksis')->insert([
            [
                'status_transaksi' => 'Berhasil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status_transaksi' => 'Tertunda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status_transaksi' => 'Gagal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
