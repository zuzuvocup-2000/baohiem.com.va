<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Supervisor',
            'guard_name' => 'web',
            'created_at' => '2024-03-20 17:31:16.453',
            'updated_at' => '2024-03-20 17:31:16.453'
        ]);

        // Tạo role User
        Role::create([
            'name' => 'User',
            'guard_name' => 'web',
            'created_at' => '2024-03-20 17:31:29.783',
            'updated_at' => '2024-03-20 17:43:12.963'
        ]);

        // Tạo role Admin
        Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
            'created_at' => '2024-03-20 17:31:39.810',
            'updated_at' => '2024-03-20 17:43:01.813'
        ]);
    }
}
