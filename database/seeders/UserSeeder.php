<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Sigit Hermawan',
            'username' => 'Sigit',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'gambar' => 'user.png'
        ]);
        User::create([
            'name' => 'M Zildhan Reynaldi',
            'username' => 'Zildhan',
            'password' => bcrypt('12345678'),
            'role' => 'pekerja_lapangan',
            'gambar' => 'user.png'

        ]);
    }
}
