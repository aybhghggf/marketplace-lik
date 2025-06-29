<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidation;
use App\Http\Requests\UserValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
    public function StoreUser(Request $request, UserValidation $userValidation)
    {
        if (!$request->isMethod('post')) {
            return redirect('/')->with('error', 'Accès refusé.');
        }
        //validation
        $userValidation->validated();
        //values
        $nom = $request->input('first_name');
        $prenom = $request->input('last_name');
        $email = $request->input('email');
        $telephone = $request->input('phone');
        $password = bcrypt($request->input('password'));
        //create user
        User::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'phone' => $telephone,
            'password' => $password,
        ]);
        return redirect()->route('login')->with('success', 'Inscription réussie, vous pouvez vous connecter.');
    }
    public function Login(Request $request, LoginValidation $LoginValidation)
    {
        if (!$request->isMethod('post')) {
            return redirect('/')->with('error', 'Accès refusé.');
        }

        // Validation
        $LoginValidation->validated();

        // بيانات الدخول
        $attempt = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        $remember = $request->has('remember');

        if (Auth::attempt($attempt, $remember)) {
            return redirect()->route('home')->with('success', 'Connexion réussie.');
        } else {
            return redirect()->route('login')->with('error', 'Identifiants incorrects, veuillez réessayer.');
        }
    }
}
