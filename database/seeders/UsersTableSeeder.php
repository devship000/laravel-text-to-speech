<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        DB::table('users')->insert([
            [
                'name'     => 'Admin',
                'username' => 'admin',
                'email'    => 'admin@admin.com',
                'password' => Hash::make('111'),
                'role'     => 'admin',
                'status'   => 'active',

            ],

            // agent
            [
                'name'     => 'Agent',
                'username' => 'agent',
                'email'    => 'agent@admin.com',
                'password' => Hash::make('111'),
                'role'     => 'agent',
                'status'   => 'active',

            ],

            // user
            [
                'name'     => 'User',
                'username' => 'user',
                'email'    => 'user@admin.com',
                'password' => Hash::make('111'),
                'role'     => 'user',
                'status'   => 'active',

            ],
        ]);
    }
}
