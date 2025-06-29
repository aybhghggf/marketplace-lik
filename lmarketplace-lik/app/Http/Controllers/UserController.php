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
        return view('Register');
    }
    public function StoreUser(Request $request)
    {
        //validation
        $request->validated();
        //values
        $nom = $request->input('first_name');
        $prenom = $request->input('last_name');
        $email = $request->input('email');
        $telephone = $request->input('phone');
        $password = bcrypt($request->input('password'));
        //create user
        
        return redirect()->route('login')->with('success', 'Inscription réussie, vous pouvez vous connecter.');
    }
}
