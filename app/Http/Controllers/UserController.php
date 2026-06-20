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
            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role === 'instructor') {
                return redirect()->route('instructor.dashboard');
            } else {
                return redirect()->route('student.dashboard');
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->onlyInput('email');
    }

    public function register()
    {
        return view('layouts.register');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:5',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|max:10|min:10',
            'password' => 'required|string|min:5|confirmed',
            'role' => 'required|in:student,instructor,admin',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('frontend.login')->with('success', 'Account created successfully. Please login.');
    }

    public function forgotPassword()
    {
        return view('layouts.forgot-password');
    }

    public function userIndex()
    {
        $users = User::paginate(1);
        return view('users.users', compact('users'));
    }

    public function create()
    {
        return view('users.add-user');
    }

    public function userDetail($id)
    {
        $user = User::find($id);
        return view('users.user-details', compact('user'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend.login');
    }
}
