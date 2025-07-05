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
            
            @if($errors->any())
                <div class="mt-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 rounded">
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
        <form class="bg-white p-6 rounded-lg shadow-sm border border-gray-100" action="{{ route('object.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf

            <!-- Informations principales -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="ri-information-line mr-2 text-primary"></i>
                    Informations principales
                </h2>

                <!-- Titre -->
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Titre *</label>
                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        required
                        placeholder="Ex: Smartphone Samsung Galaxy S23"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition
                            {{ $errors->has('title') ? 'border-red-500' : 'border-gray-200' }}">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description *</label>
                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        required
                        placeholder="Décrivez précisément votre article..."
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition
                            {{ $errors->has('description') ? 'border-red-500' : 'border-gray-200' }}">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-400 mt-1">Minimum 30 caractères</p>
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
                        <label for="price" class="block text-gray-700 font-medium mb-2">Prix (DHS) *</label>
                        <div class="relative">
                            <input
                                type="number"
                                id="price"
                                name="price"
                                value="{{ old('price') }}"
                                min="0"
                                step="100"
                                required
                                placeholder="5000"
                                class="w-full pl-12 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition
                                    {{ $errors->has('price') ? 'border-red-500' : 'border-gray-200' }}">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 pointer-events-none">DHS</span>
                        </div>
                        @error('price')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Statut -->
                    <div>
                        <label for="status" class="block text-gray-700 font-medium mb-2">Disponibilité *</label>
                        <select
                            id="status"
                            name="status"
                            required
                            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition
                                {{ $errors->has('status') ? 'border-red-500' : 'border-gray-200' }}">
                            <option value="" disabled {{ old('status') ? '' : 'selected' }}>Choisir un statut</option>
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
                        <select
                            id="categorie_id"
                            name="categorie_id"
                            required
                            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition
                                {{ $errors->has('categorie_id') ? 'border-red-500' : 'border-gray-200' }}">
                            <option value="" disabled {{ old('categorie_id') ? '' : 'selected' }}>Choisir une catégorie</option>
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}" {{ old('categorie_id') == $categorie->id ? 'selected' : '' }}>
                                    {{ $categorie->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('categorie_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Téléphone -->
                    <div>
                        <label for="phone_number" class="block text-gray-700 font-medium mb-2">Téléphone *</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-500 select-none">+212</div>
                            <input
                                type="tel"
                                id="phone_number"
                                name="phone_number"
                                value="{{ old('phone_number') }}"
                                pattern="[0-9]{9}"
                                required
                                placeholder="612 34 56 78"
                                title="Numéro marocain sans l'indicatif, 9 chiffres"
                                class="w-full pl-16 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition
                                    {{ $errors->has('phone_number') ? 'border-red-500' : 'border-gray-200' }}">
                        </div>
                        @error('phone_number')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="text-xs text-gray-400 mt-1">Format : 612 34 56 78</p>
                    </div>
                </div>
            </div>

            <!-- Localisation et photos -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="ri-map-pin-line mr-2 text-primary"></i>
                    Localisation & Photos
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Ville -->
                    <div>
                        <label for="city" class="block text-gray-700 font-medium mb-2">Ville *</label>
                        <input
                            type="text"
                            id="city"
                            name="city"
                            value="{{ old('city') }}"
                            required
                            placeholder="Ex: Alger, Oran..."
                            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition
                                {{ $errors->has('city') ? 'border-red-500' : 'border-gray-200' }}">
                        @error('city')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Photo principale -->
                    <div>
                        <label for="main_image" class="block text-gray-700 font-medium mb-2">Photo principale *</label>
                        <div
                            class="border-2 border-dashed rounded-lg p-4 text-center cursor-pointer hover:border-primary transition
                            {{ $errors->has('main_image') ? 'border-red-500' : 'border-gray-200' }}">
                            <input
                                type="file"
                                id="main_image"
                                name="main_image"
                                accept="image/*"
                                required
                                class="hidden"
                            >
                            <label for="main_image" class="flex flex-col items-center justify-center cursor-pointer">
                                <i class="ri-camera-line text-3xl text-gray-400 mb-2"></i>
                                <span class="text-sm text-gray-500">Cliquez pour uploader</span>
                            </label>
                        </div>
                        @error('main_image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Photos supplémentaires -->
                <div class="mt-6" x-data="{ files: [] }">
                    <label for="images" class="block text-gray-700 font-medium mb-2">
                        Photos supplémentaires
                        <span class="text-sm font-normal text-gray-500">(Optionnel)</span>
                    </label>

                    <div
                        class="border-2 border-dashed rounded-lg p-6 transition-colors duration-200 cursor-pointer
                        {{ $errors->has('images.*') ? 'border-red-500 bg-red-50' : 'border-gray-200 hover:border-primary' }}"
                        @dragover.prevent="$el.classList.add('border-primary', 'bg-blue-50')"
                        @dragleave.prevent="$el.classList.remove('border-primary', 'bg-blue-50')"
                        @drop.prevent="
                            $el.classList.remove('border-primary', 'bg-blue-50');
                            files = Array.from($event.dataTransfer.files);
                            document.getElementById('images').files = $event.dataTransfer.files;
                        "
                    >
                        <div class="text-center">
                            <i class="ri-image-add-line text-3xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600 mb-3">Glissez-déposez vos images ici</p>
                            <label for="images" class="inline-flex items-center bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition cursor-pointer">
                                <i class="ri-folder-open-line mr-2"></i> Parcourir les fichiers
                            </label>
                            <input
                                type="file"
                                id="images"
                                name="images[]"
                                multiple
                                accept="image/*"
                                class="hidden"
                                x-on:change="files = Array.from($event.target.files)"
                            >
                            <p class="text-xs text-gray-400 mt-3">Formats acceptés : JPG, PNG (max 5MB par image)</p>
                        </div>

                        <template x-if="files.length > 0">
                            <div class="mt-4">
                                <h4 class="text-sm font-medium text-gray-700 mb-2">Fichiers sélectionnés :</h4>
                                <ul class="space-y-2 max-h-40 overflow-y-auto">
                                    <template x-for="(file, index) in files" :key="index">
                                        <li class="flex items-center justify-between bg-gray-50 p-2 rounded">
                                            <div class="flex items-center truncate">
                                                <i class="ri-image-line text-gray-400 mr-2"></i>
                                                <span x-text="file.name" class="truncate text-sm"></span>
                                            </div>
                                            <span x-text="(file.size/1024/1024).toFixed(2) + ' MB'" class="text-xs text-gray-500"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </template>
                    </div>

                    @error('images.*')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <i class="ri-error-warning-line mr-1"></i> {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <!-- Bouton de soumission -->
            <div>
                <button
                    type="submit"
                    class="w-full bg-primary text-white py-3 px-4 rounded-lg font-medium hover:bg-primary-dark transition flex items-center justify-center"
                >
                    <i class="ri-check-line mr-2"></i> Publier l'annonce
                </button>
            </div>
        </form>
    </div>
</main>

<!-- Alpine.js pour la gestion des fichiers -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection
