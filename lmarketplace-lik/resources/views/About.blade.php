@extends('layouts.basic')
@section('title' )
À propos - LmarketDyalek
@endsection
@section('About')
<!-- About Us Section -->
<section class="py-16 bg-white mt-8">
    <div class="container mx-auto px-4">
        <!-- Hero Header -->
        <div class="text-center mb-16">
            <span class="inline-block bg-secondary bg-opacity-10 text-secondary px-4 py-1 rounded-full text-sm font-medium mb-3">
                Notre Histoire
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">LmarketDyalek : La Marketplace 100% Marocaine</h2>
            <div class="w-20 h-1 bg-secondary mx-auto"></div>
        </div>

        <!-- Founder Section -->
        <div class="flex flex-col md:flex-row items-center gap-12 mb-20">
            <!-- Founder Image -->
            <div class="md:w-1/3 flex justify-center">
                <div class="relative rounded-xl overflow-hidden shadow-xl w-64 h-64">
                    <!-- Replace with your image -->
                    <div class="absolute inset-0 bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white text-5xl">
                        <i class="ri-user-line"></i>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-secondary text-white px-4 py-2 rounded-tl-xl font-bold">
                        19 ans
                    </div>
                </div>
            </div>
            
            <!-- Founder Bio -->
            <div class="md:w-2/3 mt-8 md:mt-0">
                <h3 class="text-2xl font-bold mb-4">Ayoube Hamadi, Fondateur & Développeur</h3>
                <p class="text-gray-600 mb-6">
                    Passionné par la technologie et l'économie circulaire, j'ai créé LmarketDyalek à 19 ans avec une vision simple : 
                    offrir aux Marocains une plateforme sécurisée pour acheter et vendre des produits d'occasion.
                </p>
                
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="flex items-center">
                        <div class="bg-secondary bg-opacity-10 text-secondary p-2 rounded-full mr-3">
                            <i class="ri-code-line"></i>
                        </div>
                        <span>Développeur Full-Stack</span>
                    </div>
                    <div class="flex items-center">
                        <div class="bg-secondary bg-opacity-10 text-secondary p-2 rounded-full mr-3">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <span>Maroc</span>
                    </div>
                    <div class="flex items-center">
                        <div class="bg-secondary bg-opacity-10 text-secondary p-2 rounded-full mr-3">
                            <i class="ri-flask-line"></i>
                        </div>
                        <span>Innovation Technologique</span>
                    </div>
                    <div class="flex items-center">
                        <div class="bg-secondary bg-opacity-10 text-secondary p-2 rounded-full mr-3">
                            <i class="ri-community-line"></i>
                        </div>
                        <span>Économie Collaborative</span>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-[#0077b5] transition-colors">
                        <i class="ri-linkedin-fill ri-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#1DA1F2] transition-colors">
                        <i class="ri-twitter-fill ri-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#333] transition-colors">
                        <i class="ri-github-fill ri-lg"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mission Section -->
        <div class="bg-gray-50 rounded-xl p-8 md:p-12 mb-16">
            <div class="max-w-3xl mx-auto text-center">
                <h3 class="text-2xl font-bold mb-6">Notre Mission</h3>
                <p class="text-gray-600 mb-6">
                    Chez LmarketDyalek, nous croyons que chaque objet mérite une seconde vie. Notre plateforme connecte les Marocains 
                    à travers le pays pour faciliter les échanges locaux, réduire le gaspillage et promouvoir une consommation plus responsable.
                </p>
                <div class="w-12 h-1 bg-secondary mx-auto"></div>
            </div>
        </div>

        <!-- Values Section -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="text-secondary text-3xl mb-4">
                    <i class="ri-shield-check-line"></i>
                </div>
                <h4 class="font-bold mb-2">Confiance</h4>
                <p class="text-gray-600">
                    Système de notation et profils vérifiés pour des transactions en toute sérénité.
                </p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="text-secondary text-3xl mb-4">
                    <i class="ri-coin-line"></i>
                </div>
                <h4 class="font-bold mb-2">Économie</h4>
                <p class="text-gray-600">
                    Faites des économies tout en donnant une seconde vie à vos objets.
                </p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="text-secondary text-3xl mb-4">
                    <i class="ri-leaf-line"></i>
                </div>
                <h4 class="font-bold mb-2">Écologie</h4>
                <p class="text-gray-600">
                    Réduisez votre impact environnemental en favorisant le réemploi.
                </p>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center">
            <h3 class="text-2xl font-bold mb-6">Prêt à nous rejoindre ?</h3>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Que vous souhaitiez vendre des objets inutilisés ou trouver des bonnes affaires, LmarketDyalek est la solution.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('categories') }}" class="bg-secondary text-white px-6 py-3 rounded-lg hover:bg-opacity-90 transition-colors font-medium">
                    Commencer maintenant
                </a>
                <a href="{{ route('how_it_works') }}" class="border border-secondary text-secondary px-6 py-3 rounded-lg hover:bg-secondary hover:text-white transition-colors font-medium">
                    Comment ça marche
                </a>
            </div>
        </div>
    </div>
</section>
@endsection