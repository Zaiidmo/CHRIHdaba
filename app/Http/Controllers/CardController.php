<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function index(Card $card)
    {
        $user = Auth::user();
        $card = $user->cart;
        $suggest = Product::latest()->take(3)->get();

        // Check if the user has a card
        if ($user->cart) {
            $cardProducts = $user->cart->products;
            return view('card.index', compact('card','suggest', 'cardProducts'));
        } else {
            // If the user doesn't have a card, pass an empty array
            $cardProducts = [];
            return view('card.index', compact('card','suggest', 'cardProducts'));
        }
    }
    public function addToCART(Request $request)
    {
        $user = Auth::user();
        $product = Product::findOrFail($request->id);
        $card = $user->cart;
        // dd($card);
        if ($card === null) {
            $card = Card::create(['user_id' => $user->id]);
        }
        $card->products()->attach($product->id);

        return redirect()->back()->with('success', 'Product added to cart successfully');
    }
    public function removeFromCart(Request $request)
    {
        $productId = $request->id;
        $user = Auth::user();
        $cart = $user->cart;

        if ($cart) {
            $cart->products()->detach($productId);
            return response()->json(['success' => true, 'message' => 'Product removed from cart successfully']);
        }

        return response()->json(['success' => false, 'message' => 'User does not have a cart']);
    }
}
