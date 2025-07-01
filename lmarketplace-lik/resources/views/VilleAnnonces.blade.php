@extends('layouts.basic')

@section('title')
Annonces par Ville - LmarketDyalek
@endsection

@section('Villes')
<section class="container mx-auto px-4 py-8 mt-20">
    <!-- Titre de la section -->
    <div class="text-center mb-12 mt-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">
            <i class="ri-map-pin-line text-primary align-middle mr-2"></i>
            Annonces disponibles
        </h1>
        <p class="text-gray-600">Découvrez les offres dans votre ville</p>
    </div>

    @if ($annonces->count() == 0)
        <x-empty-annonces>
            Aucune annonce disponible dans cette ville pour le moment.
        </x-empty-annonces>
    @else
        <!-- Grille d'annonces -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($annonces as $obj)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group relative">
                    <!-- Badge Statut -->
                    <div class="absolute top-3 right-3 z-10">
                        @switch($obj->status)
                            @case('available')
                                <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">
                                    Disponible
                                </span>
                                @break
                            @case('pending')
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">
                                    Réservé
                                </span>
                                @break
                            @default
                                <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">
                                    Vendu
                                </span>
                        @endswitch
                    </div>

                    <!-- Image -->
                    <div class="h-48 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent z-10"></div>
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                             src="{{ asset('storage/' . $obj->main_image) }}" 
                             alt="{{ $obj->title }}"
                             onerror="this.src='https://via.placeholder.com/400x300?text=Image+Non+Disponible'">
                    </div>
                    
                    <!-- Contenu -->
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-bold text-gray-800 truncate">{{ $obj->title }}</h3>
                            <span class="text-primary font-bold whitespace-nowrap">{{ number_format($obj->price, 0, ',', ' ') }} DZD</span>
                        </div>
                        
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $obj->description }}</p>
                        
                        <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                            <span class="flex items-center">
                                <i class="ri-map-pin-line mr-1 text-primary"></i>
                                {{ $obj->city }}
                            </span>
                            <span>{{ $obj->created_at->diffForHumans() }}</span>
                        </div>
                        
                        <a href="{{ route('object.details', $obj->id) }}" 
                           class="w-full inline-flex justify-center items-center px-3 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">
                            Voir détails
                            <i class="ri-arrow-right-line ml-2"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if(method_exists($annonces, 'links'))
        <div class="mt-8">
            {{ $annonces->links() }}
        </div>
        @endif
    @endif
</section>
@endsection
