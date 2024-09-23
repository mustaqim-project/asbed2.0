<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        $adminRoles = [
            'perawat',
            'ahli gizi',
            'dokter',
            'psikiater',
            'Admin'
        ];

        foreach ($adminRoles as $roleName) {
            // Buat admin baru dengan data yang benar
            $admin = Admin::create([
                'name' => ucfirst($roleName) . ' Admin',
                'email' => $roleName . '@admin.com',
                'image' => 'upload/default.jpg', // Ganti dengan path image yang sesuai
                'password' => Hash::make('password'), // Ganti password sesuai kebutuhan
                'status' => '1',
            ]);

            // Assign role to admin
            $role = Role::where('name', $roleName)->where('guard_name', 'admin')->first();
            $admin->roles()->attach($role);
        }
    }
}
