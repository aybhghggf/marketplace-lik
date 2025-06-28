@extends('layouts.basic')

@section('title')
    Accueil - LmarketDyalek
@endsection

@section('Home')
    <!-- Hero Section -->
    <x-hero-section />

    <!-- Categorie Section -->
    <x-categorie-section :categories="$categories" />

    <!-- Featured Products -->
    <x-last-annonce />

    <!-- Popular Cities -->
    <x-annonces-par-ville :villes="$Villes" />

    <!-- Mobile App CTA -->
    <x-mobile-downald />

    <!-- CTA Section -->
    <x-c-t-a />

    <!-- Value Proposition Section -->
    <x-why-us />

    <!-- How it Works -->
    <x-how-it-worck />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
