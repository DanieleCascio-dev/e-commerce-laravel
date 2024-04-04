<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //Retrun all orders with pivot table
    public function index(){
        $ordersQuery = Order::with('products');
        $orders = $ordersQuery->paginate(10);
        

        return response()->json([
            'success'=>true,
            'results'=>$orders,
            
        ]);

    }

    // Save new order and save info into pivot table
    public function storeOrder(Request $request){
        $data = $request->all();

        $order = new Order();
        $order->client = $data["client"];
        $order->date = $data["date"];
        $order->total = $data["total"];
        $order->save();

        foreach($data['productInfo'] as $info){
            $product = Product::find($info['id']);
            $order->products()->attach($product->id,['quantity'=> $info['quantity'], 'name'=>$product->title, 'price'=>$product->price]);
        }


        return response()->json([
            'success'=>true,
            'results'=>$data
        ]);

    }
}
