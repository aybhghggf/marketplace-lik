<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObjectRequest;
use App\Models\Objet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObjectController extends Controller
{

public function StoreObject(Request $request, ObjectRequest $objectRequest)
{
    // Validation des données
    $objectRequest->validated();

    // Récupération des données du formulaire
    $status = $request->input('status'); // si tu veux utiliser le statut
    $city = $request->input('city');
    $title = $request->input('title');
    $description = $request->input('description');
    $price = $request->input('price');
    $categoryId = $request->input('categorie_id'); // tu dois valider que c’est un ID valide
    $userId = Auth::id();

    // Upload de l’image
    if ($request->hasFile('main_image')) {
        $imagePath = $request->file('main_image')->store('object_images', 'public');
    } else {
        $imagePath = null; // au cas où l'image est facultative
    }

    // Création de l'objet
    Objet::create([
        'title'       => $title,
        'description' => $description,
        'price'       => $price,
        'categorie_id' => $categoryId, 
        'main_image'  => $imagePath,    
        'user_id'     => $userId,
        'city'        => $city,
        'status'      => $status, 
    ]);

    // Redirection avec message
    return redirect()->route('home')->with('success', 'Votre annonce a été créée avec succès.');
}

}
