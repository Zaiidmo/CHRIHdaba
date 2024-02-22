<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\MollieController;
use App\Http\Controllers\OrderController;
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
    $popularCategories = Voyager::model('Category')->take(4)->get();
    return view('welcome', compact('products', 'newArrivals', 'popularCategories'));
})->name('home');

Route::resource('product', ProductController::class);

//Card Routes
Route::resource('card', CardController::class);
Route::Post('/addCart', [CardController::class,'addToCART'])->name('card.add');
Route::delete('/deleteFromCart', [CardController::class, 'removeFromCart'])->name('deleteFromCart');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::middleware("auth")->group(function(){
    // Order
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::post('/prepare-payment', [OrderController::class, 'preparePayment'])->name('prepare.payment');
    Route::get('/success', [OrderController::class, 'success'])->name('success');
    Route::get('/cancel', [OrderController::class, 'cancel'])->name('cancel');
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

// search
// Route::get('/search', [ProductController::class, 'search']);
// search using category name and product name
Route::get('/search-by-category', [ProductController::class, 'searchByCategory']);

// mollie function 
// Route::get('mollie-paymnet',[MollieController::Class,'preparePayment'])->name('mollie.payment');
// Route::get('payment-success',[MollieController::Class, 'paymentSuccess'])->name('payment.success');