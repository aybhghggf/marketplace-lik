 document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('.md\\:hidden.text-white');
            const mobileMenu = document.createElement('div');
            
            mobileMenu.classList.add('fixed', 'inset-0', 'bg-primary', 'z-50', 'flex', 'flex-col', 'p-4', 'pt-20', 'transform', 'transition-transform', 'duration-300', 'ease-in-out', 'translate-x-full');
            mobileMenu.innerHTML = `
                <button class="absolute top-4 right-4 text-white">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-close-line ri-lg"></i>
                    </div>
                </button>
                <div class="flex flex-col space-y-4 text-white text-lg">
                    <a href="/" class="py-2 border-b border-gray-700">Accueil</a>
                    <a href="/categories" class="py-2 border-b border-gray-700">Catégories</a>    
                    <a href="how-it-works" class="py-2 border-b border-gray-700">Comment ça marche</a>
                    <a href="/about" class="py-2 border-b border-gray-700">À propos</a>
                    <a href="/connexion" class="py-2 border-b border-gray-700">Connexion</a>
                    <a href="/new-announcement" class="bg-secondary text-white px-4 py-3 rounded-button text-center mt-4">Déposer une annonce</a>
                </div>
            `;
            
            document.body.appendChild(mobileMenu);
            
            menuButton.addEventListener('click', function() {
                mobileMenu.classList.remove('translate-x-full');
                document.body.style.overflow = 'hidden';
            });
            
            mobileMenu.querySelector('button').addEventListener('click', function() {
                mobileMenu.classList.add('translate-x-full');
                document.body.style.overflow = '';
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Tab buttons in the filter section
            const tabButtons = document.querySelectorAll('.px-1.py-1.rounded-full');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    tabButtons.forEach(btn => {
                        btn.classList.remove('bg-secondary', 'text-white');
                        btn.classList.add('border', 'border-gray-300');
                    });
                    
                    // Add active class to clicked button
                    this.classList.add('bg-secondary', 'text-white');
                    this.classList.remove('border', 'border-gray-300');
                });
            });
            
            // Range slider
            const rangeSlider = document.querySelector('.range-slider');
            if (rangeSlider) {
                rangeSlider.addEventListener('input', function() {
                    const value = this.value;
                    const min = this.min;
                    const max = this.max;
                    const percentage = ((value - min) / (max - min)) * 100;
                    
                    this.style.background = `linear-gradient(to right, #FCA311 0%, #FCA311 ${percentage}%, #e0e0e0 ${percentage}%, #e0e0e0 100%)`;
                });
                
                // Trigger once to set initial gradient
                rangeSlider.dispatchEvent(new Event('input'));
            } 
        })

          document.addEventListener('DOMContentLoaded', function() {
            const favoriteButtons = document.querySelectorAll('.product-card .absolute.top-3.right-3 .w-5.h-5');
            
            favoriteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const icon = this.querySelector('i');
                    
                    if (icon.classList.contains('ri-heart-line')) {
                        icon.classList.remove('ri-heart-line');
                        icon.classList.add('ri-heart-fill', 'text-secondary');
                    } else {
                        icon.classList.remove('ri-heart-fill', 'text-secondary');
                        icon.classList.add('ri-heart-line');
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const backToTopButton = document.querySelector('.back-to-top');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('visible');
                } else {
                    backToTopButton.classList.remove('visible');
                }
            });
            
            backToTopButton.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });