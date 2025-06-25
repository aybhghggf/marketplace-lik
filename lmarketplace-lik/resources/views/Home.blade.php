 @extends('layouts.basic')
@section('title')
Accueil - LmarketDyalek
@endsection
 @section('Home')
 <!-- Hero Section -->
    <x-HeroSection />

    <!-- Categorie Section -->
    <x-CategorieSection />

    <!-- Featured Products -->
    <x-LastAnnonce />

    <!-- Popular Cities -->
    <x-AnnoncesParVille />

    <!-- Mobile App CTA -->
    <x-MobileDownlad />

    <!-- CTA Section -->
    <x-CTA />

    <!-- Value Proposition Section -->
    <x-WhyUs />

    <!-- How it Works -->
    <x-HowItWorck />
@endsection