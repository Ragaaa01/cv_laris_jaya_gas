<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_peminjaman' => 3,
                'tanggal_kembali' => '2025-04-25',
                'kondisi_tabung' => '1',
                'keterangan' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_peminjaman' => 4,
                'tanggal_kembali' => '2025-04-25',
                'kondisi_tabung' => '1',
                'keterangan' => 'sudah selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_peminjaman' => 5,
                'tanggal_kembali' => '2025-08-03',
                'kondisi_tabung' => '1',
                'keterangan' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_peminjaman' => 6,
                'tanggal_kembali' => '2025-08-03',
                'kondisi_tabung' => '1',
                'keterangan' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_peminjaman' => 7,
                'tanggal_kembali' => '2025-08-03',
                'kondisi_tabung' => 1,
                'keterangan' => 'Tabung dalam kondisi baik dan bersih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('pengembalians')->insert($data);
    }
}
