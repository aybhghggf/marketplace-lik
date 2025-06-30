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
    $objectRequest->validated();
    $phone = $request->input('phone_number');
    $status = $request->input('status');
    $city = $request->input('city');
    $title = $request->input('title');
    $description = $request->input('description');
    $price = $request->input('price');
    $categoryId = $request->input('categorie_id');
    $userId = Auth::id();

    if ($request->hasFile('main_image')) {
        $imagePath = $request->file('main_image')->store('object_images', 'public');
    } else {
        $imagePath = null;
    }

    Objet::create([
        'title'       => $title,
        'description' => $description,
        'price'       => $price,
        'categorie_id' => $categoryId,
        'main_image'  => $imagePath,
        'user_id'     => $userId,
        'city'        => $city,
        'status'      => $status,
        'phone'       => $phone,
    ]);

    return redirect()->route('home')->with('success', 'Votre annonce a été créée avec succès.');
}

}
