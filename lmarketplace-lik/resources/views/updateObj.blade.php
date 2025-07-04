@extends('layouts.basic')
@section('title')
Modifier votre annonce - Marketplace
@endsection

@section('UpdateObj')
<main class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                <i class="ri-edit-2-line text-primary align-middle mr-2"></i>
                Modifier votre annonce
            </h1>
            <p class="text-gray-600">Mettez à jour les informations de votre article</p>
        </div>

        <form class="bg-white p-6 rounded-lg shadow-sm border border-gray-100" method="POST" action="{{ route('object.update', $object->product_id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <!-- Informations principales -->
            <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <i class="ri-information-line mr-2 text-primary"></i>
                Informations principales
            </h2>

            <!-- Titre -->
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Titre *</label>
                <input type="text" name="title" class="w-full px-4 py-3 border border-gray-200 rounded-lg" value="{{ $object->title }}" >
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Description *</label>
                <textarea rows="5" name="description" class="w-full px-4 py-3 border border-gray-200 rounded-lg">{{ $object->description }} </textarea>
            </div>
            </div>

            <!-- Détails techniques -->
            <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <i class="ri-file-list-line mr-2 text-primary"></i>
                Détails techniques
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Prix -->
                <div>
                <label class="block text-gray-700 font-medium mb-2">Prix (DHS) *</label>
                <div class="relative">
                    <input type="number" name="price" class="w-full pl-12 pr-4 py-3 border border-gray-200 rounded-lg" value="{{ $object->price }}">
                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">DHS</span>
                </div>
                </div>

                <!-- Statut -->
                <div>
                <label class="block text-gray-700 font-medium mb-2">Disponibilité *</label>
                <select name="status" class="w-full px-4 py-3 border border-gray-200 rounded-lg">
                    <option value="available" selected>Disponible</option>
                    <option value="pending">Réservé</option>
                    <option value="sold">Vendu</option>
                </select>
                </div>

                <!-- Catégorie -->
                <div>
                <label class="block text-gray-700 font-medium mb-2">Catégorie *</label>
                <select name="category" class="w-full px-4 py-3 border border-gray-200 rounded-lg">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $object->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>)
                        
                    @endforeach
                </select>
                </div>

                <!-- Téléphone -->
                <div>
                <label class="block text-gray-700 font-medium mb-2">Téléphone *</label>
                <input type="text" name="phone" class="w-full pl-16 pr-4 py-3 border border-gray-200 rounded-lg" value="{{ $object->phone }}">
                </div>
            </div>
            </div>

            <!-- Ville et image -->
            <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <i class="ri-map-pin-line mr-2 text-primary"></i>
                Localisation & Photos
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Ville -->
                <div>
                <label class="block text-gray-700 font-medium mb-2">Ville *</label>
                <input type="text" name="city" class="w-full px-4 py-3 border border-gray-200 rounded-lg" value="{{ $object->city }}">
                </div>

                <!-- Photo principale -->
                <div>
                <label class="block text-gray-700 font-medium mb-2">Photo principale</label>
                <input type="file" name="new_photo" class="w-full px-4 py-3 border border-gray-200 rounded-lg">
                <p class="text-xs text-gray-400 mt-1">Laisser vide pour ne pas changer</p>
                </div>
            </div>
            </div>

            <!-- Bouton -->
            <div>
            <button type="submit" class="w-full bg-primary text-white py-3 px-4 rounded-lg font-medium hover:bg-primary-dark transition">
                <i class="ri-save-line mr-2"></i>
                Sauvegarder les modifications
            </button>
            </div>
        </form>
    </div>
</main>
@endsection
