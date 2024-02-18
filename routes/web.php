<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
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

Route::resource('product', ProductController::class);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('login', function(){
    return redirect()->route('voyager.login');
})->name('login');

// Login 
Route::get('signin', [AuthController::class,'signin'])->name('signin');
// Register
Route::post('/signup', [AuthController::class, 'signup'])->name('registration');
