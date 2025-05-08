<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NotifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifikasis')->insert([
            [
                'id_tagihan' => 2,
                'id_template' => 1,
                'tanggal_terjadwal' => '2025-03-29',
                'status_baca' => 2,
                'waktu_dikirim' => '10:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tagihan' => 1,
                'id_template' => 1,
                'tanggal_terjadwal' => '2025-05-27',
                'status_baca' => 1,
                'waktu_dikirim' => '08:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tagihan' => 1,
                'id_template' => 2,
                'tanggal_terjadwal' => '2025-05-28',
                'status_baca' => 1,
                'waktu_dikirim' => '08:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tagihan' => 1,
                'id_template' => 3,
                'tanggal_terjadwal' => '2025-05-29',
                'status_baca' => 1,
                'waktu_dikirim' => '08:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tagihan' => 1,
                'id_template' => 4,
                'tanggal_terjadwal' => '2025-05-30',
                'status_baca' => 1,
                'waktu_dikirim' => '08:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tagihan' => 1,
                'id_template' => 5,
                'tanggal_terjadwal' => '2025-06-01',
                'status_baca' => 1,
                'waktu_dikirim' => '08:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
