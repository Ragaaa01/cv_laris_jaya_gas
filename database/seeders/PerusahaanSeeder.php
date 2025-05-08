<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perusahaans')->insert([
            [
                'nama_perusahaan' => 'CV Laris Jaya Gas',
                'alamat_perusahaan' => 'Gang 2 Utara Karangampel - Indramayu',
                'email_perusahaan' => 'larisjaya@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_perusahaan' => 'PT Pertamina Balongan RU IV',
                'alamat_perusahaan' => 'jl. Balongann Raya Indah No. 77',
                'email_perusahaan' => 'pertamina@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_perusahaan' => 'RS Sehat Selalu',
                'alamat_perusahaan' => 'Jl. Selalu Disini No. 23',
                'email_perusahaan' => 'rssehatselalu12@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_perusahaan' => 'PT Mesin Baja',
                'alamat_perusahaan' => 'Jl. Tulang Besi No. 44',
                'email_perusahaan' => 'mesinbaja@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ]);
    }
    }

