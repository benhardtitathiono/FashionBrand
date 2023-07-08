<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'password' => '12345',
            'roles_id'   => '2'
        ]);
        DB::table('users')->insert([
            'name' => 'Steven',
            'email' => 'steven@gmail.com',
            'password' => '123',
            'roles_id'   => '2'
        ]);
        DB::table('users')->insert([
            'name' => 'Alfath',
            'email' => 'alfath@gmail.com',
            'password' => '345',
            'roles_id'   => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'Benhard',
            'email' => 'benhard@gmail.com',
            'password' => '567',
            'roles_id'   => '3'
        ]);
    }
}
