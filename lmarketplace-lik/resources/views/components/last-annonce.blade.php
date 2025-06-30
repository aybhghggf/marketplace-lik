{{-- Debug temporaire --}}
{{-- {{ dd($annonces) }} --}}

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center mb-8">
            <div>
                <span class="inline-block bg-primary bg-opacity-10 text-primary px-4 py-1 rounded-full text-sm font-medium mb-3">Nouveautés</span>
                <h2 class="text-3xl font-semibold">Annonces récentes</h2>
                <p class="text-gray-600 mt-2">Découvrez les dernières annonces publiées près de chez vous</p>
            </div>
            <div class="flex gap-2 mt-4 md:mt-0">
                <button class="px-1 py-1 rounded-full border border-gray-300 hover:bg-gray-100 transition-colors">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-arrow-left-s-line ri-lg"></i>
                    </div>
                </button>
                <button class="px-1 py-1 rounded-full border border-gray-300 bg-secondary text-white hover:bg-opacity-90 transition-colors">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-arrow-right-s-line ri-lg"></i>
                    </div>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($annonces as $annonce)
                <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden relative">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $annonce->main_image) }}" alt="{{ $annonce->titre }}" class="w-full h-64 object-cover object-top">
                        <span class="badge bg-green-100 text-green-800 absolute top-3 left-3">Nouveau</span>
                        <button class="absolute top-3 right-3 bg-white rounded-full p-2 shadow-sm hover:bg-gray-100 transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center text-gray-500 hover:text-secondary">
                                <i class="ri-heart-line"></i>
                            </div>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-lg">{{ $annonce->titre }}</h3>
                            <span class="text-secondary font-bold">{{ number_format($annonce->price, 0, ',', ' ') }} DH</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">
                            {{ Str::limit($annonce->description, 80) }}
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-500">{{ $annonce->ville }} • {{ $annonce->created_at->diffForHumans() }}</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">{{ $annonce->categorie->nom ?? 'Non classé' }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('categories') }}" class="inline-flex items-center bg-primary text-white px-6 py-3 rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">
                <span>Voir plus d'annonces</span>
                <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </div>
</section>
