<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
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
        $categorie = Categorie::findOrFail($id);
        return view('Categorie', compact('categorie'));
    }
}
