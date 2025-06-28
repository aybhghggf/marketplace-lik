<!-- Categories Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="inline-block bg-primary bg-opacity-10 text-primary px-4 py-1 rounded-full text-sm font-medium mb-3">Catégories</span>
            <h2 class="text-3xl font-semibold">Trouvez ce que vous cherchez</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mt-3">Parcourez nos principales catégories pour découvrir des produits d'occasion de qualité</p>
        </div>
        
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
    @foreach ($categories as $category)
        <a href="{{ route('categorie.show',$category->id) }}" class="category-card bg-white p-6 rounded-lg shadow-sm text-center transition-all duration-300">
            <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center text-white bg-primary rounded-full">
                <i class="{{ $category->icon }} ri-2x"></i>
            </div>
            <h3 class="font-medium">{{ $category->name }}</h3>
            <p class="text-gray-500 text-sm mt-1">{{ $category->ads_count ?? 0 }} annonces</p>
        </a>
    @endforeach
</div>

<div class="mt-8 flex justify-center">
    {{ $categories->links('custom-pagination') }}
</div>

    </div>
</section>