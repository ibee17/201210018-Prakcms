<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Product 1', 'description' => 'Description for product 1', 'price' => 10.00]);
        Product::create(['name' => 'Product 2', 'description' => 'Description for product 2', 'price' => 20.00]);
        Product::create(['name' => 'Product 3', 'description' => 'Description for product 3', 'price' => 30.00]);
    }
}
