<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Product;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(Card $card){
        $suggest = Product::latest()->take(3)->get();
        return view('card.index', compact('card', 'suggest'));
    }
}
