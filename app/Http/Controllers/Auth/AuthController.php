<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use TCG\Voyager\Models\Role;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->with('rejected', 'Email or Password is inccorect');
    }
    public function signup(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);
        // dd($validatedData);
        $validatedData['password'] = Hash::make($request->password);
        $user = User::create($validatedData);
        $defaultRole = Role::where('name', 'user')->first();
        if ($defaultRole) {
            $user->roles()->attach($defaultRole);
        }
        Auth::login($user);
        return redirect('/');
    }
    public function getout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
