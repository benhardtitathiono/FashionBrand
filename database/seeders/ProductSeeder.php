<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Kemeja Extra Fine Cotton Kotak',
            'product_price' => '299.000',
            'product_dimension' => 'XL',
            'product_category' => '2',
            'product_brand' => '1',
            'product_type' => '1',
        ]);
    }
}
