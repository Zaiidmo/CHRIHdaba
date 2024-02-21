<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Order $order){
        $order = Order::where('user_id', Auth::id())->get();
        return view('order', compact('order'));
    }
    
}
