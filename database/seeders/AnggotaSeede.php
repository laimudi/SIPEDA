<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeede extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggotas = [
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Ketua Organisasi'
            ]
        ];

        foreach ($anggotas as $anggota) {
            Anggota::create($anggota);
        }
    }
}
