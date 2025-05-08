<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksis')->insert([
            [
                'nama' => null,
                'id_user' => 2, 
                'tanggal_transaksi' => '2025-04-29',
                'waktu_transaksi' => '09:00:00',
                'total_transaksi' => 200000.00,
                'jumlah_dibayar' => 100000.00,
                'metode_pembayaran' => 'transfer',
                'id_status_transaksi' => 1, 
                'tanggal_jatuh_tempo' => '2025-05-29',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => null,
                'id_user' => 3,
                'tanggal_transaksi' => '2025-03-24',
                'waktu_transaksi' => '10:00:00',
                'total_transaksi' => 175000.00,
                'jumlah_dibayar' => 175000.00,
                'metode_pembayaran' => 'tunai', 
                'id_status_transaksi' => 1,
                'tanggal_jatuh_tempo' => '2025-04-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => null,
                'id_user' => 4,
                'tanggal_transaksi' => '2025-04-30',
                'waktu_transaksi' => '08:00:00',
                'total_transaksi' => 300000.00,
                'jumlah_dibayar' => 100000.00,
                'metode_pembayaran' => 'transfer',
                'id_status_transaksi' => 1,
                'tanggal_jatuh_tempo' => '2025-05-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => null,
                'id_user' => 5,
                'tanggal_transaksi' => '2025-05-01',
                'waktu_transaksi' => '12:00:00',
                'total_transaksi' => 100000.00,
                'jumlah_dibayar' => 100000.00,
                'metode_pembayaran' => 'transfer',
                'id_status_transaksi' => 1,
                'tanggal_jatuh_tempo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Bima Ryan',
                'id_user' => null,
                'tanggal_transaksi' => '2025-05-02',
                'waktu_transaksi' => '17:00:00',
                'total_transaksi' => 100000.00,
                'jumlah_dibayar' => 100000.00,
                'metode_pembayaran' => 'tunai',
                'id_status_transaksi' => 1,
                'tanggal_jatuh_tempo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT Gas Makmur Abadi',
                'id_user' => null,
                'tanggal_transaksi' => '2025-05-06',
                'waktu_transaksi' => '18:00:00',
                'total_transaksi' => 200000.00,
                'jumlah_dibayar' => 200000.00,
                'metode_pembayaran' => 'transfer',
                'id_status_transaksi' => 1,
                'tanggal_jatuh_tempo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
