<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        return view('dashboard');
    }

    public function users ()
    {
        return view('dashboard.users');
    }

    public function settings ()
    {
        return view('dashboard.settings');
    }
}
