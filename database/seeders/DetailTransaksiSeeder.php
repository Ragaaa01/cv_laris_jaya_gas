<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_transaksis')->insert([
            [                
                'id_transaksi' => 1,
                'id_tabung' => 1,
                'id_jenis_transaksi' => 1,
                'harga' => 100000,
                'batas_waktu_peminjaman' => '2025-05-29',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [                
                'id_transaksi' => 1,
                'id_tabung' => 2,
                'id_jenis_transaksi' => 1,
                'harga' => 100000,
                'batas_waktu_peminjaman' => '2025-05-29',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [                
                'id_transaksi' => 2,
                'id_tabung' => 3,
                'id_jenis_transaksi' => 1,
                'harga' => 100000,
                'batas_waktu_peminjaman' => '2025-04-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [                
                'id_transaksi' => 2,
                'id_tabung' => 10,
                'id_jenis_transaksi' => 2,
                'harga' => 75000,
                'batas_waktu_peminjaman' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [                
                'id_transaksi' => 3,
                'id_tabung' => 5,
                'id_jenis_transaksi' => 1,
                'harga' => 100000,
                'batas_waktu_peminjaman' => '2025-05-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [                
                'id_transaksi' => 3,
                'id_tabung' => 7,
                'id_jenis_transaksi' => 1,
                'harga' => 100000,
                'batas_waktu_peminjaman' => '2025-05-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [                
                'id_transaksi' => 3,
                'id_tabung' => 7,
                'id_jenis_transaksi' => 1,
                'harga' => 100000,
                'batas_waktu_peminjaman' => '2025-05-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [                
                'id_transaksi' => 4,
                'id_tabung' => 5,
                'id_jenis_transaksi' => 1,
                'harga' => 100000,
                'batas_waktu_peminjaman' => '2025-05-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [                
                'id_transaksi' => 5,
                'id_tabung' => 11,
                'id_jenis_transaksi' => 2,
                'harga' => 100000,
                'batas_waktu_peminjaman' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_transaksi' => 6,
                'id_tabung' => 15,
                'id_jenis_transaksi' => 1,
                'harga' => 100000,
                'batas_waktu_peminjaman' => '2025-06-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_transaksi' => 6,
                'id_tabung' => 26,
                'id_jenis_transaksi' => 1,
                'harga' => 100000,
                'batas_waktu_peminjaman' => '2025-06-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
