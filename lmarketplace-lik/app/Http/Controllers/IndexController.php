<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Ville;

class IndexController extends Controller
{
    public function ShowHome(Request $request)
    {
        $categories = Categorie::paginate(6);
        $Villes = Ville::paginate();

        return view('Home', compact('categories', 'Villes'));
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
        return view('NewAnnonce');
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
