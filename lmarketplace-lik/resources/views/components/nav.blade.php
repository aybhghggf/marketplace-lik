<div class="bg-primary">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <a href="#" class="text-white text-2xl logo-font flex items-center hover:text-secondary transition-colors">
            <i class="ri-shopping-bag-3-line mr-2 text-secondary"></i>
            LmarketDyalek
        </a>
        <div class="hidden md:flex items-center space-x-6 text-white">
            <a href="{{ route('home') }}" class="nav-link hover:text-secondary transition-colors">Accueil</a>
            <a href="{{ route('categories') }}" class="nav-link hover:text-secondary transition-colors">Catégories</a>
            <a href="{{ route('how_it_works') }}" class="nav-link hover:text-secondary transition-colors">Comment ça marche</a>
            <a href="{{ route('about') }}" class="nav-link hover:text-secondary transition-colors">À propos</a>
        </div>
        <div class="hidden md:flex items-center space-x-4">
            <div class="relative max-w-md mx-auto">
                <input 
                    type="text" 
                    id="searchInput" 
                    placeholder="Rechercher un produit..." 
                    class="w-full py-3 px-5 pr-12 rounded-xl border-2 border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/30 transition-all duration-200 shadow-sm"
                    autocomplete="off"
                >
                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-secondary transition-colors">
                    <i class="ri-search-line text-xl"></i>
                </div>
            </div>
            @auth
                <a href="#" class="text-white hover:text-secondary transition-colors relative">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-heart-line ri-lg"></i>
                    </div>
                    <span class="absolute -top-1 -right-1 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>
                <div class="relative group">
                    <a href="#" class="text-white hover:text-secondary transition-colors">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-user-line ri-lg"></i>
                        </div>
                    </a>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-100 z-50
                                opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                translate-y-2 group-hover:translate-y-0 transition-all duration-200 ease-in-out">
                        <div class="py-1 text-sm text-gray-700">
                            <div class="px-4 py-2 border-b border-gray-100">
                                <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                            </div>
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100 transition-colors flex items-center">
                                <i class="ri-user-line mr-2"></i>Profil
                            </a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition-colors flex items-center">
                                <i class="ri-shopping-cart-line mr-2"></i>Mes commandes
                            </a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition-colors flex items-center">
                                <i class="ri-list-check mr-2"></i>Mes annonces
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100 transition-colors flex items-center">
                                    <i class="ri-logout-box-r-line mr-2"></i>Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <a href="{{ route('new_announcement') }}" class="bg-secondary text-white px-4 py-2 rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap flex items-center">
                    <i class="ri-add-line mr-1"></i>
                    <span>Déposer une annonce</span>
                </a>
            @else
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
        <div class="md:hidden flex items-center space-x-3">
            @auth
                <a href="#" class="text-white hover:text-secondary transition-colors relative">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-heart-line ri-lg"></i>
                    </div>
                    <span class="absolute -top-1 -right-1 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>
            @endauth
            <button id="mobile-menu-btn" class="text-white hover:text-secondary transition-colors">
                <div class="w-8 h-8 flex items-center justify-center">
                    <i class="ri-menu-line ri-lg"></i>
                </div>
            </button>
        </div>
    </div>
</div>
<div id="resultsContainer" class="flex flex-col px-4 container mx-auto mt-4 space-y-3">
    <div class="col-span-full py-12 text-center text-gray-400 hidden" id="emptyState">
        <i class="ri-search-line text-4xl mb-3"></i>
        <p class="text-lg">Aucun résultat trouvé</p>
        <p class="text-sm mt-1">Essayez avec d'autres termes de recherche</p>
    </div>
</div>
<script>
const searchInput = document.getElementById('searchInput');
const resultsContainer = document.getElementById('resultsContainer');
const emptyState = document.getElementById('emptyState');

// دالة التنقل مع تنظيف النتائج
function handleResultClick(url) {
  resultsContainer.innerHTML = '';
  emptyState.classList.add('hidden');
  searchInput.value = '';
  window.location.href = url;
}

searchInput.addEventListener('input', function () {
  const query = this.value.trim();

  if (query.length < 2) {
    resultsContainer.innerHTML = '';
    resultsContainer.appendChild(emptyState);
    emptyState.classList.remove('hidden');
    return;
  }

  fetch(`/search-objects?query=${encodeURIComponent(query)}`)
    .then(response => response.json())
    .then(data => {
      resultsContainer.innerHTML = '';

      if (data.length === 0) {
        resultsContainer.appendChild(emptyState);
        emptyState.classList.remove('hidden');
        return;
      }

      emptyState.classList.add('hidden');

      data.forEach(item => {
        // خلق div جديد لكل عنصر
        const div = document.createElement('div');
        div.className = "cursor-pointer flex items-center bg-white shadow rounded-xl p-4 hover:shadow-md transition w-full mb-2";

        div.innerHTML = `
          <img src="/storage/${item.main_image}" alt="${item.title}" class="w-20 h-20 object-cover rounded-lg mr-4">
          <div class="flex-1">
            <h3 class="text-base font-semibold text-gray-800 mb-1 truncate">${item.title}</h3>
            <p class="text-sm text-gray-500">${item.city}</p>
          </div>
          <div class="ml-4 text-right">
            <p class="text-sm font-bold text-secondary">${Number(item.price).toLocaleString()} MAD</p>
          </div>
        `;

        // ربط حدث النقر بالعنصر
        div.addEventListener('click', () => handleResultClick(`/object/${item.product_id}`));

        resultsContainer.appendChild(div);
      });
    })
    .catch(error => {
      console.error('Erreur:', error);
    });
});

// إخفاء النتائج عند النقر خارج الصندوق
document.addEventListener('click', function(event) {
  const isClickInsideSearch = searchInput.contains(event.target) || resultsContainer.contains(event.target);
  if (!isClickInsideSearch) {
    resultsContainer.innerHTML = '';
    resultsContainer.appendChild(emptyState);
    emptyState.classList.remove('hidden');
    searchInput.blur();
  }
});
</script>
