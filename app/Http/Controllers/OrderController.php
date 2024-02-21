<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Order $order){
        $suggest = Product::latest()->take(3)->get();
        return view('card.index', compact('order', 'suggest'));
    }
    public function addToCard(Request $request)
    {
        $user = Auth::user();
        $product = Product::findOrFail($request->id);
        $order = $user->order;
        if ($order === null) {
            $order = Order::create(['user_id' => $user->id]);
        } else {
        }

        $order->products()->attach($product->id, [
            'price' => $product->price,
        ]);

        return redirect()->back()->with('success', 'Product added to cart successfully');
    }
    
}
