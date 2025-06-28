<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@300;400;500&family=Pacifico&family=Josefin+Sans:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/tailwindconfig.js') }}"></script>
</head>

<!-- Success Alert -->
@if(session('success'))
    <x-alert-succes>
        {{ session('success') }}
    </x-alert-succes>
@endif

@if(session('error'))
    <x-fail-alert>
        {{ session('error') }}
    </x-fail-alert>
@endif




<body class="bg-gray-50">
    <!-- Navbar -->
    <header class="fixed top-0 left-0 w-full bg-primary z-50 shadow-md">
        <x-nav />
    </header>

    
   <!-- Main Content -->
   @yield('Home')
    @yield('Categories')
    @yield('About')
    @yield('How-It-Work')
    @yield('NewAnnonce')
    @yield('Profile')
    @yield('Categorie')





    <footer>
    <!-- Footer -->
    <x-Footer />
    </footer>

    <!-- Floating Action Button -->
    <a href="#" class="floating-action-button">
        <i class="ri-add-line ri-xl"></i>
    </a>

    <!-- Back to Top Button -->
    <button class="back-to-top">
        <i class="ri-arrow-up-line ri-lg"></i>
    </button>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
