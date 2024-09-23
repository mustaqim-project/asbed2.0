<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create a dummy user
        $user = User::create([
            'name' => 'Regular User',
            'tanggal_lahir' => '2000-01-01',
            'tinggi_badan' => 170,
            'berat_badan' => 70,
            'jenis_kelamin' => 'L',
            'gambar' => 'default.png',
            'aktifitas_id' => 1,
            'email' => 'user@web.com',
            'password' => Hash::make('password'), // Ganti password sesuai kebutuhan
            'status' => '1',
        ]);

        // Assign role to user
        $role = Role::where('name', 'user')->where('guard_name', 'web')->first();
        $user->roles()->attach($role);
    }
}
