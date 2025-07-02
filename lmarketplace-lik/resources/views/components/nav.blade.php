<div class="bg-primary">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="text-white text-2xl logo-font flex items-center hover:text-secondary transition-colors">
            <i class="ri-shopping-bag-3-line mr-2 text-secondary"></i>
            LmarketDyalek
        </a>

        <!-- Desktop Navigation + Search -->
        <div class="hidden md:flex items-center space-x-6">
            <!-- Navigation Links -->
            <div class="flex space-x-6 text-white">
                <a href="{{ route('home') }}" class="nav-link hover:text-secondary transition-colors">Accueil</a>
                <a href="{{ route('categories') }}" class="nav-link hover:text-secondary transition-colors">Catégories</a>
                <a href="{{ route('how_it_works') }}" class="nav-link hover:text-secondary transition-colors">Comment ça marche</a>
                <a href="{{ route('about') }}" class="nav-link hover:text-secondary transition-colors">À propos</a>
            </div>

            <!-- Search Bar -->
            <div class="relative ml-4 max-w-md w-full">
                <input 
                    type="text" 
                    id="desktopSearchInput"
                    placeholder="Rechercher un produit..." 
                    class="w-full py-2 px-4 pl-10 rounded-xl border-2 border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/30 transition-all duration-200 shadow-sm text-gray-800"
                    autocomplete="off"
                >
                <i class="ri-search-line absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
            </div>
        </div>

        <!-- User Actions (Desktop) -->
        <div class="hidden md:flex items-center space-x-4">
            @auth
                <a href="#" class="text-white hover:text-secondary transition-colors relative">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-heart-line text-xl"></i>
                    </div>
                    <span class="absolute -top-1 -right-1 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>

                <div class="relative group">
                    <a href="#" class="text-white hover:text-secondary transition-colors">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-user-line text-xl"></i>
                        </div>
                    </a>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-100 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-y-2 group-hover:translate-y-0 transition-all duration-200 ease-in-out">
                        <!-- Dropdown menu content -->
                    </div>
                </div>

                <a href="{{ route('new_announcement') }}" class="bg-secondary text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors whitespace-nowrap flex items-center">
                    <i class="ri-add-line mr-1"></i>
                    <span>Déposer une annonce</span>
                </a>
            @else
                <div class="flex items-center space-x-3">
                    <a href="{{ route('login') }}" class="text-white hover:text-secondary transition-colors px-3 py-2 rounded-md border border-transparent hover:border-secondary">
                        Se connecter
                    </a>
                    <a href="{{ route('register') }}" class="bg-secondary text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors">
                        S'inscrire
                    </a>
                </div>
            @endauth
        </div>

        <!-- Mobile Menu Button with Search -->
        <div class="md:hidden flex items-center space-x-4">
            <!-- Mobile Search Button -->
            <button id="mobile-search-btn" class="text-white hover:text-secondary transition-colors">
                <div class="w-8 h-8 flex items-center justify-center">
                    <i class="ri-search-line text-xl"></i>
                </div>
            </button>
            
            @auth
                <a href="#" class="text-white hover:text-secondary transition-colors relative">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-heart-line text-xl"></i>
                    </div>
                    <span class="absolute -top-1 -right-1 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>
            @endauth
            
            <button id="mobile-menu-btn" class="text-white hover:text-secondary transition-colors">
                <div class="w-8 h-8 flex items-center justify-center">
                    <i class="ri-menu-line text-xl"></i>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile Search Bar (Hidden by default) -->
    <div id="mobile-search-container" class="md:hidden hidden px-4 pb-3 bg-primary">
        <div class="relative">
            <input 
                type="text" 
                id="mobileSearchInput"
                placeholder="Rechercher un produit..." 
                class="w-full py-2 px-4 pl-10 rounded-xl border-2 border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/30 transition-all duration-200 shadow-sm text-gray-800"
                autocomplete="off"
            >
            <i class="ri-search-line absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
        </div>
    </div>
</div>

