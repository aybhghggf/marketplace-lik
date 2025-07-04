<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidation;
use App\Http\Requests\UserValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
    public function ShowProfile()
    {
        if (Auth::user() === null) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à votre profil.');
        } else {
            $user = Auth::user();
            return view('Profile' , compact('user'));
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
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Déconnexion réussie.');
    }
    public function UpdateProfileImage(Request $request)
    {
        if (!$request->isMethod('post')) {
            return redirect()->route('profile')->with('error', 'Accès refusé.');
        }
        $user = Auth::user();
        if ($request->hasFile('profileImage')) {
            $image = $request->file('profileImage');
            $imagePath = $image->store('profile_images', 'public');
            $user->image_profile = '/storage/' . $imagePath;
            $user->save();
            return redirect()->route('profile')->with('success', 'Image de profil mise à jour avec succès.');
        } else {
            return redirect()->route('profile')->with('error', 'Aucune image sélectionnée.');
        }
    }
    public function DeleteProfileImage(Request $request)
    {
        if (!$request->isMethod('post')) {
            return redirect()->route('profile')->with('error', 'Accès refusé.');
        }
        $user = Auth::user();
        if ($user->image_profile) {
            // Supprimer l'image du stockage
            $imagePath = str_replace('/storage/', '', $user->image_profile);
            Storage::disk('public')->delete($imagePath);
            // Mettre à jour le champ image_profile
            $user->image_profile = null;
            $user->save();
            return redirect()->route('profile')->with('success', 'Image de profil supprimée avec succès.');
        } else {
            return redirect()->route('profile')->with('error', 'Aucune image de profil à supprimer.');
        }
    }
    public function UpdateProfileInformation(Request $request)
    {
        if (!$request->isMethod('put')) {
            return redirect()->route('profile')->with('error', 'Accès refusé.');
        }
        $user = Auth::user();
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        // Si le mot de passe est fourni, le mettre à jour
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        return redirect()->route('profile')->with('success', 'Informations du profil mises à jour avec succès.');
    }
}
