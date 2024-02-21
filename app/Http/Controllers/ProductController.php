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

    // public function searchByCategory(Request $request){
    //     $searchString = $request->search_string;
    //     $categoryId = $request->category_id;
    
    //     // Commencez par récupérer tous les produits
    //     $products = Product::query();
    
    //     // Ensuite, filtrez les produits en fonction du terme de recherche
    //     if ($searchString) {
    //         $products->where('name', 'like', '%' . $searchString . '%');
    //     }
    
    //     if ($categoryId !== 'all') { // Si categoryId n'est pas 'all'
    //         // Ensuite, filtrez les produits en fonction de la catégorie sélectionnée
    //         if ($categoryId) { // Si categoryId est défini
    //             $products->where('category_id', $categoryId);
    //         }
    //     }
       
    //     // Exécutez la requête et récupérez les résultats
    //     $result = $products->get();
    
    //     // Retournez les résultats sous forme de réponse JSON
    //     return response()->json($result);
    // }
    public function searchByCategory(Request $request){
        $searchString = $request->search_string;
        $categoryId = $request->category_id;
    
        // Commencez par récupérer tous les produits
        $products = Product::query();
    
        // Ensuite, filtrez les produits en fonction de la catégorie sélectionnée
        if ($categoryId && $categoryId !== 'all') { // Si categoryId est défini et différent de 'all'
            $products->where('category_id', $categoryId);
        }
    
        // Ensuite, filtrez les produits en fonction du terme de recherche
        if ($searchString) {
            $products->where('name', 'like', '%' . $searchString . '%');
        }
    
        // Exécutez la requête et récupérez les résultats
        $result = $products->get();
    
        // Retournez les résultats sous forme de réponse JSON
        return response()->json($result);
    }
    
    

    // function search(Request $request){
    //     $products = Product::where('name', 'like', '%' . $request->search_string . '%')->get();
         
    //     return response()->json($products);
    // }
    
}
