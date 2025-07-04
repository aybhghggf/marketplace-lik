@extends('layouts.basic')
@section('title')
Profil - LmarketDyalek
@endsection

@section('Profile')
<!-- Dashboard Container -->
<div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 mt-16">

    <!-- Dashboard Header -->
    <div class="mb-8">
        <div class="bg-gradient-to-r from-black to-gray-800 rounded-xl p-6 text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-gold/10 to-gold-dark/20"></div>
            <div class="relative z-10 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gold mb-2">Tableau de Bord</h1>
                    <p class="text-gray-200">Gérez vos informations personnelles</p>
                </div>
                <!-- Bouton de déconnexion -->
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Se déconnecter
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Navigation Links -->
    <div class="mb-6">
        <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-4">
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('user.posts') }}" class="bg-gold hover:bg-gold-dark text-black font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Mes Publications
                </a>
                <a href="{{ route('new_announcement') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Créer une Publication
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Profile Picture Section -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6">
                <h2 class="text-xl font-bold text-black mb-4 border-b border-gold pb-2">Photo de Profil</h2>
                <div class="text-center">
                    <form id="profileImageForm" method="POST" action="{{ route('profile.image.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="relative inline-block">
                            <div class="w-32 h-32 bg-gradient-to-br from-gold to-gold-dark rounded-full mx-auto mb-4 flex items-center justify-center shadow-lg overflow-hidden">
                                <!-- Show uploaded profile image or fallback initials -->
                                @if ($user->image_profile == 0)
                                    <img src="{{ asset('storage/profiles_images/default.png') }}" alt="Default Profile" class="w-full h-full object-cover rounded-full">
                                @else
                                    <img src="{{ asset($user->image_profile) }}" alt="Profile Image" class="w-full h-full object-cover rounded-full">
                                @endif
                            </div>
                            <button type="button" onclick="document.getElementById('profileImage').click()" 
                                class="absolute bottom-0 right-0 bg-black text-white p-2 rounded-full shadow-lg hover:bg-gray-800 transition duration-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button>
                        </div>
                        <input type="file" id="profileImage" name="profileImage" class="hidden" accept="image/*" onchange="this.form.submit()">
                        <button type="button" onclick="document.getElementById('profileImage').click()" 
                            class="w-full bg-gold hover:bg-gold-dark text-black font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg mb-2">
                            Changer la Photo
                        </button>
                        <button type="submit" formaction="{{ route('profile.image.delete') }}" formmethod="POST" 
                            class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg">
                            @csrf
                            Supprimer la Photo
                        </button>
                    </form>
                </div>
            </div>


        </div>

        <!-- Profile Information Section -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6">
                <div class="flex justify-between items-center mb-6 border-b border-gold pb-2">
                    <h2 class="text-xl font-bold text-black">Informations Personnelles</h2>
                </div>
                <form id="profileForm" class="space-y-6" method="POST" action="{{ route('profile.information.update') }}" enctype="multipart/form-data">
                    @method( 'PUT')
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- First Name -->
                        <div>
                            <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-2">Prénom</label>
                            <input 
                                type="text" 
                                id="prenom" 
                                name="prenom"
                                value="{{ Auth::user()->prenom }}" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition duration-200 bg-gray-50" 
                            >
                        </div>
                        <!-- Last Name -->
                        <div>
                            <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">Nom</label>
                            <input 
                                type="text" 
                                id="nom" 
                                name="nom"
                                value="{{ Auth::user()->nom }}" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition duration-200 bg-gray-50" 
                            >
                        </div>
                    </div>
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            value="{{ Auth::user()->email }}" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition duration-200 bg-gray-50" 
                        >
                    </div>
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Téléphone</label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone"
                            value="{{ Auth::user()->phone }}" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition duration-200 bg-gray-50" 
                        >
                    </div>
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Mot de passe</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            placeholder="Entrez votre mot de passe"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold transition duration-200 bg-gray-50"
                        >
                    </div>
                    <button type="submit" id="editBtn" onclick="toggleEdit()" 
                        class="bg-gold hover:bg-gold-dark text-black font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg">
                        <span id="editBtnText">Modifier</span>
                    </button>
                </form>
                <div id="profileInfo" class="mt-6">
                    <p class="text-gray-700 mb-2"><strong>Prénom:</strong> {{ Auth::user()->prenom }}</p>
                    <p class="text-gray-700 mb-2"><strong>Nom:</strong> {{ Auth::user()->nom }}</p>
                    <p class="text-gray-700 mb-2"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    <p class="text-gray-700 mb-2"><strong>Téléphone:</strong> {{ Auth::user()->phone }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection