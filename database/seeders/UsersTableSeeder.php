<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin Zed',
                'email' => 'adminzed@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'status' => 'active',
            ],

            //User
            [
                'name' => 'Shen',
                'email' => 'shen@gmail.com',
                'password' => Hash::make('user'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
