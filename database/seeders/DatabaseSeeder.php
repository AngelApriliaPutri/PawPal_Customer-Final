<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'USER_USERNAME' => 'user@example.com',
            'USER_PASSWORD' => Hash::make('password123'),
        ]);

        // Anda bisa menambahkan lebih banyak pengguna jika diperlukan
        DB::table('users')->insert([
            'USER_USERNAME' => 'anotheruser@example.com',
            'USER_PASSWORD' => Hash::make('anotherpassword'),
        ]);
    }
}
