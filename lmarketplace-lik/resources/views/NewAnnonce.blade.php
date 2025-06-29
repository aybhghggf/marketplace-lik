@extends('layouts.basic')

@section('title')
Nouvelle Annonce - LmarketDyalek
@endsection

@section('NewAnnonce')
<main class="container mx-auto px-4 py-8 mt-10">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
        <!-- Form Header -->
        <div class="bg-gradient-to-r from-primary to-secondary p-6 text-white">
            <h1 class="text-2xl font-bold flex items-center">
                <i class="ri-add-circle-line mr-2"></i>
                Ajouter une nouvelle annonce
            </h1>
            <p class="mt-1 opacity-90">Remplissez les détails de votre annonce</p>
        </div>

        <!-- Form -->
        <form class="p-6 space-y-6" action="{{ route('object.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Titre -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre de l'annonce *</label>
                <input type="text" id="title" name="title" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    placeholder="Ex: iPhone 13 Pro Max 256GB neuf">
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description *</label>
                <textarea id="description" name="description" rows="5" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    placeholder="Décrivez votre produit en détail..."></textarea>
            </div>

            <!-- Prix et Statut -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Prix -->
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Prix (MAD) *</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500">MAD</span>
                        </div>
                        <input type="number" id="price" name="price" step="0.01" min="0" required
                            class="w-full pl-16 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition"
                            placeholder="0.00">
                    </div>
                </div>

                <!-- Statut -->
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Statut *</label>
                    <select id="status" name="status" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition">
                        <option value="" disabled selected>Sélectionnez un statut</option>
                        <option value="available">Disponible</option>
                        <option value="pending">En attente</option>
                        <option value="sold">Vendu</option>
                        <option value="deleted">Supprimé</option>
                    </select>
                </div>
            </div>

            <!-- Image principale -->
            <div>
                <label for="main_image" class="block text-sm font-medium text-gray-700 mb-1">Image principale *</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg">
                    <div class="space-y-1 text-center">
                        <div class="flex text-sm text-gray-600 justify-center">
                            <label for="main_image"
                                class="relative cursor-pointer bg-white rounded-md font-medium text-primary hover:text-primary-dark focus-within:outline-none">
                                <span>Télécharger une image</span>
                                <input id="main_image" name="main_image" type="file" class="sr-only" accept="image/*" required>
                            </label>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, JPEG jusqu'à 5MB</p>
                    </div>
                </div>
            </div>

            <!-- Ville et Catégorie -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Ville -->
                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Ville *</label>
                    <input type="text" id="city" name="city" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition"
                        placeholder="Ex: Casablanca">
                </div>

                <!-- Catégorie -->
                <div>
                    <label for="categorie_id" class="block text-sm font-medium text-gray-700 mb-1">Catégorie *</label>
                    <select id="categorie_id" name="categorie_id" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition">
                        <option value="" disabled selected>Sélectionnez une catégorie</option>
                        @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-primary to-secondary text-white py-3 px-4 rounded-lg font-bold hover:opacity-90 transition flex items-center justify-center">
                    <i class="ri-check-line mr-2"></i>
                    Ajouter l'annonce
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
