<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
        public function ShowProfile()
    {
        if (Auth::user() === null) {
            return redirect()->route('home')->with('error', 'You must be logged in to view your profile.');
        } else {
            return view('Profile');
        }
    
}
}
