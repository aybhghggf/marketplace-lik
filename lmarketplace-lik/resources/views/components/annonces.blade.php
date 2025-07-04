  <!-- Titre de la Page -->
  <div class="mb-12 text-center relative">
    <div class="absolute inset-0 gradient-gold opacity-10 blur-3xl rounded-full"></div>
    <h1 class="text-5xl font-bold text-charcoal mb-4 relative z-10">
      Nos Dernières 
      <span class="gradient-gold bg-clip-text text-transparent">Annonces</span>
    </h1>
    <p class="text-charcoal-light text-lg relative z-10">Découvrez les meilleures offres du moment</p>
    <div class="w-24 h-1 gradient-gold mx-auto mt-4 rounded-full"></div>
  </div>

  

  <!-- Grille d'Annonces -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
    @foreach ($annonces as $object)
    <!-- Carte Annonce -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover relative group">
        <!-- Badge Statut -->
        <div class="absolute top-4 right-4 z-10">
            <span class="gradient-gold text-charcoal text-xs font-bold px-3 py-2 rounded-full shadow-lg">
                {{ strtoupper($object->status) }}
            </span>
        </div>

        <!-- Image -->
        <div class="h-56 overflow-hidden relative">
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent z-10"></div>
            <img src="{{ asset('storage/' . $object->main_image) }}" alt="Image de l'objet">

        </div>
        
        <!-- Contenu -->
        <div class="p-6">
            <div class="flex justify-between items-start mb-3">
                <h3 class="text-xl font-bold text-charcoal truncate pr-2">{{ $object->title }}</h3>
                <span class="text-gold font-bold text-lg whitespace-nowrap">{{ number_format($object->price, 0, ',', ' ') }} DZD</span>
            </div>
            
            <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $object->description }}</p>
            
            <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                <span class="flex items-center">
                    <i class="ri-map-pin-line mr-1 text-gold"></i>
                    {{ $object->city }}
                </span>
                <span>{{ $object->created_at->diffForHumans() }}</span>
            </div>
            
            <a href="{{ route('object.details', $object->product_id) }}" 
               class="w-full gradient-dark text-white font-semibold py-3 px-4 rounded-xl hover:shadow-lg transition-all duration-300 flex items-center justify-center group">
                Voir détails
                <i class="ri-arrow-right-line ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>
    @endforeach
  </div>

  <!-- Pagination -->
  <div class="mt-12 flex justify-center">
    {{ $annonces->links() }}
  </div>
</section>