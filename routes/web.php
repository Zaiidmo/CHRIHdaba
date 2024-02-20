<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = Product::latest()->take(2)->get();
    $newArrivals = Product::latest()->take(4)->get();
    $popularCategories = Voyager::model('Category')->get();
    return view('welcome', compact('products', 'newArrivals', 'popularCategories'));
});

Route::resource('product', ProductController::class);

Route::resource('card', CardController::class);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('login', function () {
    return redirect()->route('voyager.login');
})->name('login');

// Login
Route::post('signin', [AuthController::class, 'signin'])->name('signin');
// Register
Route::post('/signup', [AuthController::class, 'signup'])->name('registration');
// Logout
Route::any('logout', [AuthController::class, 'getout'])->name('logout');
