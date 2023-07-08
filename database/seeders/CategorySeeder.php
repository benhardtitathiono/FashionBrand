<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Casual'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Formal'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Bussiness'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'T-shirt'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Shoes'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Jeans'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Throusers'
        ]);
    }
}
