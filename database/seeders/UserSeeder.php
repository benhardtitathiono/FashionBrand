<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ardi',
            'email' => 'ardi@gmail.com',
            'password' => Hash::make('12345678'),
            'roles'   => 'Owner'
        ]);
        DB::table('users')->insert([
            'name' => 'Steven',
            'email' => 'steven@gmail.com',
            'password' => Hash::make('12345678'),
            'roles'   => 'Owner'
        ]);
        DB::table('users')->insert([
            'name' => 'Alfath',
            'email' => 'alfath@gmail.com',
            'password' => Hash::make('12345678'),
            'roles'   => 'Customer'
        ]);
        DB::table('users')->insert([
            'name' => 'Benhard',
            'email' => 'benhard@gmail.com',
            'password' => Hash::make('12345678'),
            'roles'   => 'Staff'
        ]);
    }
}
