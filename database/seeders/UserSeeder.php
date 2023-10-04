<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'anggota_id' => 1,
                'username' => "Administrator",
                'role_id' => 1,
                'password' => Hash::make('admin')
            ],
            [
                'anggota_id' => 2,
                'username' => "Ketua Organisasi",
                'role_id' => 2,
                'password' => Hash::make('ketua')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
