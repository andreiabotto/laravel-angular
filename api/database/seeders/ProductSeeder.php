<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        Product::insert([
            'name' => Str::random(10),
            'fabrication' => rand(0,1),
            'size' => rand(1,999),
            'price' => rand(1,999)
        ]);
        
    }
}
           