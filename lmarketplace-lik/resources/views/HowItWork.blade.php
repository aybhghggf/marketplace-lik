@extends('layouts.basic')
@section('title' )
Comment ça marche - LmarketDyalek
@endsection
@section('How-It-Work')
<!-- How It Works Section -->
<section class="py-16 bg-gradient-to-b from-gray-50 to-white mt-8">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block bg-secondary bg-opacity-10 text-secondary px-4 py-1 rounded-full text-sm font-medium mb-3">
                Processus simple
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Comment ça marche</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Vendre ou acheter sur LmarketDyalek n'a jamais été aussi facile. Découvrez notre processus en 3 étapes.
            </p>
        </div>

        <!-- Steps Timeline -->
        <div class="relative">
            <!-- Timeline Line -->
            <div class="hidden md:block absolute left-1/2 top-0 h-full w-0.5 bg-secondary transform -translate-x-1/2"></div>

            <!-- Step 1 -->
            <div class="relative mb-16 md:mb-24 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0 order-1 md:order-1 text-center md:text-right">
                    <h3 class="text-2xl font-bold mb-3">1. Créez votre annonce</h3>
                    <p class="text-gray-600 mb-4">
                        Prenez des photos de qualité, décrivez votre article avec précision et fixez un prix juste. 
                        Notre formulaire intuitif vous guide pas à pas.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-secondary mt-1 mr-2"></i>
                            <span>Publication gratuite en 2 minutes</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-secondary mt-1 mr-2"></i>
                            <span>Jusqu'à 8 photos par annonce</span>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2 order-2 md:order-2">
                    <div class="relative">
                        <div class="bg-white p-1 rounded-xl shadow-lg">
                            <img src="{{ asset('images/product-picture.jpg') }}" 
                                 alt="Create listing" 
                                 class="w-full h-auto rounded-lg">
                        </div>
                        <div class="absolute -top-4 -left-4 md:-left-6 bg-secondary text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold shadow-lg">
                            1
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative mb-16 md:mb-24 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pl-12 order-2 md:order-1">
                    <div class="relative">
                        <div class="bg-white p-1 rounded-xl shadow-lg">
                            <img src="{{ asset('images/buyer-seller.jpg') }}" 
                                 alt="Connect with buyers" 
                                 class="w-full h-auto rounded-lg">
                        </div>
                        <div class="absolute -top-4 -right-4 md:-right-6 bg-secondary text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold shadow-lg">
                            2
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 order-1 md:order-2 mb-8 md:mb-0 text-center md:text-left">
                    <h3 class="text-2xl font-bold mb-3">2. Connectez-vous avec les acheteurs</h3>
                    <p class="text-gray-600 mb-4">
                        Répondez aux questions via notre messagerie sécurisée. Négociez le prix et organisez la transaction en toute confiance.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-secondary mt-1 mr-2"></i>
                            <span>Messagerie intégrée et sécurisée</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-secondary mt-1 mr-2"></i>
                            <span>Système de notation des utilisateurs</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0 order-1 md:order-1 text-center md:text-right">
                    <h3 class="text-2xl font-bold mb-3">3. Finalisez la transaction</h3>
                    <p class="text-gray-600 mb-4">
                        Rencontrez l'acheteur en personne ou utilisez notre service de livraison sécurisé. Recevez votre paiement en toute tranquillité.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-secondary mt-1 mr-2"></i>
                            <span>Paiement sécurisé disponible</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-secondary mt-1 mr-2"></i>
                            <span>Service de livraison optionnel</span>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2 order-2 md:order-2">
                    <div class="relative">
                        <div class="bg-white p-1 rounded-xl shadow-lg">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 alt="Complete transaction" 
                                 class="w-full h-auto rounded-lg">
                        </div>
                        <div class="absolute -top-4 -left-4 md:-left-6 bg-secondary text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold shadow-lg">
                            3
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-20 text-center">
            <div class="bg-white p-8 rounded-xl shadow-lg max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold mb-4">Prêt à commencer?</h3>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Rejoignez notre communauté de plus de 500 000 utilisateurs au Maroc
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="" class="bg-secondary text-white px-6 py-3 rounded-lg hover:bg-opacity-90 transition-colors font-medium">
                        Créer un compte gratuit
                    </a>
                    <a href="{{ route('categories') }}" class="border border-secondary text-secondary px-6 py-3 rounded-lg hover:bg-secondary hover:text-white transition-colors font-medium">
                        Voir les annonces
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection