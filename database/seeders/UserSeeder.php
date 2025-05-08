<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin CV LARIS JAYA',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'), // pastikan hash password
            'nik' => '3201010101010001',
            'no_telepon' => '081324294917',
            'id_perusahaan' => null,
            'status_aktif' => true,
            'role' => 1,
        ]);

        User::create([
            'nama' => 'Ragatona Besly',
            'email' => 'ragatonabesly@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '3201010101010002',
            'no_telepon' => '082121925137',
            'id_perusahaan' => null,
            'status_aktif' => true, // default sesuai schema
            'role' => 2,
        ]);
        User::create([
            'nama' => 'Aditya Sukma Pratama',
            'email' => 'adityasukma67@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '3201010101010003',
            'no_telepon' => '081111222111',
            'id_perusahaan' => null,
            'status_aktif' => true, // default sesuai schema
            'role' => 2,
        ]);
        User::create([
            'nama' => 'Wiranto',
            'email' => 'wirantobilek@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '3201010101010004',
            'no_telepon' => '082212378811',
            'id_perusahaan' => null,
            'status_aktif' => true, // default sesuai schema
            'role' => 2,
        ]);
        User::create([
            'nama' => 'Apriliady Rahman',
            'email' => 'aprilbilek@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '3201010101010005',
            'no_telepon' => '085644321165',
            'id_perusahaan' => null,
            'status_aktif' => true, // default sesuai schema
            'role' => 2,
        ]);
        User::create([
            'nama' => 'Moh Syahrul',
            'email' => 'syahrulbilek@gmail.com',
            'password' => Hash::make('password'),
            'nik' => '3201010101010006',
            'no_telepon' => '087766218898',
            'id_perusahaan' => null,
            'status_aktif' => true, // default sesuai schema
            'role' => 2,
        ]);
    }
}
