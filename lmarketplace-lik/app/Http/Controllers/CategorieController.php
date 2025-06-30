<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Objet;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function ShowCategorys()
    {
        $categories= Categorie::all();
        return view('Categories' , compact('categories'));
    }
    public function ShowCategory($id)
    {
        $annonces = Objet::where('categorie_id', $id)->paginate(10);
        $categorie = Categorie::findOrFail($id);
        return view('Categorie', compact('categorie' , 'annonces'));
    }
}
