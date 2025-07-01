<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="inline-block bg-primary bg-opacity-10 text-primary px-4 py-1 rounded-full text-sm font-medium mb-3">Villes populaires</span>
            <h2 class="text-3xl font-semibold">Annonces par ville</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mt-3">Découvrez les meilleures offres dans les principales villes du Maroc</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            @foreach ($villes as $ville)
                @php
                    if($ville->name === 'Fès') {
                        $name = 'fes';
                    } elseif($ville->name === 'Tanger') {
                        $name = 'tanger';
                    } elseif($ville->name === 'Marrakech') {
                        $name = 'marrakech';
                    } elseif($ville->name === 'Casablanca') {
                        $name = 'casablanca';
                    } elseif($ville->name === 'Agadir') {
                        $name = 'agadir';
                    } elseif($ville->name === 'Rabat') {
                        $name = 'rabat';
                    } elseif($ville->name === 'Oujda') {
                        $name = 'oujda';
                    } else {
                        $name = strtolower($ville->name);
                    }
                @endphp

                <a href="{{ route('ville.annonces', $name) }}" class="group">
                    <div class="relative overflow-hidden rounded-lg h-40">
                        <img src="{{ asset('Villes/' . $ville->image) }}" alt="{{ $ville->name }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-4">
                            <h3 class="text-white font-semibold text-lg">{{ $ville->name}}</h3>
                            <p class="text-white text-sm">Decouvrez Plus d'annonces</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-8 flex justify-center">
            {{ $villes->links() }}
        </div>
    </div>
</section>
