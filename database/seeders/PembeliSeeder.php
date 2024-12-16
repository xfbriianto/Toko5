<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembeli;
use Carbon\Carbon;

class PembeliSeeder extends Seeder
{
    public function run()
    {
        $pembelis = [
            [
                'kode_pembeli' => 'P001',
                'nama_pembeli' => 'Celvin',
                'alamat' => 'Jl. Melati No. 5',
                'telepon' => '081234567890'
            ],
            [
                'kode_pembeli' => 'P002',
                'nama_pembeli' => 'Avail',
                'alamat' => 'Jl. Anggrek No. 3',
                'telepon' => '081298765432'
            ],
            [
                'kode_pembeli' => 'P003',
                'nama_pembeli' => 'Budi Santoso',
                'alamat' => 'Jl. Kenanga No. 12',
                'telepon' => '087654321098'
            ]
        ];

        foreach ($pembelis as $pembeli) {
            Pembeli::firstOrCreate(
                ['kode_pembeli' => $pembeli['kode_pembeli']],
                $pembeli
            );
        }
    }
}