<div class="bg-primary shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo - Version plus compacte -->
            <a href="#" class="flex items-center space-x-2 group">
                <i class="ri-shopping-bag-3-line text-2xl text-secondary group-hover:text-white transition-colors"></i>
                <span class="text-white text-xl font-bold tracking-tight">LmarketDyalek</span>
            </a>

            <!-- Navigation Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <!-- Liens principaux -->
                <div class="flex space-x-1">
                    <a href="{{ route('home') }}" class="px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                        Accueil
                    </a>
                    <a href="{{ route('categories') }}" class="px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                        Catégories
                    </a>
                    <a href="{{ route('how_it_works') }}" class="px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                        Fonctionnement
                    </a>
                    <a href="{{ route('about') }}" class="px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                        À propos
                    </a>
                </div>

                <!-- Barre de recherche intégrée -->
                <div class="relative w-72 mx-4">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="ri-search-line text-gray-400"></i>
                    </div>
                    <input 
                        type="text" 
                        id="desktopSearchInput"
                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent placeholder-gray-500"
                        placeholder="Rechercher produits..."
                    >

                    <div id="resultsContainer" class="absolute left-0 w-full mt-2 bg-white border border-gray-200 rounded-lg shadow-lg hidden z-50">
                        <div id="searchLoading" class="p-4 text-center text-gray-500 hidden">
                            <i class="ri-loader-4-line animate-spin text-xl"></i>
                            <p class="mt-1">Chargement...</p>
                        </div>
                        <div id="searchEmpty" class="p-4 text-center text-gray-400 hidden">
                            <i class="ri-search-line text-xl"></i>
                            <p class="mt-1">Aucun résultat</p>
                        </div>
                        <div id="searchResultsContent"></div>
                    </div>
                </div>

                <!-- Actions utilisateur -->
                <div class="flex items-center space-x-4">
                    @auth

                        <div class="relative">
                            <a href="{{ route('profile') }}" class="p-2 text-white hover:text-secondary transition-colors">
                                <i class="ri-user-3-line text-xl"></i>
                            </a>
                        </div>

                        <a href="{{ route('new_announcement') }}" class="bg-secondary hover:bg-secondary-dark text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition-colors">
                            <i class="ri-add-line"></i>
                            <span>Déposer</span>
                        </a>
                    @else
                        <div class="flex space-x-3">
                            <a href="{{ route('login') }}" class="text-white hover:text-secondary px-3 py-1.5 transition-colors">
                                Connexion
                            </a>
                            <a href="{{ route('register') }}" class="bg-secondary hover:bg-secondary-dark text-white px-4 py-1.5 rounded-lg transition-colors">
                                Inscription
                            </a>
                        </div>
                    @endauth
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center space-x-4">
                <button id="mobile-search-btn" class="text-white p-2 hover:text-secondary">
                    <i class="ri-search-line text-xl"></i>
                </button>

                @auth

                @endauth

                <button id="mobile-menu-btn" class="text-white p-2 hover:text-secondary">
                    <i class="ri-menu-line text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Search Container -->
    <div id="mobile-search-container" class="md:hidden hidden px-4 pb-3 bg-primary">
        <div class="relative">
            <input 
                type="text" 
                id="mobileSearchInput"
                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent placeholder-gray-500"
                placeholder="Rechercher produits..."
            >
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="ri-search-line text-gray-400"></i>
            </div>
        </div>
        <div id="mobileResultsContainer" class="absolute left-4 right-4 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg hidden z-50">
            <div id="mobileSearchLoading" class="p-4 text-center text-gray-500 hidden">
                <i class="ri-loader-4-line animate-spin text-xl"></i>
                <p class="mt-1">Chargement...</p>
            </div>
            <div id="mobileSearchEmpty" class="p-4 text-center text-gray-400 hidden">
                <i class="ri-search-line text-xl"></i>
                <p class="mt-1">Aucun résultat</p>
            </div>
            <div id="mobileSearchResultsContent"></div>
        </div>
    </div>
