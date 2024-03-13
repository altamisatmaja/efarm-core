<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin eFarm',
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'alamat_lengkap' => 'Jember',
            'role_id' => 2,
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
        ]);
    }
}
