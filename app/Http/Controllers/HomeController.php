<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // return view('admin.dashboard');
        return view('layouts.dashboard-nav');
    }

    // User Dashboard
    public function userDash() {
        return view('layouts.dashboard-nav-user');
    }

    public function userDailyTasks() {
        return view('user-dashboard.daily-tasks');
    }
}
