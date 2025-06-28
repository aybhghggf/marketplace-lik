<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmarketDyalek - Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#FFD700',
                        'gold-dark': '#B8860B',
                        'gold-light': '#FFED4E'
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #ffffff;
        }
        .gold-gradient {
            background: linear-gradient(135deg, #FFD700 0%, #B8860B 100%);
        }
    </style>
</head>
<div class="absolute top-4 left-4">
    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 transition-colors flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
        Revenir
    </a>
</div>
<body class="min-h-screen flex items-center justify-center p-4">

    <div class="flex w-full max-w-6xl min-h-[700px] bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
        <!-- Form Section -->
        <div class="flex-1 p-12 flex flex-col justify-center">
            <!-- Logo -->
            <div class="flex items-center mb-10">
                <div class="w-12 h-12 gold-gradient rounded-xl flex items-center justify-center mr-3 shadow-md">
                    <span class="text-black font-bold text-xl">L</span>
                </div>
                <span class="text-2xl font-bold text-gray-800">LmarketDyalek</span>
            </div>

            <!-- Welcome Text -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Créer un compte</h1>
                <p class="text-gray-500">Rejoignez notre marketplace premium</p>
            </div>

            <!-- Form -->
            <form class="space-y-5">
                <!-- Name Fields -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition-colors" placeholder="Votre prénom">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition-colors" placeholder="Votre nom">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Adresse e-mail</label>
                    <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition-colors" placeholder="votre.email@exemple.com">
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                    <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition-colors" placeholder="+33 6 12 34 56 78">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                    <input type="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition-colors" placeholder="Minimum 8 caractères">
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Confirmer le mot de passe</label>
                    <input type="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition-colors" placeholder="Confirmez votre mot de passe">
                </div>

                <!-- Terms & Newsletter -->
                <div class="space-y-3">
                    <label class="flex items-start">
                        <input type="checkbox" class="w-4 h-4 text-gold bg-gray-100 border-gray-300 rounded focus:ring-gold mt-1">
                        <span class="ml-3 text-sm text-gray-600">
                            J'accepte les <a href="{{ route('conditions') }}" class="text-gold hover:text-gold-dark">conditions d'utilisation</a> et la <a href="{{ route('politique_confidentialite') }}" class="text-gold hover:text-gold-dark">politique de confidentialité</a>
                        </span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-gold bg-gray-100 border-gray-300 rounded focus:ring-gold">
                        <span class="ml-3 text-sm text-gray-600">Je souhaite recevoir des offres spéciales et des actualités par e-mail</span>
                    </label>
                </div>

                <!-- Register Button -->
                <button type="submit" class="w-full gold-gradient text-black py-3 px-4 rounded-lg font-medium hover:opacity-90 transition-colors shadow-md">
                    Créer mon compte
                </button>

                <!-- Sign In Link -->
                <p class="text-center text-sm text-gray-600">
                    Vous avez déjà un compte? 
                    <a href="{{ route('login') }}" class="text-gold hover:text-gold-dark font-medium transition-colors">Se connecter</a>
                </p>
            </form>
        </div>

        <!-- Image Section -->
        <div class="flex-1 gold-gradient relative overflow-hidden hidden md:block">
            <div class="absolute inset-0 bg-black bg-opacity-10"></div>
            <div class="relative h-full flex flex-col justify-end p-12 text-black">
                <div class="mb-8">
                    <h2 class="text-4xl font-bold mb-4">Débutez votre aventure sur notre marketplace.</h2>
                    <p class="text-xl opacity-90 text-gray-800">Créez votre compte et accédez à des milliers d'opportunités d'achat et de vente.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="w-2 h-2 bg-black rounded-full"></div>
                    <div class="w-2 h-2 bg-black bg-opacity-50 rounded-full"></div>
                    <div class="w-2 h-2 bg-black bg-opacity-30 rounded-full"></div>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-10 left-10 w-16 h-16 border-2 border-black border-opacity-20 rounded-full"></div>
            <div class="absolute top-1/3 right-20 w-6 h-6 bg-black bg-opacity-30 rounded-full"></div>
            <div class="absolute bottom-1/3 left-16 w-10 h-10 border border-black border-opacity-30 rotate-45"></div>
            <div class="absolute top-20 right-1/3 w-3 h-3 bg-black bg-opacity-40 rounded-full"></div>
        </div>
    </div>
</body>
</html>