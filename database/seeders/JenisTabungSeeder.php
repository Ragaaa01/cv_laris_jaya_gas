<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisTabungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_tabungs')->insert([
            [
                'kode_jenis' => 'O',
                'nama_jenis' => 'Oksigen',
                'harga' => 100000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_jenis' => 'N',
                'nama_jenis' => 'Nitrogen',
                'harga' => 100000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_jenis' => 'AR',
                'nama_jenis' => 'Argon',
                'harga' => 75000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_jenis' => 'AC',
                'nama_jenis' => 'Aceteline',
                'harga' => 100000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_jenis' => 'N20',
                'nama_jenis' => 'Dinitrogen Oksida',
                'harga' => 100000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
