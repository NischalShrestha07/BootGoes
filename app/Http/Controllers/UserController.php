<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('layouts.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:5',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }

    public function register()
    {
        return view('layouts.register');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:5',
            'email' => 'required|email',
            'password' => 'required|string|min:5|confirmed',
        ]);
        // return $request;

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login');
    }

    public function forgotPassword()
    {
        return view('layouts.forgot-password');
    }

    public function userIndex()
    {
        return view('users.users');
    }

    public function create()
    {
        return view('users.add-user');
    }

    public function userDetail()
    {
        return view('users.user-details');
    }
}
