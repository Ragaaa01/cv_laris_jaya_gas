<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TabungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('tabungs')->insert([
                [
                    'kode_tabung' => 'O001',
                    'id_jenis_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'O002',
                    'id_jenis_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'O003',
                    'id_jenis_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'O004',
                    'id_jenis_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'O005',
                    'id_jenis_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N001',
                    'id_jenis_tabung' => 2, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N002',
                    'id_jenis_tabung' => 2, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N003',
                    'id_jenis_tabung' => 2, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N004',
                    'id_jenis_tabung' => 2, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N005',
                    'id_jenis_tabung' => 2, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AR001',
                    'id_jenis_tabung' => 3, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AR002',
                    'id_jenis_tabung' => 3, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AR003',
                    'id_jenis_tabung' => 3, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AR004',
                    'id_jenis_tabung' => 3, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AR005',
                    'id_jenis_tabung' => 3, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AC001',
                    'id_jenis_tabung' => 4, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AR002',
                    'id_jenis_tabung' => 4, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AR003',
                    'id_jenis_tabung' => 4, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AR004',
                    'id_jenis_tabung' => 4, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'AR005',
                    'id_jenis_tabung' => 4, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N2O001',
                    'id_jenis_tabung' => 5, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N2O002',
                    'id_jenis_tabung' => 5, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N2O003',
                    'id_jenis_tabung' => 5, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N2O004',
                    'id_jenis_tabung' => 5, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'N2O005',
                    'id_jenis_tabung' => 5, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'SRO001',
                    'id_jenis_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'SRN001',
                    'id_jenis_tabung' => 2, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'SRAR001',
                    'id_jenis_tabung' => 3, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'SRAC001',
                    'id_jenis_tabung' => 4, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_tabung' => 'SRN2O001',
                    'id_jenis_tabung' => 5, // Pastikan ID ini sesuai dengan data di tabel jenis_tabungs
                    'id_status_tabung' => 1, // Pastikan ID ini sesuai dengan data di tabel status_tabungs
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
    }
}
