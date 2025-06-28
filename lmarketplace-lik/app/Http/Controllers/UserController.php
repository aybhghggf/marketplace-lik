<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function ShowProfile()
    {
        if (Auth::user() === null) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à votre profil.');
        } else {
            return view('Profile');
        }
    }
    public function ShowLogin()
    {
        return view('Login');
    }
    public function ShowRegister()
    {
        return view('register');
    }
}
