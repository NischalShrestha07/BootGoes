<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $totalUsers = User::count();
        $recentUsers = User::latest()->take(5)->get();
        return view('dashboard', compact('totalUsers', 'recentUsers'));
    }

    public function instructorDashboard()
    {
        return view('instructor.dashboard');
    }

    public function studentDashboard()
    {
        return view('student.dashboard');
    }
}
