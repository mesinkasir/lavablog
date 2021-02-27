<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function loginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.index')->withSuccess("Welcome to the artisan family !!!");
        }
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('admin.register');
    }
    public function registerPost(Request $request)
    {
        $user = new User();
        $user->name = $request->firstname . " " . $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login')->withSuccess('Whats wrong dude ??');
    }
}
