@extends('layouts.basic')

@section('title')
Détails de l'annonce - LmarketDyalek
@endsection

@section('Detaille')
<style>
    :root {
        --gold: #D4AF37;
        --gold-light: #F4E4A6;
        --gold-dark: #B8941F;
        --black: #1A1A1A;
        --white: #FFFFFF;
        --gray-light: #F8F9FA;
        --gray-medium: #6C757D;
        --shadow: rgba(0, 0, 0, 0.1);
    }

    .gradient-gold {
        background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    }

    .gradient-gold-light {
        background: linear-gradient(135deg, var(--gold-light), var(--gold));
    }

    .text-gold { color: var(--gold); }
    .text-gold-dark { color: var(--gold-dark); }
    .bg-gold { background-color: var(--gold); }
    .bg-gold-light { background-color: var(--gold-light); }
    .border-gold { border-color: var(--gold); }
    
    .hover-scale:hover {
        transform: scale(1.02);
    }

    .image-overlay {
        position: relative;
        overflow: hidden;
    }

    .image-overlay::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent 60%, rgba(212, 175, 55, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    .image-overlay:hover::before {
        opacity: 1;
    }

    .card-luxury {
        background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        border: 1px solid rgba(212, 175, 55, 0.1);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .btn-gold {
        background: linear-gradient(135deg, var(--gold), var(--gold-dark));
        color: white;
        border: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
    }

    .btn-gold:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(212, 175, 55, 0.4);
        color: white;
    }

    .btn-outline-gold {
        background: transparent;
        color: var(--gold);
        border: 2px solid var(--gold);
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background: var(--gold);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
    }

    .status-badge {
        background: linear-gradient(135deg, #10B981, #059669);
        color: white;
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 2px 8px rgba(16, 185, 129, 0.3);
    }

    .price-tag {
        background: linear-gradient(135deg, var(--gold), var(--gold-dark));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
        text-shadow: 0 2px 4px rgba(212, 175, 55, 0.2);
    }

    .feature-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--gold-light), var(--gold));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--black);
        font-size: 18px;
    }

    .section-title {
        position: relative;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    }

    .thumbnail-container {
        border: 3px solid transparent;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .thumbnail-container:hover,
    .thumbnail-container.active {
        border-color: var(--gold);
        box-shadow: 0 4px 12px rgba(212, 175, 55, 0.3);
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        color: var(--black);
        text-decoration: none;
        font-weight: 500;
        padding: 8px 16px;
        border-radius: 25px;
        transition: all 0.3s ease;
        background: rgba(212, 175, 55, 0.1);
    }

    .back-link:hover {
        background: var(--gold);
        color: white;
        text-decoration: none;
        transform: translateX(-5px);
    }

    .similar-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid rgba(212, 175, 55, 0.1);
    }

    .similar-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        border-color: var(--gold);
    }
