<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\notification;
use App\Models\Ville;
use App\Models\Objet;
use App\Models\User;

class IndexController extends Controller
{
    public function ShowHome(Request $request)
    {
        $LastAnnoces = Objet::orderBy('created_at', 'desc')->paginate(4);
        $categories = Categorie::paginate(6);
        $Villes = Ville::paginate();

        return view('Home', compact('categories', 'Villes', 'LastAnnoces'));
    }

    public function HowItWorks()
    {
        return view('HowItWork');
    }
    public function ShowAbout()
    {
        return view('About');
    }
    public function ShowNewAnnouncement()
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Veuillez vous connecter pour créer une annonce.');
        }
        $categories = Categorie::all();
        return view('NewAnnonce', compact('categories'));
    }
    public function PolitiqueConfidentialite()
    {
        return view('PolitiqueConfidentialité');
    }
    public function ShowConditions()
    {
        return view('Conditions');
    }
    public function ShowAnnoncesByVille($nomdeville)
    {
        $Villes = Ville::all();
        $categories = Categorie::all();
        $annonces = Objet::all()->where( 'city', $nomdeville);

        return view('VilleAnnonces', compact('Villes', 'categories', 'annonces'));
    }
        public function ShowPosts()
    {
        $posts= Objet::all();
        return view('posts', compact('posts'));
    
    }
    public function EditObject($id)
    {
        $categories = Categorie::all();
        $object = Objet::findOrFail($id);
        return view('updateObj', compact('object' , 'categories'));
    }
    public function storeNotification(Request $request)
    {
        $email = $request->input('email');

        notification::create([
            'email' => $email,
        ]);
        return redirect()->back()->with('success', 'Vous avez été inscrit avec succès à la newsletter.');
    }
}
