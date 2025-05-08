<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peminjamans')->insert([
            [
                'id_detail_transaksi' => 1,
                'tanggal_pinjam' => '2025-04-29',
                'status_pinjam' => 'aktif', // 1 = aktif
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_detail_transaksi' => 2,
                'tanggal_pinjam' => '2025-04-29',
                'status_pinjam' => 'aktif', // 1 = aktif
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_detail_transaksi' => 3,
                'tanggal_pinjam' => '2025-03-24',
                'status_pinjam' => 'selesai', // 2 = selesai
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_detail_transaksi' => 4,
                'tanggal_pinjam' => '2025-03-24',
                'status_pinjam' => 'selesai', // 2 = selesai
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_detail_transaksi' => 5,
                'tanggal_pinjam' => '2025-04-30',
                'status_pinjam' => 'selesai', // 2 = selesai
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_detail_transaksi' => 7, // Perhatikan id_detail_transaksi 7 (sesuai gambar)
                'tanggal_pinjam' => '2025-04-30',
                'status_pinjam' => 'selesai', // 2 = selesai
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ // Perhatikan id_peminjaman 8 (loncat dari 6)
                'id_detail_transaksi' => 8,
                'tanggal_pinjam' => '2025-05-01',
                'status_pinjam' => 'aktif', // 1 = aktif
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_detail_transaksi' => 10, // Perhatikan id_detail_transaksi 10 (sesuai gambar)
                'tanggal_pinjam' => '2025-05-05',
                'status_pinjam' => 'aktif', // Kosong di gambar, diasumsikan aktif
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
