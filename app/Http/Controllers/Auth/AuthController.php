<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\User;

class AuthController extends Controller
{
    public function signin(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();
            return  view('welcome');
        }
        return back()->with('rejected','Email or Password is inccorect');
    }
}
