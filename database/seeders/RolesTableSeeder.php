<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Dummy roles for 'admin' guard
        $adminRoles = ['perawat', 'ahli gizi', 'dokter', 'psikiater', 'Admin'];
        foreach ($adminRoles as $role) {
            Role::create([
                'name' => $role,
                'guard_name' => 'admin'
            ]);
        }

        // Dummy role for 'web' guard
        Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);
    }
}
