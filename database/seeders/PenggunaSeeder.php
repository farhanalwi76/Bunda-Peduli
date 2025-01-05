<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        Pengguna::create([
            'nama' => 'Budi Santoso',
            'username' => 'budi123',
            'nik' => '1234567890123456',
            'tgl_lahir' => '1990-01-01',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Jl. Merdeka No. 1, Jakarta',
        ]);
    }
}

