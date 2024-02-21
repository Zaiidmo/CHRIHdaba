<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function index(Card $card){
        $user = Auth::user();
        $card = $user->card;
        $suggest = Product::latest()->take(3)->get();
        
        // Check if the user has a card
        if ($card) {
            $cardProducts = $card->products;
            return view('card.index', compact('card','cardProducts', 'suggest'));
        }

        return view('card.index', compact('card', 'suggest', ['cardProducts' => []]));
    }
    public function addToCART(Request $request)
    {
        $user = Auth::user();
        $product = Product::findOrFail($request->id);
        $card = $user->card;
        // dd($card);
        if ($card === null) {
            $card = Card::create(['user_id' => $user->id]);
        } 
        $card->products()->attach($product->id);

        return redirect()->back()->with('success', 'Product added to cart successfully');
    }
}
