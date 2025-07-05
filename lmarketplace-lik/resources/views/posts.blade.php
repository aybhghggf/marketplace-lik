@php
    $posts = $posts ;
    $UserPosts= $posts->where('user_id', Auth()->user()->id);
@endphp
@extends('layouts.basic')

@section('title')
Votre Posts
@endsection


@section('Posts')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Publications - LmarketDyalek</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#FFD700',
                        'gold-dark': '#B8860B',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Posts Container -->
    <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 mt-16">

        <!-- Posts Header -->
        <div class="mb-8">
            <div class="bg-black rounded-xl p-6 text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-gold/10 to-gold/20"></div>
                <div class="relative z-10 flex justify-between items-center">
                    <div>
                        <h1 class="text-3xl font-bold text-gold mb-2">Mes Publications</h1>
                        <p class="text-gray-200">Gérez toutes vos publications</p>
                    </div>
                    <div class="flex gap-4">
                        <a href="{{ route('new_announcement')}}" class="bg-gold hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="{{ route('profile') }}" class="bg-gray-700 hover:bg-gray-800 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Summary -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6 text-center">
                <div class="text-2xl font-bold text-gold mb-2">{{ $UserPosts->count() }} </div>
                <div class="text-gray-600">Publications Totales</div>
            </div>
        </div>

        <!-- Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($UserPosts as $post)
            <div class="post-card bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all duration-300" data-status="{{ $post->is_active ? 'active' : 'inactive' }}">
                <div class="relative h-48 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('storage/' . $post->main_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                    <div class="absolute top-2 right-2">
                        <span class="bg-{{ $post->is_active ? 'green' : 'red' }}-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                            {{ $post->is_active ? 'Actif' : 'Inactif' }}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-lg font-bold text-black line-clamp-2">{{ $post->title }}</h3>
                        <span class="text-gold font-bold text-lg">{{ number_format($post->price, 0, ',', ' ') }} DH</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $post->description }}</p>
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-4">
                            
                        </div>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('object.details', $post->product_id) }}" class="flex-1 bg-black hover:bg-gray-800 text-white font-semibold py-2 px-3 rounded-lg transition duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                        <a href="{{ route('object.edit',$post->product_id) }}" class="flex-1 bg-gold hover:bg-yellow-500 text-black font-semibold py-2 px-3 rounded-lg transition duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>
                        <form action="{{ route('object.delete', $post->product_id) }}" method="POST" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer {{ $post->title }} ?')" class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-3 rounded-lg transition duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @if ($UserPosts->isEmpty())
        <div class="text-center mt-8">
            <x-empty-annonces />
        </div>
    @endif
@endsection