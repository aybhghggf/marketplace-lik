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

  $categories = Categorie::paginate(6);
    $Villes = Ville::paginate();

    if ($request->ajax()) {
        // تجربة باش نتأكد
        return response()->json(['ajax' => true, 'html' => view('components.categorie-section', compact('categories'))->render()]);
    }

        return view('home', compact('categories', 'Villes'));
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
