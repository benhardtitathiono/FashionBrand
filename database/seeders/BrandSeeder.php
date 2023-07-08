<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'brand_name' => 'UNIQLO',
            'brand_address' => 'Tunjungan Plaza 3, Jl. Basuki Rahmat No.8-12',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Vans',
            'brand_address' => 'Jl. Bulak Cumpat Barat No.17',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Crocodile',
            'brand_address' => 'Supermall Pakuwon Lantai 1 No. 45, JL. Puncak Lontar Indah',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Hasenda',
            'brand_address' => 'Kayoon St No.64-65, Embong Kaliasin',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Triset',
            'brand_address' => 'OXA BG JUNCTION, Jl. Bubutan No.1 - 7',
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Fladeo',
            'brand_address' => 'Jl. Ahmad Yani No.288, Dukuh Menanggal',
        ]);
        DB::table('brands')->insert([
            'brand_name' => "Levi's",
            'brand_address' => 'Jl. Diponegoro No.152',
        ]);
    }
}
