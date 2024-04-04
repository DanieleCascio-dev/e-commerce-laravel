<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // return all product with a pagination
    public function index(){
        $products = Product::paginate(5);
        return response()->json([
            'success'=>true,
            'results'=>$products
        ]);
    }

    // return a single product using id 
    public function show($id){
        $product= Product::where('id',$id)->first();
        return response()->json([
            'success'=>true,
            'results'=>$product
        ]);
    }
}
