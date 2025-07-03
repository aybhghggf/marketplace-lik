@extends('layouts.basic')
@section('title' )
Profil - LmarketDyalek
@endsection
@section('Profile')
        <!-- Dashboard Container -->
    <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 mt-16">
        
        <!-- Dashboard Header -->
        <div class="mb-8">
            <div class="bg-gradient-to-r from-black to-gray-800 rounded-xl p-6 text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-gold/10 to-gold-dark/20"></div>
                <div class="relative z-10">
                    <h1 class="text-3xl font-bold text-gold mb-2">Tableau de Bord</h1>
                    <p class="text-gray-200">Gérez vos informations personnelles</p>
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
            <form id="profileImageForm" method="POST" action="/profile/upload-photo" enctype="multipart/form-data">
                @csrf
                <div class="relative inline-block">
                    <div class="w-32 h-32 bg-gradient-to-br from-gold to-gold-dark rounded-full mx-auto mb-4 flex items-center justify-center shadow-lg overflow-hidden">
                        <!-- Show uploaded profile image or fallback initials -->
                        @if(Auth::user()->profile_photo_url)
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="Profile Photo" class="w-full h-full object-cover rounded-full">
                        @else
                            <span class="text-black text-4xl font-bold">
                                {{ strtoupper(substr(Auth::user()->prenom, 0, 1) . substr(Auth::user()->nom, 0, 1)) }}
                            </span>
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

                <button type="submit" formaction="/profile/delete-photo" formmethod="POST" 
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
                        <button id="editBtn" onclick="toggleEdit()" 
                                class="bg-gold hover:bg-gold-dark text-black font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg">
                            <span id="editBtnText">Modifier</span>
                        </button>
                    </div>

  <form id="profileForm" class="space-y-6" method="POST" action="/profile/update">
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

    <!-- Save/Cancel Buttons -->
    <div id="actionButtons" class="flex space-x-4 pt-4 border-t border-gray-200">
        <button type="submit" 
                class="flex-1 bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 shadow-md hover:shadow-lg">
            Sauvegarder
        </button>
        <button type="button" onclick="cancelEdit()" 
                class="flex-1 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 shadow-md hover:shadow-lg">
            Annuler
        </button>
    </div>
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

        <!-- Additional Dashboard Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            
            <!-- Account Settings -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6 hover:shadow-xl transition duration-200">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-gold rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black">Paramètres</h3>
                </div>
                <p class="text-gray-600 mb-4">Gérez vos préférences et paramètres de compte</p>
                <button class="w-full bg-black hover:bg-gray-800 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    Accéder
                </button>
            </div>

            <!-- Security -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6 hover:shadow-xl transition duration-200">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-gold rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black">Sécurité</h3>
                </div>
                <p class="text-gray-600 mb-4">Changez votre mot de passe et sécurisez votre compte</p>
                <button class="w-full bg-black hover:bg-gray-800 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    Modifier
                </button>
            </div>

            <!-- Notifications -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6 hover:shadow-xl transition duration-200">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-gold rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4 19l4-4m0 0l7-7m-7 7l4-4m0 4H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v9a2 2 0 01-2 2h-3"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-black">Notifications</h3>
                </div>
                <p class="text-gray-600 mb-4">Gérez vos préférences de notifications</p>
                <button class="w-full bg-black hover:bg-gray-800 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    Configurer
                </button>
            </div>
        </div>
    </div>
@endsection