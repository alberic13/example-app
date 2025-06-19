<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Kenanga No. 123, Jakarta',
                'jenis_kelamin' => 'Laki-laki',
                'timestamp_created_at' => now(),
                'timestamp_updated_at' => now(),
            ],
            [
                'nama' => 'Ani Wijaya',
                'alamat' => 'Jl. Melati No. 45, Bandung',
                'jenis_kelamin' => 'Perempuan',
                'timestamp_created_at' => now(),
                'timestamp_updated_at' => now(),
            ],
            [
                'nama' => 'Candra Kusuma',
                'alamat' => 'Jl. Dahlia No. 67, Surabaya',
                'jenis_kelamin' => 'Laki-laki',
                'timestamp_created_at' => now(),
                'timestamp_updated_at' => now(),
            ],
            [
                'nama' => 'Dewi Sartika',
                'alamat' => 'Jl. Anggrek No. 89, Yogyakarta',
                'jenis_kelamin' => 'Perempuan',
                'timestamp_created_at' => now(),
                'timestamp_updated_at' => now(),
            ],
            [
                'nama' => 'Eko Prabowo',
                'alamat' => 'Jl. Mawar No. 34, Semarang',
                'jenis_kelamin' => 'Laki-laki',
                'timestamp_created_at' => now(),
                'timestamp_updated_at' => now(),
            ],
        ];

        foreach ($data as $item) {
            Siswa::create($item);
        }
    }
}
