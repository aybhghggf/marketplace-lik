 @extends('layouts.basic')
@section('title')
Accueil - LmarketDyalek
@endsection
 @section('Home')
 <!-- Hero Section -->
    <x-hero-section />

    <!-- Categorie Section -->
    <x-categorie-section />

    <!-- Featured Products -->
    <x-last-annonce />

    <!-- Popular Cities -->
    <x-annonces-par-ville />

    <!-- Mobile App CTA -->
    <x-mobile-downald />

    <!-- CTA Section -->
    <x-c-t-a />

    <!-- Value Proposition Section -->
    <x-why-us />

    <!-- How it Works -->
    <x-how-it-worck />
@endsection