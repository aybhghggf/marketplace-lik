@extends('layouts.basic')

@section('title')
Nouvelle Annonce - LmarketDyalek
@endsection

@section('NewAnnonce')
<main class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <!-- En-tête du formulaire -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                <i class="ri-add-circle-line text-primary align-middle mr-2"></i>
                Créer votre annonce
            </h1>
            <p class="text-gray-600">Partagez votre article avec la communauté</p>
            
            <!-- Message d'erreur général -->
            @if($errors->any())
                <div class="mt-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700">
                    <p class="font-medium">Veuillez corriger les erreurs suivantes :</p>
                    <ul class="list-disc list-inside mt-2 text-sm">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <!-- Formulaire -->
        <form class="bg-white p-6 rounded-lg shadow-sm border border-gray-100" action="{{ route('object.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Section 1 : Informations de base -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="ri-information-line mr-2 text-primary"></i>
                    Informations principales
                </h2>
                
                <!-- Titre -->
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Titre *</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
                        class="w-full px-4 py-3 border {{ $errors->has('title') ? 'border-red-500' : 'border-gray-200' }} rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition"
                        placeholder="Ex: Smartphone Samsung Galaxy S23">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description *</label>
                    <textarea id="description" name="description" rows="5" required
                        class="w-full px-4 py-3 border {{ $errors->has('description') ? 'border-red-500' : 'border-gray-200' }} rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition"
                        placeholder="Décrivez précisément votre article...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-400 mt-1">Minimum 30 caractères</p>
                </div>
            </div>

            <!-- Section 2 : Détails techniques -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="ri-file-list-line mr-2 text-primary"></i>
                    Détails techniques
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Prix -->
                    <div>
                        <label for="price" class="block text-gray-700 font-medium mb-2">Prix (DHS) *</label>
                        <div class="relative">
                            <input type="number" id="price" name="price" value="{{ old('price') }}" step="100" min="0" required
                                class="w-full pl-12 pr-4 py-3 border {{ $errors->has('price') ? 'border-red-500' : 'border-gray-200' }} rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition"
                                placeholder="5000">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">DHS</span>
                        </div>
                        @error('price')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Statut -->
                    <div>
                        <label for="status" class="block text-gray-700 font-medium mb-2">Disponibilité *</label>
                        <select id="status" name="status" required
                            class="w-full px-4 py-3 border {{ $errors->has('status') ? 'border-red-500' : 'border-gray-200' }} rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition">
                            <option value="" disabled selected>Choisir un statut</option>
                            <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Disponible</option>
                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Réservé</option>
                            <option value="sold" {{ old('status') == 'sold' ? 'selected' : '' }}>Vendu</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Catégorie -->
                    <div>
                        <label for="categorie_id" class="block text-gray-700 font-medium mb-2">Catégorie *</label>
                        <select id="categorie_id" name="categorie_id" required
                            class="w-full px-4 py-3 border {{ $errors->has('categorie_id') ? 'border-red-500' : 'border-gray-200' }} rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition">
                            <option value="" disabled selected>Choisir une catégorie</option>
                            @foreach($categories as $categorie)
                            <option value="{{ $categorie->id }}" {{ old('categorie_id') == $categorie->id ? 'selected' : '' }}>{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                        @error('categorie_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Numéro de téléphone -->
                    <div>
                        <label for="phone_number" class="block text-gray-700 font-medium mb-2">Téléphone *</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500">+212</span>
                            </div>
                            <input type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required
                                class="w-full pl-16 pr-4 py-3 border {{ $errors->has('phone_number') ? 'border-red-500' : 'border-gray-200' }} rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition"
                                placeholder="612 34 56 78"
                                pattern="[0-9]{9}"
                                title="Numéro algérien (9 chiffres sans le 0)">
                        </div>
                        @error('phone_number')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="text-xs text-gray-400 mt-1">Format: 612 34 56 78</p>
                    </div>
                </div>
            </div>

            <!-- Section 3 : Localisation et photos -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="ri-map-pin-line mr-2 text-primary"></i>
                    Localisation & Photos
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Ville -->
                    <div>
                        <label for="city" class="block text-gray-700 font-medium mb-2">Ville *</label>
                        <input type="text" id="city" name="city" value="{{ old('city') }}" required
                            class="w-full px-4 py-3 border {{ $errors->has('city') ? 'border-red-500' : 'border-gray-200' }} rounded-lg focus:ring-1 focus:ring-primary focus:border-primary transition"
                            placeholder="Ex: Alger, Oran...">
                        @error('city')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image principale -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Photo principale *</label>
                        <div class="border-2 {{ $errors->has('main_image') ? 'border-red-500' : 'border-gray-200' }} border-dashed rounded-lg p-4 text-center cursor-pointer hover:border-primary transition">
                            <input type="file" name="main_image" class="hidden" id="mainImageUpload" accept="image/*" required>
                            <label for="mainImageUpload" class="flex flex-col items-center justify-center h-full">
                                <i class="ri-camera-line text-3xl text-gray-400 mb-2"></i>
                                <span class="text-sm text-gray-500">Cliquez pour uploader</span>
                            </label>
                        </div>
                        @error('main_image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Galerie d'images supplémentaires -->
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Photos supplémentaires</label>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <template x-for="(_, index) in 4" :key="index">
                            <div class="border-2 border-dashed border-gray-200 rounded-lg h-32 flex items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                                <div class="text-center">
                                    <i class="ri-add-line text-gray-400"></i>
                                </div>
                            </div>
                        </template>
                    </div>
                    <p class="text-xs text-gray-400 mt-2">Maximum 5 photos supplémentaires (optionnel)</p>
                </div>
            </div>

            <!-- Bouton de soumission -->
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

<!-- Script pour le comportement dynamique -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection