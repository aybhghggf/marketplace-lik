@extends('layouts.basic')

@section('title')
Détails de l'annonce - LmarketDyalek
@endsection

@section('Detaille')
<section class="min-h-screen" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);">
    <div class="container mx-auto px-4 py-8">
        <!-- Bouton Retour -->
        <div class="mb-8">
            <a href="#" class="back-link">
                <i class="ri-arrow-left-line mr-2"></i>
                Retour aux annonces
            </a>
        </div>

        <!-- Contenu Principal -->
        <div class="card-luxury rounded-2xl overflow-hidden mb-12">
            <div class="lg:flex">
                <!-- Galerie d'images -->
                <div class="lg:w-1/2">
                    <!-- Image principale -->
                    <div class="h-96 lg:h-[500px] image-overlay">
                        <img src="{{ asset('storage/'. $object->main_image) }}" 
                             alt="Image principale" 
                             class="w-full h-full object-cover transition-transform duration-700 hover:scale-105" 
                             id="mainImage">
                    </div>
                    <!-- Miniatures -->
                     @if ($images)
                       @foreach ($images as $image)
                       <div class="grid grid-cols-4 gap-3 p-6 bg-gray-50">
                        <div class="thumbnail-container active">
                            <img src="{{ asset('storage/'. $image->image_url) }}" alt="Image de l'objet">
                        </div>
                        
                    </div>

                       @endforeach
                   @endif
                    
                </div>

                <!-- Détails du produit -->
                <div class="lg:w-1/2 p-8">
                    <!-- En-tête -->
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <span class="status-badge">
                                <i class="ri-check-line mr-1"></i>
                                Disponible
                            </span>
                            <h1 class="text-3xl font-bold text-black mt-4 leading-tight">
                                {{ $object->title }}
                            </h1>
                        </div>
                        <div class="text-right">
                            <span class="text-4xl font-bold price-tag">{{ $object->price }} </span>
                            <p class="text-sm text-gray-500 mt-1">Prix négociable</p>
                        </div>
                    </div>

                    <!-- Localisation et date -->
                    <div class="flex flex-wrap items-center gap-6 text-gray-600 mb-8 p-4 bg-gray-50 rounded-lg">
                        <span class="flex items-center">
                            <div class="feature-icon mr-3">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-black">{{ $object->city }} </p>
                            </div>
                        </span>
                        <span class="flex items-center">
                            <div class="feature-icon mr-3">
                                <i class="ri-time-line"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-black">Publié</p>
                                <p class="text-sm">Il y a 2 jours</p>
                            </div>
                        </span>
                    </div>

                    <!-- Description -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-black section-title">Description</h2>
                        <p class="text-gray-700 leading-relaxed">
                            {{ $object->description }}
                        </p>
                    </div>
                    <!-- Caractéristiques -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-black section-title">Caractéristiques</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                <div class="feature-icon mr-3">
                                    <i class="ri-user-line"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-black">Vendeur</p>
                                    <p class="text-sm text-gray-600">{{ $seller->nom.' '.$seller->prenom }} </p>
                                </div>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                <div class="feature-icon mr-3">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-black">Téléphone</p>
                                    <p class="text-sm text-gray-600">{{ $seller->phone }} </p>
                                </div>
                            </div>
                            
                            <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                <div class="feature-icon mr-3">
                                    <i class="ri-calendar-line"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-black">Publiée le</p>
                                    <p class="text-sm text-gray-600">{{ $object->created_at }} </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="btn-gold py-4 px-8 rounded-xl font-semibold text-lg flex items-center justify-center hover-scale">
                            <i class="ri-whatsapp-line mr-3 text-xl"></i>
                            Contacter le vendeur
                        </button>
                        <button class="btn-outline-gold py-4 px-8 rounded-xl font-semibold text-lg flex items-center justify-center hover-scale">
                            <i class="ri-heart-line mr-3 text-xl"></i>
                            Ajouter aux favoris
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Annonces similaires -->
<div class="mt-16">
    <h2 class="text-3xl font-bold text-black section-title mb-8">Annonces similaires</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($objects as $item)
            <div class="similar-card">
                <a href="" class="block">
                    <div class="h-48 overflow-hidden image-overlay">
                        <img src="{{ asset('storage/' . $item->main_image) }}" 
                             alt="{{ $item->title }}" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-black mb-2 text-lg hover:text-gold transition-colors">
                            {{ $item->title }}
                        </h3>
                        <p class="text-2xl font-bold text-gold mb-3">
                            {{ number_format($item->price, 0, ',', ' ') }} MAD
                        </p>
                        <p class="text-sm text-gray-600 flex items-center">
                            <i class="ri-map-pin-line mr-2 text-gold"></i>
                            {{ ucfirst($item->city) }}
                        </p>
                        <p class="text-xs text-gray-500 mt-2">
                            <i class="ri-time-line mr-1"></i>
                            {{ $item->created_at->diffForHumans() }}
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
        @if (!$objects->count())
<div class="col-span-4 py-12 text-center">
    <div class="max-w-md mx-auto">
        <!-- Illustration -->
        <div class="w-24 h-24 mx-auto mb-4 flex items-center justify-center rounded-full bg-gray-100 text-gray-400">
            <i class="ri-search-eye-line text-3xl"></i>
        </div>
        
        <!-- Message -->
        <h3 class="text-lg font-medium text-gray-600 mb-2">Aucune annonce similaire trouvée</h3>
        <p class="text-gray-400 mb-6">Nous n'avons pas trouvé d'annonces similaires pour le moment.</p>
        
        <!-- Call to action -->
        <a href="{{ route('new_announcement')}}" 
           class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-dark transition-colors">
            <i class="ri-add-line mr-2"></i>
            Publier une annonce
        </a>
    </div>
</div>
            
        @endif
    </div>
</div>

    </div>
</section>
<script>
// Gestion des miniatures d'images
document.addEventListener('DOMContentLoaded', function() {
    const thumbnails = document.querySelectorAll('.thumbnail-container');
    const mainImage = document.getElementById('mainImage');
    
    const images = [
        'https://via.placeholder.com/600x500/D4AF37/FFFFFF?text=Image+Principale',
        'https://via.placeholder.com/600x500/B8941F/FFFFFF?text=Image+2',
        'https://via.placeholder.com/600x500/F4E4A6/1A1A1A?text=Image+3',
        'https://via.placeholder.com/600x500/D4AF37/FFFFFF?text=Image+4'
    ];
    
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', function() {
            // Retirer la classe active de tous les thumbnails
            thumbnails.forEach(t => t.classList.remove('active'));
            // Ajouter la classe active au thumbnail cliqué
            this.classList.add('active');
            // Changer l'image principale
            mainImage.src = images[index];
        });
    });
});
</script>
@endsection