        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <a href="#" class="text-white text-2xl logo-font flex items-center">
                <i class="ri-shopping-bag-3-line mr-2 text-secondary"></i>
                LmarketDyalek
            </a>
            
            <div class="hidden md:flex items-center space-x-6 text-white">
                <a href="{{ route('home') }}" class="nav-link  hover:text-secondary transition-colors">Accueil</a>
                <a href="{{ route('categories') }}" class="nav-link hover:text-secondary transition-colors">Catégories</a>
                <a href="{{ route('how_it_works') }}" class="nav-link hover:text-secondary transition-colors">Comment ça marche</a>
                <a href="{{ route('about') }}" class="nav-link hover:text-secondary transition-colors">À propos</a>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="relative hidden md:block">
                    <input type="text" placeholder="Rechercher un produit..." class="search-input w-64 py-2 px-4 pr-10 rounded-button text-sm border-none focus:ring-2 focus:ring-secondary">
                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center text-gray-500">
                        <i class="ri-search-line"></i>
                    </div>
                </div>
                
               
                <a href="#" class="text-white hover:text-secondary transition-colors relative">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-heart-line ri-lg"></i>
                    </div>
                    <span class="absolute -top-1 -right-1 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>
                
                <a href="{{ route('profile') }}" class="text-white hover:text-secondary transition-colors">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-user-line ri-lg"></i>
                    </div>
                </a>
                
                <a href="{{ route('new_announcement') }}" class="bg-secondary text-white px-4 py-2 rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap flex items-center">
                    <i class="ri-add-line mr-1"></i>
                    <span>Déposer une annonce</span>
                </a>
            </div>
            
            <button class="md:hidden text-white">
                <div class="w-8 h-8 flex items-center justify-center">
                    <i class="ri-menu-line ri-lg"></i>
                </div>
            </button>
        </div>
            
    <!-- Mobile Search (visible only on mobile) -->
    <div class="md:hidden pt-20 px-4 bg-white shadow-sm">
        <div class="relative">
            <input type="text" placeholder="Rechercher un produit..." class="search-input w-full py-3 px-4 pr-10 rounded-button text-sm border border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary">
            <div class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center text-gray-500">
                <i class="ri-search-line"></i>
            </div>
        </div>
    </div>