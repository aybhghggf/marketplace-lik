@extends('layouts.basic')

@section('title')
Nouvelle Annonce - LmarketDyalek
@endsection

@section('NewAnnonce')
<main class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <!-- Form Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                <i class="ri-add-circle-line text-primary align-middle mr-2"></i>
                Créer votre annonce
            </h1>
            <p class="text-gray-600">Partagez votre article avec la communauté</p>
        </div>

        <!-- Form -->
        <form class="bg-white p-6 rounded-lg shadow-sm border border-gray-100" action="{{ route('object.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Titre -->
            <div class="mb-6">
                <label for="title" class="block text-gray-700 font-medium mb-2">Titre *</label>
                <input type="text" id="title" name="title" required
                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition"
                    placeholder="Donnez un titre clair et précis">
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description *</label>
                <textarea id="description" name="description" rows="5" required
                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition"
                    placeholder="Décrivez l'article en détail (état, spécificités...)"></textarea>
            </div>

            <!-- Prix et Statut -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Prix -->
                <div>
                    <label for="price" class="block text-gray-700 font-medium mb-2">Prix *</label>
                    <div class="relative">
                        <input type="number" id="price" name="price" step="0.01" min="0" required
                            class="w-full pl-12 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition"
                            placeholder="Montant en Dirhams (DHS)">
                        <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">DHS</span>
                    </div>
                </div>

                <!-- Statut -->
                <div>
                    <label for="status" class="block text-gray-700 font-medium mb-2">Disponibilité *</label>
                    <select id="status" name="status" required
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition">
                        <option value="" disabled selected>Choisir un statut</option>
                        <option value="available">Disponible</option>
                    </select>
                </div>
            </div>

            <!-- Image principale -->
            <div class="mb-6">
                <label for="main_image" class="block text-gray-700 font-medium mb-2">Photo principale *</label>
                <div class="border-2 border-dashed border-gray-200 rounded-lg p-6 text-center">
                    <div class="flex flex-col items-center justify-center">
                        <i class="ri-image-add-line text-3xl text-gray-400 mb-2"></i>
                        <p class="text-sm text-gray-500 mb-2">Glissez-déposez ou cliquez pour uploader</p>
                        <label class="cursor-pointer bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition">
                            <span>Sélectionner une image</span>
                            <input id="main_image" name="main_image" type="file" class="hidden" accept="image/*" required>
                        </label>
                        <p class="text-xs text-gray-400 mt-2">Formats: JPG, PNG (max 5MB)</p>
                    </div>
                </div>
            </div>

            <!-- Ville et Catégorie -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Ville -->
                <div>
                    <label for="city" class="block text-gray-700 font-medium mb-2">Localisation *</label>
                    <input type="text" id="city" name="city" required
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition"
                        placeholder="Ville où se trouve l'article">
                </div>

                <!-- Catégorie -->
                <div>
                    <label for="categorie_id" class="block text-gray-700 font-medium mb-2">Catégorie *</label>
                    <select id="categorie_id" name="categorie_id" required
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition">
                        <option value="" disabled selected>Choisir une catégorie</option>
                        @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full bg-primary text-white py-3 px-4 rounded-lg font-medium hover:bg-primary-dark transition flex items-center justify-center">
                    <i class="ri-check-line mr-2"></i>
                    Publier l'annonce
                </button>
            </div>
        </form>
    </div>
</main>
@endsection