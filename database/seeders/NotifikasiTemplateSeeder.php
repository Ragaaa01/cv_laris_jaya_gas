<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NotifikasiTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifikasi_template')->insert([
            [
                'id_template' => 1,
                'nama_template' => 'Pengingat H-3',
                'hari_set' => -3,
                'judul' => 'Tagihan Jatuh Tempo 3 Hari Lagi',
                'isi' => 'Segera lunasi tagihan Anda sebelum tanggal jatuh tempo untuk menghindari denda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_template' => 2,
                'nama_template' => 'Pengingat H-2',
                'hari_set' => -2,
                'judul' => 'Pengingat: Tagihan Jatuh Tempo 2 Hari Lagi',
                'isi' => 'Waktu Anda hampir habis! Bayar tagihan Anda sebelum jatuh tempo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_template' => 3,
                'nama_template' => 'Pengingat H-1',
                'hari_set' => -1,
                'judul' => 'Pengingat: Tagihan Jatuh Tempo Besok',
                'isi' => 'Besok adalah hari terakhir untuk membayar tagihan Anda tepat waktu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_template' => 4,
                'nama_template' => 'Pengingat H',
                'hari_set' => 0,
                'judul' => 'Hari ini Jatuh Tempo!',
                'isi' => 'Hari ini adalah tanggal jatuh tempo. Harap segera lakukan pembayaran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_template' => 5,
                'nama_template' => 'Pengingat H+1',
                'hari_set' => 1,
                'judul' => 'Tagihan Anda Telah Lewat Waktu',
                'isi' => 'Tagihan Anda sudah melewati tanggal jatuh tempo. Denda akan dikenakan jika belum dibayar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
