<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['nama' => 'admin'],
            ['nama' => 'ketua_org'],
            ['nama' => 'anggota'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
