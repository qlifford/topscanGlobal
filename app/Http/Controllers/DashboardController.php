<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function dashboard()
    {
        
        // dd(auth()->user()->post());
        return view('dashboard.index');
    }
}
