<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Order $order){
        //
    }
    public function addToCart(Request $request)
{
    $user = Auth::user();
    $product = Product::find($request->id);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    $order = $user->order;
    $totalAmount = $product->price;

    if ($order === null) {
        $order = Order::create([
            'user_id' => $user->id,
            'status' => 'pending',
            'totalAmount' => $totalAmount
        ]);
    } else {
        // Update the total amount of the order
        $order->totalAmount += $totalAmount;
        $order->save();
    }

    // Add the product to the order
    $order->products()->attach($product->id);

    return redirect('card')->with('success', 'Product added to cart successfully');
}

    
}
