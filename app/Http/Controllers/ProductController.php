<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product.index', compact('products','categories'));
    }

    public function show(Product $product)
    {
        $suggest = Product::latest()->take(3)->get();
        return view('product.show', compact('product', 'suggest'));
    }

    public function search(){
        $search_test = $_GET['search'];
        $product = Product::where('name','LIKE','%'.$search_test.'%')->get();
    }
}
