<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products= config('products');
       foreach ($products as $product) {
        $new_product = new Product();
        $new_product->title = $product['title'];
        dd($new_product);
       }
    }
}
