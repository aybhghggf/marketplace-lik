<!-- Navbar -->
<div class="bg-primary">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="text-white text-2xl logo-font flex items-center hover:text-secondary transition-colors">
            <i class="ri-shopping-bag-3-line mr-2 text-secondary"></i>
            LmarketDyalek
        </a>

        <!-- Navigation Links - Desktop -->
        <div class="hidden md:flex items-center space-x-6 text-white">
            <a href="{{ route('home') }}" class="nav-link hover:text-secondary transition-colors">Accueil</a>
            <a href="{{ route('categories') }}" class="nav-link hover:text-secondary transition-colors">Catégories</a>
            <a href="{{ route('how_it_works') }}" class="nav-link hover:text-secondary transition-colors">Comment ça marche</a>
            <a href="{{ route('about') }}" class="nav-link hover:text-secondary transition-colors">À propos</a>
        </div>

        <!-- Right Side Icons - Desktop -->
        <div class="hidden md:flex items-center space-x-4">
            <!-- Search Input -->
            <div class="relative">
                <input type="text" placeholder="Rechercher un produit..." class="search-input w-64 py-2 px-4 pr-10 rounded-button text-sm border-none focus:ring-2 focus:ring-secondary">
                <div class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center text-gray-500">
                    <i class="ri-search-line"></i>
                </div>
            </div>

            @auth
                <!-- Favorite Icon -->
                <a href="#" class="text-white hover:text-secondary transition-colors relative">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-heart-line ri-lg"></i>
                    </div>
                    <span class="absolute -top-1 -right-1 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>

                <!-- Profile Dropdown on Hover -->
                <div class="relative group">
                    <!-- Trigger (Profile Icon) -->
                    <a href="#" class="text-white hover:text-secondary transition-colors">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-user-line ri-lg"></i>
                        </div>
                    </a>

                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-100 z-50
                                opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                translate-y-2 group-hover:translate-y-0 transition-all duration-200 ease-in-out">
                        <div class="py-1 text-sm text-gray-700">
                            <div class="px-4 py-2 border-b border-gray-100">
                                <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                            </div>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition-colors flex items-center">
                                <i class="ri-user-line mr-2"></i>
                                <span>Profil</span>
                            </a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition-colors flex items-center">
                                <i class="ri-shopping-cart-line mr-2"></i>
                                <span>Mes commandes</span>
                            </a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition-colors flex items-center">
                                <i class="ri-list-check mr-2"></i>
                                <span>Mes annonces</span>
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100 transition-colors flex items-center">
                                    <i class="ri-logout-box-r-line mr-2"></i>
                                    <span>Déconnexion</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- New Announcement Button -->
                <a href="{{ route('new_announcement')}}" class="bg-secondary text-white px-4 py-2 rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap flex items-center">
                    <i class="ri-add-line mr-1"></i>
                    <span>Déposer une annonce</span>
                </a>
            @else
                <!-- Guest Login/Register Buttons -->
                <div class="flex items-center space-x-3">
                    <a href="{{ route('login') }}" class="text-white hover:text-secondary transition-colors px-3 py-2 rounded-button border border-transparent hover:border-secondary">
                        Se connecter
                    </a>
                    <a href="{{ route('register') }}" class="bg-secondary text-white px-4 py-2 rounded-button hover:bg-opacity-90 transition-colors">
                        S'inscrire
                    </a>
                </div>
            @endauth
        </div>

        <!-- Mobile Right Side -->
        <div class="md:hidden flex items-center space-x-3">
            @auth
                <!-- Mobile Favorite Icon -->
                <a href="#" class="text-white hover:text-secondary transition-colors relative">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-heart-line ri-lg"></i>
                    </div>
                    <span class="absolute -top-1 -right-1 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>
            @endauth

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="text-white hover:text-secondary transition-colors">
                <div class="w-8 h-8 flex items-center justify-center">
                    <i class="ri-menu-line ri-lg" id="menu-icon"></i>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden bg-primary border-t border-gray-600 hidden">
        <div class="container mx-auto px-4 py-4 space-y-4">
            <!-- Mobile Search -->
            <div class="relative">
                <input type="text" placeholder="Rechercher un produit..." class="search-input w-full py-2 px-4 pr-10 rounded-button text-sm border-none focus:ring-2 focus:ring-secondary">
                <div class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center text-gray-500">
                    <i class="ri-search-line"></i>
                </div>
            </div>

            <!-- Mobile Navigation Links -->
            <div class="space-y-2">
                <a href="{{ route('home')}}" class="block text-white hover:text-secondary transition-colors py-2 px-2 rounded">
                    <i class="ri-home-line mr-2"></i>Accueil
                </a>
                <a href="{{ route('categories')}}" class="block text-white hover:text-secondary transition-colors py-2 px-2 rounded">
                    <i class="ri-apps-line mr-2"></i>Catégories
                </a>
                <a href="{{ route('how_it_works') }}" class="block text-white hover:text-secondary transition-colors py-2 px-2 rounded">
                    <i class="ri-question-line mr-2"></i>Comment ça marche
                </a>
                <a href="{{ route('about') }}" class="block text-white hover:text-secondary transition-colors py-2 px-2 rounded">
                    <i class="ri-information-line mr-2"></i>À propos
                </a>
            </div>

            @auth
                <!-- Mobile Profile Section -->
                <div class="border-t border-gray-600 pt-4">
                    <div class="mb-3 px-2">
                        <p class="text-white font-medium">{{ Auth::user()->name }}</p>
                        <p class="text-gray-300 text-sm">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="space-y-2">
                        <a href="{{route('profile')}} class="block text-white hover:text-secondary transition-colors py-2 px-2 rounded flex items-center">
                            <i class="ri-user-line mr-2"></i>Profil
                        </a>
                        <a href="#" class="block text-white hover:text-secondary transition-colors py-2 px-2 rounded flex items-center">
                            <i class="ri-shopping-cart-line mr-2"></i>Mes commandes
                        </a>
                        <a href="#" class="block text-white hover:text-secondary transition-colors py-2 px-2 rounded flex items-center">
                            <i class="ri-list-check mr-2"></i>Mes annonces
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left text-white hover:text-secondary transition-colors py-2 px-2 rounded flex items-center">
                                <i class="ri-logout-box-r-line mr-2"></i>Déconnexion
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Mobile New Announcement Button -->
                <div class="pt-4">
                    <a href="{{ route('new_announcement')}}" class="block bg-secondary text-white px-4 py-3 rounded-button hover:bg-opacity-90 transition-colors text-center">
                        <i class="ri-add-line mr-1"></i>
                        <span>Déposer une annonce</span>
                    </a>
                </div>
            @else
                <!-- Guest Mobile Login Section -->
                <div class="border-t border-gray-600 pt-4 space-y-3">
                    <a href="{{ route('login') }}" class="block text-white hover:text-secondary transition-colors py-2 px-2 rounded text-center border border-gray-600 hover:border-secondary">
                        <i class="ri-login-box-line mr-2"></i>Se connecter
                    </a>
                    <a href="{{ route('register')}}lass="block bg-secondary text-white px-4 py-3 rounded-button hover:bg-opacity-90 transition-colors text-center">
                        <i class="ri-user-add-line mr-1"></i>
                        <span>S'inscrire</span>
                    </a>
                </div>
            @endauth
        </div>
    </div>
</div>


<script src="{{ asset('js/nav.js') }}"></script>