</style>

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
                        <img src="https://via.placeholder.com/600x500/D4AF37/FFFFFF?text=Image+Principale" 
                             alt="Image principale" 
                             class="w-full h-full object-cover transition-transform duration-700 hover:scale-105" 
                             id="mainImage">
                    </div>
                    
                    <!-- Miniatures -->
                    <div class="grid grid-cols-4 gap-3 p-6 bg-gray-50">
                        <div class="thumbnail-container active">
                            <img src="https://via.placeholder.com/150x100/D4AF37/FFFFFF?text=1" 
                                 alt="Miniature 1" 
                                 class="w-full h-20 object-cover">
                        </div>
                        <div class="thumbnail-container">
                            <img src="https://via.placeholder.com/150x100/B8941F/FFFFFF?text=2" 
                                 alt="Miniature 2" 
                                 class="w-full h-20 object-cover">
                        </div>
                        <div class="thumbnail-container">
                            <img src="https://via.placeholder.com/150x100/F4E4A6/1A1A1A?text=3" 
                                 alt="Miniature 3" 
                                 class="w-full h-20 object-cover">
                        </div>
                        <div class="thumbnail-container">
                            <img src="https://via.placeholder.com/150x100/D4AF37/FFFFFF?text=4" 
                                 alt="Miniature 4" 
                                 class="w-full h-20 object-cover">
                        </div>
                    </div>
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
                                Smartphone Samsung Galaxy S24 Ultra
                            </h1>
                        </div>
                        <div class="text-right">
                            <span class="text-4xl font-bold price-tag">85 000 DZD</span>
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
                                <p class="font-semibold text-black">Alger Centre</p>
                                <p class="text-sm">Alger, Algérie</p>
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
                            Smartphone Samsung Galaxy S24 Ultra en excellent état, utilisé seulement 3 mois. 
                            Écran Dynamic AMOLED 6.8", processeur Snapdragon 8 Gen 3, 256GB de stockage, 
                            12GB RAM. Livré avec tous les accessoires d'origine dans la boîte. 
                            Aucune rayure, protection écran appliquée depuis l'achat.
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
                                    <p class="text-sm text-gray-600">Ahmed Benali</p>
                                </div>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                <div class="feature-icon mr-3">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-black">Téléphone</p>
                                    <p class="text-sm text-gray-600">+213 55 12 34 56</p>
                                </div>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                <div class="feature-icon mr-3">
                                    <i class="ri-list-check"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-black">Catégorie</p>
                                    <p class="text-sm text-gray-600">Téléphones & Tablets</p>
                                </div>
                            </div>
                            <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                <div class="feature-icon mr-3">
                                    <i class="ri-calendar-line"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-black">Publiée le</p>
                                    <p class="text-sm text-gray-600">28/06/2025</p>
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
                <!-- Exemple d'annonce similaire 1 -->
                <div class="similar-card">
                    <a href="#" class="block">
                        <div class="h-48 overflow-hidden image-overlay">
                            <img src="https://via.placeholder.com/300x200/D4AF37/FFFFFF?text=iPhone+15" 
                                 alt="iPhone 15" 
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-black mb-2 text-lg hover:text-gold transition-colors">
                                iPhone 15 Pro Max 256GB
                            </h3>
                            <p class="text-2xl font-bold text-gold mb-3">120 000 DZD</p>
                            <p class="text-sm text-gray-600 flex items-center">
                                <i class="ri-map-pin-line mr-2 text-gold"></i>
                                Oran, Algérie
                            </p>
                            <p class="text-xs text-gray-500 mt-2">
                                <i class="ri-time-line mr-1"></i>
                                Il y a 1 jour
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Exemple d'annonce similaire 2 -->
                <div class="similar-card">
                    <a href="#" class="block">
                        <div class="h-48 overflow-hidden image-overlay">
                            <img src="https://via.placeholder.com/300x200/B8941F/FFFFFF?text=Xiaomi+14" 
                                 alt="Xiaomi 14" 
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-black mb-2 text-lg hover:text-gold transition-colors">
                                Xiaomi 14 Ultra 512GB
                            </h3>
                            <p class="text-2xl font-bold text-gold mb-3">95 000 DZD</p>
                            <p class="text-sm text-gray-600 flex items-center">
                                <i class="ri-map-pin-line mr-2 text-gold"></i>
                                Constantine
                            </p>
                            <p class="text-xs text-gray-500 mt-2">
                                <i class="ri-time-line mr-1"></i>
                                Il y a 3 jours
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Exemple d'annonce similaire 3 -->
                <div class="similar-card">
                    <a href="#" class="block">
                        <div class="h-48 overflow-hidden image-overlay">
                            <img src="https://via.placeholder.com/300x200/F4E4A6/1A1A1A?text=Google+Pixel" 
                                 alt="Google Pixel" 
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-black mb-2 text-lg hover:text-gold transition-colors">
                                Google Pixel 8 Pro
                            </h3>
                            <p class="text-2xl font-bold text-gold mb-3">78 000 DZD</p>
                            <p class="text-sm text-gray-600 flex items-center">
                                <i class="ri-map-pin-line mr-2 text-gold"></i>
                                Annaba
                            </p>
                            <p class="text-xs text-gray-500 mt-2">
                                <i class="ri-time-line mr-1"></i>
                                Il y a 5 jours
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Exemple d'annonce similaire 4 -->
                <div class="similar-card">
                    <a href="#" class="block">
                        <div class="h-48 overflow-hidden image-overlay">
                            <img src="https://via.placeholder.com/300x200/D4AF37/FFFFFF?text=OnePlus+12" 
                                 alt="OnePlus 12" 
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-black mb-2 text-lg hover:text-gold transition-colors">
                                OnePlus 12 16GB RAM
                            </h3>
                            <p class="text-2xl font-bold text-gold mb-3">89 000 DZD</p>
                            <p class="text-sm text-gray-600 flex items-center">
                                <i class="ri-map-pin-line mr-2 text-gold"></i>
                                Sétif
                            </p>
                            <p class="text-xs text-gray-500 mt-2">
                                <i class="ri-time-line mr-1"></i>
                                Il y a 1 semaine
                            </p>
                        </div>
                    </a>
                </div>
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