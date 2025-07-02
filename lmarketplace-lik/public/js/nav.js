// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileCloseBtn = document.getElementById('mobile-close-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    // Open mobile menu
    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('hidden');
        body.classList.add('overflow-hidden');
    });

    // Close mobile menu
    mobileCloseBtn.addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
        body.classList.remove('overflow-hidden');
    });

    // Close when clicking outside content
    mobileMenu.addEventListener('click', function(e) {
        if (e.target === mobileMenu) {
            mobileMenu.classList.add('hidden');
            body.classList.remove('overflow-hidden');
        }
    });

    // Close with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            mobileMenu.classList.add('hidden');
            body.classList.remove('overflow-hidden');
        }
    });
});