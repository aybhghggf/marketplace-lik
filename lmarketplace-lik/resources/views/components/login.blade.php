
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LmarketDyalek - Connexion</title>
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
    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 transition-colors flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
        Revenir
    </a>
</div>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="flex w-full max-w-6xl min-h-[600px] bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
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
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Bon retour</h1>
                <p class="text-gray-500">Veuillez saisir vos informations</p>
            </div>

            <!-- Form -->
<form class="space-y-6" action="{{ route('login.store') }}" method="POST">
    @csrf

    {{-- Erreurs globales --}}
    @if ($errors->any())
        <div class="mb-4 p-4 rounded-lg bg-red-100 border border-red-300 text-red-700">
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Email -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Adresse e-mail</label>
        <input 
            type="email" 
            name="email" 
            value="{{ old('email') }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition-colors" 
            placeholder="Saisissez votre e-mail"
        >
        @error('email')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
        <input 
            type="password" 
            name="password" 
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition-colors" 
            placeholder="Saisissez votre mot de passe"
        >
        @error('password')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Remember & Forgot -->
    <div class="flex items-center justify-between">
        <label class="flex items-center">
            <input 
                type="checkbox" 
                name="remember" 
                class="w-4 h-4 text-gold bg-gray-100 border-gray-300 rounded focus:ring-gold"
                {{ old('remember') ? 'checked' : '' }}
            >
            <span class="ml-2 text-sm text-gray-600">Se souvenir </span>
        </label>
        <a href="#" class="text-sm text-gold hover:text-gold-dark transition-colors">Mot de passe oublié</a>
    </div>

    <!-- Sign In Button -->
    <button type="submit" class="w-full gold-gradient text-black py-3 px-4 rounded-lg font-medium hover:opacity-90 transition-colors shadow-md">
        Se connecter
    </button>

    <!-- Sign Up Link -->
    <p class="text-center text-sm text-gray-600">
        Vous n'avez pas de compte? 
        <a href="{{ route('register') }}" class="text-gold hover:text-gold-dark font-medium transition-colors">S'inscrire</a>
    </p>
</form>

        </div>

        <!-- Image Section -->
        <div class="flex-1 gold-gradient relative overflow-hidden hidden md:block">
            <div class="absolute inset-0 bg-black bg-opacity-10"></div>
            <div class="relative h-full flex flex-col justify-end p-12 text-white">
                <div class="mb-8">
                    <h2 class="text-4xl font-bold mb-4 text-black">Donnez vie à votre marketplace.</h2>
                    <p class="text-xl opacity-90 text-gray-800">Rejoignez des milliers de vendeurs et d'acheteurs dans notre marketplace premium.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="w-2 h-2 bg-black rounded-full"></div>
                    <div class="w-2 h-2 bg-black bg-opacity-50 rounded-full"></div>
                    <div class="w-2 h-2 bg-black bg-opacity-30 rounded-full"></div>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-10 right-10 w-20 h-20 border-2 border-black border-opacity-20 rounded-full"></div>
            <div class="absolute top-32 right-32 w-4 h-4 bg-black bg-opacity-30 rounded-full"></div>
            <div class="absolute bottom-32 right-16 w-8 h-8 border border-black border-opacity-30 rotate-45"></div>
        </div>
    </div>
</body>
</html>