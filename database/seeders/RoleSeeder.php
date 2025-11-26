<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Administrator role with full access'
        ]);

        Role::create([
            'name' => 'user',
            'description' => 'Regular user role'
        ]);

        Role::create([
            'name' => 'moderator',
            'description' => 'Moderator role with limited admin access'
        ]);
    }
}
