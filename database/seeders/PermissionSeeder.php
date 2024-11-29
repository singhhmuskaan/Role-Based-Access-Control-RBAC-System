<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::factory()->create([
            'name' => 'view_reports',
            'description' => 'Can view records',
        ]);
        Permission::factory()->create([
            'name' => 'manage_users',
            'description' => 'Can manage users',
        ]);
    }
}
