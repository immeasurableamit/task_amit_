<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('discounts')->insert([
            'start' => 90,
            'end' => 150,
            'percentage' => 5,
            'category_id' => 1,
        ]);

        DB::table('discounts')->insert([
            'start' => 151,
            'end' => 200,
            'percentage' => 10,
            'category_id' => 1,
        ]);

        DB::table('discounts')->insert([
            'start' => 1000,
            'end' => 3000,
            'percentage' => 15,
            'category_id' => 2,
        ]);

        DB::table('discounts')->insert([
            'start' => 15000,
            'end' => 50000,
            'percentage' => 25,
            'category_id' => 2,
        ]);
    }
}
