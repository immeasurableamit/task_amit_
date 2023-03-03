<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(['id' => 1, 'name' => 'Grocery']);
        DB::table('categories')->insert(['id' => 2, 'name' => 'Mobiles']);
        DB::table('categories')->insert(['id' => 3, 'name' => 'Fashion']);
    }
}
