<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Order $order){
        $suggest = Product::latest()->take(3)->get();
        return view('card.index', compact('order', 'suggest'));
    }
    
}
