<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Ville;
use App\Models\Objet;

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
}
