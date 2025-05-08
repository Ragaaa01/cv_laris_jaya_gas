<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pengembalian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PerusahaanSeeder::class,
            JenisTabungSeeder::class,
            StatusTabungSeeder::class,
            TabungSeeder::class,
            StatusTransaksiSeeder::class,
            JenisTransaksiSeeder::class,
            TransaksiSeeder::class,
            DetailTransaksiSeeder::class,
            PeminjamanSeeder::class,
            PengembalianSeeder::class,
            TagihanSeeder::class,
            NotifikasiTemplateSeeder::class,
            NotifikasiSeeder::class,
        ]);

    }
}
