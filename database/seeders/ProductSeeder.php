<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(['id' => 1, 'name' => 'Organic Tattva Red Rajma (Whole)', 'price' => '185', 'category_id' => 1]);
        DB::table('products')->insert(['id' => 2, 'name' => 'Masoor Dal (Split)', 'price' => '170', 'category_id' => 1]);
        DB::table('products')->insert(['id' => 3, 'name' => 'Raw Peanut (Whole)', 'price' => '240', 'category_id' => 1]);
        DB::table('products')->insert(['id' => 4, 'name' => 'Google Pixel 6a (Chalk, 128 GB)', 'price' => '43999', 'category_id' => 2]);
    }
}
