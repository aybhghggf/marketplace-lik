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
        if ($objet && $request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('object_images', 'public');

                Image::create([
                    'product_id' => $objet->product_id,
                    'image_url'  => $path,
                ]);
            }
        }

        return redirect()->route('home')->with('success', 'Votre annonce a été créée avec succès.');
    }

    public function ShowObject($id)
    {
        $id = $id;
        if (!is_numeric($id)) {
            return redirect()->route('home')->with('error', 'L\'ID de l\'objet doit être un nombre.');
        } else {
            $id = intval($id);
        }
        $seller = Objet::findOrFail($id)->user;
        $images = Image::where('product_id', $id)->get();
        $object = Objet::findOrFail($id);
        $objects = Objet::where('categorie_id', $object->categorie_id)->where('product_id', '!=', $id)->get();
        return view('Object-detaille', compact('object', 'images', 'seller', 'id', 'objects'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Objet::where('title', 'like', '%' . $query . '%')
            ->orWhere('city', 'like', '%' . $query . '%')
            ->limit(10)
            ->get();

        return response()->json($results);
    }
    public function UpdateObject(Request $request, $id)
    {
        $new_title= $request->input('title');
        $new_description = $request->input('description');
        $new_price = $request->input('price');
        $new_category = $request->input('category');
        $new_phone = $request->input('phone');
        $new_city = $request->input('city');
        $new_main_photo = $request->file('new_photo');
         
        $object = Objet::findOrFail($id);
        $object->title = $new_title;
        $object->description = $new_description;
        $object->price = $new_price;
        $object->categorie_id = $new_category;
        $object->phone = $new_phone;
        $object->city = $new_city;
        if ($new_main_photo) {
            $imagePath = $new_main_photo->store('object_images', 'public');
            $object->main_image = $imagePath;
        }
        $object->save();


        return redirect()->route('user.posts',$id)->with('success', 'Objet mis à jour avec succès.');
    }
    public function DeleteObject($id)
    {
        $object = Objet::findOrFail($id);
        $object->delete();

        return redirect()->route('user.posts')->with('success', 'Objet supprimé avec succès.');
    }
}
