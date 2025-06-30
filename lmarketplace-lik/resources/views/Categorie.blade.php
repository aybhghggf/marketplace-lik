
@extends('layouts.basic')
@section('title' )
Categorie - LmarketDyalek
@endsection
@section('Categorie')
<section class="container mx-auto px-4 py-12 mt-8">
  @if($annonces->count() > 0)
  <x-annonces :annonces="$annonces" :categorie="$categorie" />
  @else
    <x-EmptyAnnonces />
  @endif
</section>
@endsection