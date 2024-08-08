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
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role_id' => 1, // role_id for admin
            ],
            [
                'name' => 'User 1',
                'email' => 'user1@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // role_id for user
            ],
            [
                'name' => 'User 2',
                'email' => 'user2@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // role_id for user
            ],
            [
                'name' => 'User 3',
                'email' => 'user3@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // role_id for user
            ],
            [
                'name' => 'User 4',
                'email' => 'user4@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // role_id for user
            ],
        ]);
    }
}
