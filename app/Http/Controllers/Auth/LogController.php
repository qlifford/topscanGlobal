<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class LogController extends Controller
{ 
    public function login()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
         // validate
         $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // sign in user
       if(!auth()->attempt($request->only('email', 'password')))
       {
        return back()->with('status', 'Invalid credentials. Please try again');
       };

        return redirect()->route('dashboard');
    }
}