</div>
<!-- Menu Mobile (caché par défaut) -->
<div id="mobile-menu" class="md:hidden hidden absolute top-16 left-0 right-0 bg-primary shadow-lg z-50">
    <div class="container mx-auto px-4 py-3">
        <div class="flex flex-col space-y-2">
            <a href="{{ route('home') }}" class="flex items-center px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                <i class="ri-home-4-line mr-2"></i>
                Accueil
            </a>
            <a href="{{ route('categories') }}" class="flex items-center px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                <i class="ri-list-unordered mr-2"></i>
                Catégories
            </a>
            <a href="{{ route('how_it_works') }}" class="flex items-center px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                <i class="ri-question-line mr-2"></i>
                Fonctionnement
            </a>
            <a href="{{ route('about') }}" class="flex items-center px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                <i class="ri-information-line mr-2"></i>
                À propos
            </a>
            
            @auth
                <a href="#" class="flex items-center px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                    <i class="ri-heart-2-line mr-2"></i>
                    Favoris
                </a>
                <a href="{{ route('profile') }}" class="flex items-center px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                    <i class="ri-user-3-line mr-2"></i>
                    Profil
                </a>
                <a href="{{ route('new_announcement') }}" class="flex items-center px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                    <i class="ri-add-line mr-2"></i>
                    Déposer une annonce
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center w-full text-left px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                        <i class="ri-logout-box-r-line mr-2"></i>
                        Déconnexion
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="flex items-center px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                    <i class="ri-login-box-line mr-2"></i>
                    Connexion
                </a>
                <a href="{{ route('register') }}" class="flex items-center px-3 py-2 text-white hover:text-secondary font-medium rounded-md transition-colors duration-200">
                    <i class="ri-user-add-line mr-2"></i>
                    Inscription
                </a>
            @endauth
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Gestion du menu mobile
    const $mobileMenu = $('#mobile-menu');
    const $mobileMenuBtn = $('#mobile-menu-btn');
    const $mobileSearchBtn = $('#mobile-search-btn');
    const $mobileSearchContainer = $('#mobile-search-container');

    // Toggle menu mobile
    $mobileMenuBtn.on('click', function() {
        $mobileMenu.toggleClass('hidden');
        // Fermer la recherche si ouverte
        if (!$mobileSearchContainer.hasClass('hidden')) {
            $mobileSearchContainer.addClass('hidden');
        }
    });

    // Toggle recherche mobile
    $mobileSearchBtn.on('click', function() {
        $mobileSearchContainer.toggleClass('hidden');
        // Fermer le menu si ouvert
        if (!$mobileMenu.hasClass('hidden')) {
            $mobileMenu.addClass('hidden');
        }
        // Focus sur l'input quand la recherche s'ouvre
        if (!$mobileSearchContainer.hasClass('hidden')) {
            $('#mobileSearchInput').focus();
        }
    });

    // Fermer les menus quand on clique à l'extérieur
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#mobile-menu').length && !$(e.target).closest('#mobile-menu-btn').length) {
            $mobileMenu.addClass('hidden');
        }
        if (!$(e.target).closest('#mobile-search-container').length && !$(e.target).closest('#mobile-search-btn').length) {
            $mobileSearchContainer.addClass('hidden');
        }
    });

    // Empêcher la propagation des clics dans les menus
    $mobileMenu.on('click', function(e) {
        e.stopPropagation();
    });
    $mobileSearchContainer.on('click', function(e) {
        e.stopPropagation();
    });

    // Fonction de recherche (existante)
    function handleSearch($input, $resultsContainer, $resultsContent, $loading, $empty) {
        let debounceTimer;
        $input.on('input', function() {
            clearTimeout(debounceTimer);
            const query = $(this).val().trim();

            if (query.length < 2) {
                $resultsContainer.addClass('hidden');
                return;
            }

            $resultsContainer.removeClass('hidden');
            $resultsContent.html('');
            $loading.removeClass('hidden');
            $empty.addClass('hidden');

            debounceTimer = setTimeout(() => {
                $.ajax({
                    url: '/search-objects',
                    method: 'GET',
                    data: { query: query },
                    success: function(data) {
                        $loading.addClass('hidden');
                        if (!data || data.length === 0) {
                            $empty.removeClass('hidden');
                            return;
                        }

                        $empty.addClass('hidden');
                        data.forEach(item => {
                            const html = `
                                <div class="cursor-pointer flex items-center bg-white hover:bg-gray-50 p-3 border-b border-gray-100 last:border-0" onclick="window.location.href='/object/${item.product_id}'">
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
                                </div>`;

                            $resultsContent.append(html);
                        });
                    },
                    error: function() {
                        $loading.addClass('hidden');
                        $resultsContent.html('<div class="p-4 text-center text-red-500"><i class="ri-error-warning-line text-xl"></i><p class="mt-1">Erreur lors de la recherche</p></div>');
                    }
                });
            }, 300);
        });

        $(document).on('click', function(e) {
            if (!$(e.target).closest($input).length && !$(e.target).closest($resultsContainer).length) {
                $resultsContainer.addClass('hidden');
            }
        });
    }

    // Initialisation des fonctions de recherche
    handleSearch($('#desktopSearchInput'), $('#resultsContainer'), $('#searchResultsContent'), $('#searchLoading'), $('#searchEmpty'));
    handleSearch($('#mobileSearchInput'), $('#mobileResultsContainer'), $('#mobileSearchResultsContent'), $('#mobileSearchLoading'), $('#mobileSearchEmpty'));
});
</script>