<!-- Search Results Container -->
<div id="resultsContainer" class="hidden fixed inset-x-0 top-[73px] md:top-16 z-40 bg-white shadow-lg rounded-b-lg mx-4 max-h-[calc(100vh-120px)] overflow-y-auto">
    <div id="searchResultsContent" class="p-2"></div>
    <div id="searchLoading" class="hidden p-4 text-center text-gray-500">
        <i class="ri-loader-4-line animate-spin text-2xl"></i>
        <p class="mt-2">Recherche en cours...</p>
    </div>
    <div id="searchEmpty" class="hidden p-6 text-center text-gray-400">
        <i class="ri-search-line text-3xl mb-2"></i>
        <p class="text-lg">Aucun résultat trouvé</p>
        <p class="text-sm mt-1">Essayez avec d'autres termes de recherche</p>
    </div>
</div>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="md:hidden hidden fixed inset-0 z-50 bg-primary/95 backdrop-blur-sm">
    <div class="container mx-auto px-4 py-4 h-full flex flex-col">
        <div class="flex items-center justify-between">
            <a href="#" class="text-white text-2xl logo-font flex items-center">
                <i class="ri-shopping-bag-3-line mr-2 text-secondary"></i>
                LmarketDyalek
            </a>
            <button id="mobile-close-btn" class="text-white hover:text-secondary transition-colors p-2">
                <i class="ri-close-line text-2xl"></i>
            </button>
        </div>

        <nav class="flex-1 flex flex-col justify-center space-y-6 text-white">
            <a href="{{ route('home') }}" class="text-xl hover:text-secondary transition-colors py-2 border-b border-white/10">Accueil</a>
            <a href="{{ route('categories') }}" class="text-xl hover:text-secondary transition-colors py-2 border-b border-white/10">Catégories</a>
            <a href="{{ route('how_it_works') }}" class="text-xl hover:text-secondary transition-colors py-2 border-b border-white/10">Comment ça marche</a>
            <a href="{{ route('about') }}" class="text-xl hover:text-secondary transition-colors py-2 border-b border-white/10">À propos</a>
            
            @auth
                <div class="pt-4 mt-4 border-t border-white/10">
                    <a href="{{ route('profile') }}" class="text-xl hover:text-secondary transition-colors py-2 flex items-center">
                        <i class="ri-user-line mr-3 text-secondary"></i> Profil
                    </a>
                    <a href="#" class="text-xl hover:text-secondary transition-colors py-2 flex items-center">
                        <i class="ri-shopping-cart-line mr-3 text-secondary"></i> Mes commandes
                    </a>
                    <a href="#" class="text-xl hover:text-secondary transition-colors py-2 flex items-center">
                        <i class="ri-list-check mr-3 text-secondary"></i> Mes annonces
                    </a>
                </div>
                
                <form method="POST" action="{{ route('logout') }}" class="pt-2">
                    @csrf
                    <button type="submit" class="text-xl hover:text-secondary transition-colors py-2 flex items-center w-full">
                        <i class="ri-logout-box-r-line mr-3 text-secondary"></i> Déconnexion
                    </button>
                </form>
                
                <a href="{{ route('new_announcement') }}" class="bg-secondary text-white px-6 py-3 rounded-full hover:bg-opacity-90 transition-colors text-center flex items-center justify-center mt-4">
                    <i class="ri-add-line mr-2"></i>
                    Déposer une annonce
                </a>
            @else
                <div class="pt-4 mt-4 border-t border-white/10">
                    <a href="{{ route('login') }}" class="text-xl hover:text-secondary transition-colors py-2 flex items-center">
                        <i class="ri-login-box-line mr-3 text-secondary"></i> Se connecter
                    </a>
                    <a href="{{ route('register') }}" class="text-xl hover:text-secondary transition-colors py-2 flex items-center">
                        <i class="ri-user-add-line mr-3 text-secondary"></i> S'inscrire
                    </a>
                </div>
            @endauth
        </nav>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const desktopSearchInput = document.getElementById('desktopSearchInput');
    const mobileSearchInput = document.getElementById('mobileSearchInput');
    const mobileSearchBtn = document.getElementById('mobile-search-btn');
    const mobileSearchContainer = document.getElementById('mobile-search-container');
    const resultsContainer = document.getElementById('resultsContainer');
    const searchResultsContent = document.getElementById('searchResultsContent');
    const searchLoading = document.getElementById('searchLoading');
    const searchEmpty = document.getElementById('searchEmpty');
    
    let debounceTimer;

    // Toggle mobile search visibility
    mobileSearchBtn.addEventListener('click', function() {
        mobileSearchContainer.classList.toggle('hidden');
        if (!mobileSearchContainer.classList.contains('hidden')) {
            mobileSearchInput.focus();
        } else {
            resultsContainer.classList.add('hidden');
        }
    });

    // Common search function
    function setupSearchInput(inputElement) {
        inputElement.addEventListener('input', function() {
            clearTimeout(debounceTimer);
            const query = this.value.trim();
            
            if (query.length < 2) {
                resultsContainer.classList.add('hidden');
                return;
            }
            
            // Show loading
            resultsContainer.classList.remove('hidden');
            searchResultsContent.innerHTML = '';
            searchLoading.classList.remove('hidden');
            searchEmpty.classList.add('hidden');
            
            debounceTimer = setTimeout(() => {
                fetchSearchResults(query);
            }, 300);
        });
    }

    // Initialize both search inputs
    if (desktopSearchInput) setupSearchInput(desktopSearchInput);
    if (mobileSearchInput) setupSearchInput(mobileSearchInput);

    // Fetch search results
    function fetchSearchResults(query) {
        fetch(`/search-objects?query=${encodeURIComponent(query)}`)
            .then(response => {
                if (!response.ok) throw new Error('Erreur réseau');
                return response.json();
            })
            .then(data => {
                searchLoading.classList.add('hidden');
                
                if (!data || data.length === 0) {
                    searchEmpty.classList.remove('hidden');
                    return;
                }
                
                searchEmpty.classList.add('hidden');
                
                data.forEach(item => {
                    const div = document.createElement('div');
                    div.className = "cursor-pointer flex items-center bg-white hover:bg-gray-50 p-3 border-b border-gray-100 last:border-0";
                    
                    div.innerHTML = `
                        <div class="flex-shrink-0 w-12 h-12 bg-gray-100 rounded-lg overflow-hidden mr-3">
                            ${item.main_image ? 
                                `<img src="/storage/${item.main_image}" alt="${item.title}" class="w-full h-full object-cover">` :
                                `<div class="w-full h-full flex items-center justify-center text-gray-400">
                                    <i class="ri-image-line text-xl"></i>
                                </div>`
                            }
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-sm font-medium text-gray-800 truncate">${item.title}</h3>
                            <p class="text-xs text-gray-500 truncate">${item.city || 'Ville non spécifiée'}</p>
                        </div>
                        <div class="ml-2 text-right">
                            <p class="text-sm font-bold text-secondary">${item.price ? Number(item.price).toLocaleString() + ' MAD' : '--'}</p>
                        </div>
                    `;
                    
                    div.addEventListener('click', function() {
                        window.location.href = `/object/${item.product_id}`;
                        resultsContainer.classList.add('hidden');
                    });
                    
                    searchResultsContent.appendChild(div);
                });
            })
            .catch(error => {
                console.error('Erreur:', error);
                searchLoading.classList.add('hidden');
                searchResultsContent.innerHTML = `
                    <div class="p-4 text-center text-red-500">
                        <i class="ri-error-warning-line text-xl"></i>
                        <p class="mt-1">Erreur lors de la recherche</p>
                    </div>
                `;
            });
    }

    // Close results when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInsideSearch = 
            (desktopSearchInput && desktopSearchInput.contains(event.target)) || 
            (mobileSearchInput && mobileSearchInput.contains(event.target)) ||
            (resultsContainer && resultsContainer.contains(event.target)) ||
            (mobileSearchBtn && mobileSearchBtn.contains(event.target));
            
        if (!isClickInsideSearch) {
            resultsContainer.classList.add('hidden');
        }
    });
});
</script>
<script src="{{ asset('js/nav.js') }}"></script>