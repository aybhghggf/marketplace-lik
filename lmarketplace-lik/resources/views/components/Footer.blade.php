<footer class="bg-black text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Logo et réseaux sociaux -->
            <div>
                <div class="flex items-center mb-4">
                    <svg class="w-6 h-6 text-gold mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <span class="text-xl font-bold">LmarketDyalek</span>
                </div>
                <p class="text-gray-400 mb-4 text-sm">Plateforme marocaine d'achat/vente de produits d'occasion.</p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>
                    <a href="https://x.com/" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Liens rapides -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h4 class="font-semibold mb-3 text-gold">Catégories</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('categorie.show',1) }}" class="text-gray-400 hover:text-white">Électronique</a></li>
                        <li><a href="{{ route('categorie.show',2) }}" class="text-gray-400 hover:text-white">Mode</a></li>
                        <li><a href="{{ route('categorie.show',3) }}" class="text-gray-400 hover:text-white">Maison</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3 text-gold">Informations</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">À propos</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="{{ route('how_it_works') }}" class="text-gray-400 hover:text-white">Aide</a></li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter -->

            <div>
                <h4 class="font-semibold mb-3 text-gold">Newsletter</h4>
                <form class="flex" action="{{ route('notification.store') }}" method="POST">
                    @csrf
                    <input type="email" placeholder="Votre email" class="p-2 rounded-l text-gray-800 w-full text-sm" name="email">
                    <button type="submit" class="bg-gold text-black px-3 rounded-r hover:bg-yellow-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Copyright et mentions légales -->
        <div class="pt-6 border-t border-gray-800 text-center text-gray-400 text-sm">
            <p>© 2025 LmarketDyalek. Tous droits réservés.</p>
        </div>
    </div>
</footer>