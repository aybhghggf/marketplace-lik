<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObjectRequest;
use App\Models\Image;
use App\Models\Objet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObjectController extends Controller
{
public function StoreObject(Request $request, ObjectRequest $objectRequestValidation)
{
    $objectRequestValidation->validated();

    $phone = $request->input('phone_number');
    $status = $request->input('status');
    $city = strtolower($request->input('city'));
    $title = $request->input('title');
    $description = $request->input('description');
    $price = $request->input('price');
    $categoryId = $request->input('categorie_id');
    $userId = Auth::id();

    $imagePath = $request->hasFile('main_image')
        ? $request->file('main_image')->store('object_images', 'public')
        : null;

    $objet = Objet::create([
        'title'        => $title,
        'description'  => $description,
        'price'        => $price,
        'categorie_id' => $categoryId,
        'main_image'   => $imagePath,
        'user_id'      => $userId,
        'city'         => $city,
        'status'       => $status,
        'phone'        => $phone,
    ]);

    // ✅ Vérifier que l'objet a bien été créé
    if ($objet && $request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('object_images', 'public');

           dd(Image::create([
                'product_id' => $objet->id,
                'image_url'  => $path,
            ]));
        }
    }

    return redirect()->route('home')->with('success', 'Votre annonce a été créée avec succès.');
}

    public function ShowObject($id)
    {
        $object = Objet::findOrFail($id);
        return view('Object-detaille', compact('object'));
    }
}
