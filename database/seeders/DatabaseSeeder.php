<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(BrandSeeder::class);
        // $this->call(TypeSeeder::class);
        //$this->call(ProductSeeder::class);
    }
}
