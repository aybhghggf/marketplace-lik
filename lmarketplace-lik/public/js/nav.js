// nav.js - Gestion du menu mobile
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileSearchBtn = document.getElementById('mobile-search-btn');
    const mobileSearchContainer = document.getElementById('mobile-search-container');
    
    // Gestion du menu mobile
    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        // Fermer la recherche mobile si ouverte
        if (!mobileSearchContainer.classList.contains('hidden')) {
            mobileSearchContainer.classList.add('hidden');
        }
    });
    
    // Gestion de la recherche mobile (si vous voulez qu'elle ferme le menu)
    mobileSearchBtn.addEventListener('click', function() {
        mobileSearchContainer.classList.toggle('hidden');
        // Fermer le menu mobile si ouvert
        if (!mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
        }
    });
    
    // Fermer le menu quand on clique à l'extérieur
    document.addEventListener('click', function(event) {
        if (!mobileMenu.contains(event.target) && event.target !== mobileMenuBtn) {
            mobileMenu.classList.add('hidden');
        }
        if (!mobileSearchContainer.contains(event.target) && event.target !== mobileSearchBtn) {
            mobileSearchContainer.classList.add('hidden');
        }
    });
});