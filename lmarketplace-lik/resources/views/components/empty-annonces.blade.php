<!-- Section Principale -->
<section class="container mx-auto px-4 py-12 mt-8">
  <!-- Message Aucune Annonce -->
  <div class="text-center py-20">
    <div class="max-w-md mx-auto">
      <!-- Icône -->
      <div class="mb-8">
        <div class="w-32 h-32 mx-auto gradient-gold rounded-full flex items-center justify-center opacity-20">
          <i class="ri-file-search-line text-6xl text-charcoal"></i>
        </div>
      </div>
      
      <!-- Titre -->
      <h2 class="text-3xl font-bold text-charcoal mb-4">
        Aucune annonce trouvée
      </h2>
      
      <!-- Description -->
      <p class="text-charcoal-light text-lg mb-8">
        Il n'y a aucune annonce disponible pour le moment. 
        <br>Revenez plus tard ou publiez votre propre annonce.
      </p>
      
      <!-- Actions -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{route('new_announcement')}}" 
           class="gradient-gold text-charcoal font-semibold py-3 px-6 rounded-xl hover:shadow-lg transition-all duration-300 flex items-center justify-center">
          <i class="ri-add-line mr-2"></i>
          Publier une annonce
        </a>
        <a href="{{ route('home') }}" 
           class="gradient-dark text-white font-semibold py-3 px-6 rounded-xl hover:shadow-lg transition-all duration-300 flex items-center justify-center">
          <i class="ri-home-line mr-2"></i>
          Retour à l'accueil
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Styles CSS requis -->
<style>
.gradient-gold {
    background: linear-gradient(135deg, #D4AF37 0%, #F4E7AA 100%);
}
.gradient-dark {
    background: linear-gradient(135deg, #2C2C2C 0%, #404040 100%);
}
.text-charcoal {
    color: #2C2C2C;
}
.text-charcoal-light {
    color: #404040;
}
.text-gold {
    color: #D4AF37;
}
</style>