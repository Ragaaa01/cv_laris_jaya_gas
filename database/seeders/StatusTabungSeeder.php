<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusTabungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_tabungs')->insert([
            [
                'status_tabung' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status_tabung' => 'Dipinjam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status_tabung' => 'Rusak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status_tabung' => 'Hilang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
