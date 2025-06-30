@extends('layouts.basic')
@section('title')
Catégories - LmarketDyalek
@endsection
@section('Categories')
<div class="bg-gradient-to-br from-gray-50 to-white py-16 mt-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Explorez nos catégories</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Découvrez des milliers d'annonces dans tous les domaines qui vous intéressent
            </p>
        </div>

        <!-- Sorting Controls -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-10 bg-white p-4 rounded-2xl shadow-sm">
            <h3 class="text-xl font-semibold text-gray-800 mb-4 sm:mb-0">Toutes les catégories</h3>
            
        </div>

        <!-- Main Categories Grid -->
       <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 mb-16">
    @foreach($categories as $category)
        <a href="{{ route('categorie.show',$category->id) }}" class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
            <div class="relative">
                <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-white bg-gradient-to-r {{ $category->color }} rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <i class="{{ $category->icon }} text-2xl"></i>
                </div>

                @if($category->is_hot)
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                        <span class="text-white text-xs font-bold">🔥</span>
                    </div>
                @endif
            </div>

            <h3 class="font-bold text-gray-800 text-center mb-2">{{ $category->name }}</h3>
            <p class="text-{{ explode('-', $category->color)[1] }}-500 text-sm text-center font-semibold">
            </p>
        </a>
    @endforeach
</div>




      
    </div>
</div>
@endsection