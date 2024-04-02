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
        $new_product->image =$product['image'];
        $new_product->description =$product['description'];
        $new_product->price = $product['price'];
        $new_product->avaiable =$product['avaiable'];
        $new_product->save();
       }
    }
}
