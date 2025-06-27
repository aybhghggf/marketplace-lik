<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Ville;

class IndexController extends Controller
{
    public function ShowHome()
    {
        $Villes= Ville::paginate();
        return view('Home' , compact('Villes'));
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
    public function ShowProfile()
    {
        return view('Profile');
    }
}
