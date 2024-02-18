<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
    return view('welcome');
});

Route::get('/product', function () {
    return view('product.index');
});

Route::get('/product_informations', function () {
    return view('product.show');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('login', function(){
    return redirect()->route('voyager.login');
})->name('login');
