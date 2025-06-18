<?php include('header.php');  ?>

    <!-- Hero Section -->
    <section id="accueil" class="hero-pattern relative py-24 md:py-32">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl text-center mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 title-font leading-tight">L'Âme de l'Artisanat Marocain</h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10">Découvrez des siècles de tradition et de savoir-faire, incarnés dans chaque pièce unique façonnée à la main.</p>
                <a href="produits.php" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-10 rounded-full text-lg transition duration-300 inline-block shadow-lg hover:shadow-xl">Explorer Nos Trésors</a>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12 title-font">Nos Catégories d'Art</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                <div class="bg-amber-50 rounded-lg p-6 text-center category-card-hover transition duration-300">
                    <div class="bg-amber-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4 shadow">
                        <i class="fas fa-rug text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Tapis Berbères</h3>
                    <p class="text-gray-600 mt-2 text-sm">Tissés main, motifs ancestraux</p>
                </div>
                
                <div class="bg-amber-50 rounded-lg p-6 text-center category-card-hover transition duration-300">
                    <div class="bg-amber-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4 shadow">
                        <i class="fas fa-mug-hot text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Céramique & Poterie</h3>
                    <p class="text-gray-600 mt-2 text-sm">Art de la table et décoration</p>
                </div>
                
                <div class="bg-amber-50 rounded-lg p-6 text-center category-card-hover transition duration-300">
                    <div class="bg-amber-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4 shadow">
                        <i class="fas fa-ring text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Bijoux Ethniques</h3>
                    <p class="text-gray-600 mt-2 text-sm">Argent, ambre et pierres fines</p>
                </div>
                
                <div class="bg-amber-50 rounded-lg p-6 text-center category-card-hover transition duration-300">
                    <div class="bg-amber-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4 shadow">
                        <i class="fas fa-couch text-amber-600 text-3xl"></i> <!-- Changed icon for Cuir -->
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Maroquinerie</h3>
                    <p class="text-gray-600 mt-2 text-sm">Sacs, poufs et babouches en cuir</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produits" class="py-16 bg-gray-100 relative overflow-hidden">
        <div class="arabic-pattern absolute inset-0"></div>
        <div class="container mx-auto px-6 relative">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12 title-font">Nos Produits Phares</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg product-card transition duration-300">
                    <div class="relative overflow-hidden h-72">
                        <img src="image/Sublimez votre intérieur avec ce tapis Beni….jpg" alt="Tapis berbère" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-amber-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow">Nouveau</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-semibold text-gray-800 title-font">Tapis Beni Ouarain</h3>
                            <span class="text-amber-700 font-bold text-lg">1 200 MAD</span>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm">Tapis berbère en laine naturelle, tissé à la main dans les montagnes de l'Atlas. Un classique intemporel.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-1 text-amber-500">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <a href="ajout-au-panier.php"> <button class="bg-amber-600 hover:bg-amber-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 flex items-center">
                                <i class="fas fa-cart-plus mr-2"></i> Ajouter
                            </button></a>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg product-card transition duration-300">
                    <div class="relative overflow-hidden h-72">
                        <img src="image/Une théière à facettes décorée de fleurs gravées….jpg">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-semibold text-gray-800 title-font">Théière Fassi Argentée</h3>
                            <span class="text-amber-700 font-bold text-lg">450 MAD</span>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm">Théière traditionnelle en métal ciselé, fabriquée à Fès selon des techniques ancestrales. Parfaite pour le rituel du thé.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-1 text-amber-500">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                             <a href="ajout-au-panier.php"> <button class="bg-amber-600 hover:bg-amber-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 flex items-center">
                                <i class="fas fa-cart-plus mr-2"></i> Ajouter
                            </button></a>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg product-card transition duration-300">
                    <div class="relative overflow-hidden h-72">
                        <img src="image/Collier berbère en argent avec boîtes à….jpg" alt="Bijoux berbères" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow">Promo</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-semibold text-gray-800 title-font">Collier Amazigh Argent</h3>
                            <div>
                                <span class="text-gray-400 font-bold line-through mr-2 text-sm">650 MAD</span>
                                <span class="text-amber-700 font-bold text-lg">520 MAD</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm">Collier traditionnel en argent massif avec pierres semi-précieuses, fabriqué à Tiznit. Un bijou de caractère.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-1 text-amber-500">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <a href="ajout-au-panier.php"> <button class="bg-amber-600 hover:bg-amber-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 flex items-center">
                                <i class="fas fa-cart-plus mr-2"></i> Ajouter
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-16">
                <a href="produits.php" class="inline-block border-2 border-amber-600 text-amber-700 hover:bg-amber-600 hover:text-white font-bold py-3 px-10 rounded-full text-lg transition duration-300 shadow-md hover:shadow-lg">
                    Voir Tous Nos Produits
                </a>
            </div>
        </div>
    </section>

    <!-- Artisans Section -->
    <section id="artisans" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12 title-font">Rencontrez Nos Maîtres Artisans</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Artisan 1 -->
                <div class="artisan-card bg-gray-50 rounded-lg overflow-hidden transition duration-300 shadow-lg">
                    <div class="overflow-hidden h-72">
                        <img src="image/Moroccan Vintage Cushions _ Aztec House Australia….jpg" alt="Artisan tapissier" class="w-full h-full object-cover transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1 title-font">Mohamed Ait Benasser</h3>
                        <p class="text-amber-700 font-medium mb-3">Tapis berbères - Moyen Atlas</p>
                        <p class="text-gray-600 mb-4 text-sm">Mohamed perpétue la tradition familiale du tissage depuis 35 ans. Chaque pièce raconte une histoire à travers ses motifs.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-500 hover:text-amber-600"><i class="fab fa-facebook-f text-xl"></i></a>
                            <a href="#" class="text-gray-500 hover:text-amber-600"><i class="fab fa-instagram text-xl"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Artisan 2 -->
                <div class="artisan-card bg-gray-50 rounded-lg overflow-hidden transition duration-300 shadow-lg">
                    <div class="overflow-hidden h-72">
                        <img src="image/Apportez l'élégance de l'art marocain dans votre….jpg">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1 title-font">Fatima El Fassi</h3>
                        <p class="text-amber-700 font-medium mb-3">Céramique bleue - Fès</p>
                        <p class="text-gray-600 mb-4 text-sm">Maître céramiste, Fatima crée des pièces uniques avec les célèbres motifs bleus de Fès, un savoir-faire ancestral.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-500 hover:text-amber-600"><i class="fab fa-facebook-f text-xl"></i></a>
                            <a href="#" class="text-gray-500 hover:text-amber-600"><i class="fab fa-instagram text-xl"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Artisan 3 -->
                <div class="artisan-card bg-gray-50 rounded-lg overflow-hidden transition duration-300 shadow-lg">
                    <div class="overflow-hidden h-72">
                        <img src="image/86ad07cc-bff3-400a-84fd-11d7a1d40035.jpg">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1 title-font">Hassan Agadir</h3>
                        <p class="text-amber-700 font-medium mb-3">Bijoux berbères - Tiznit</p>
                        <p class="text-gray-600 mb-4 text-sm">Spécialiste du travail de l'argent, Hassan crée des bijoux inspirés des traditions amazighes du Sud marocain.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-500 hover:text-amber-600"><i class="fab fa-facebook-f text-xl"></i></a>
                            <a href="#" class="text-gray-500 hover:text-amber-600"><i class="fab fa-instagram text-xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History & About Section -->
    <section id="histoire" class="py-16 bg-amber-50 relative overflow-hidden">
        <div class="arabic-pattern absolute inset-0"></div>
        <div class="container mx-auto px-6 relative">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 title-font">Un Héritage Millénaire, Une Passion Partagée</h2>
                    <p class="text-gray-700 mb-4 leading-relaxed">L'artisanat marocain est le fruit d'un savoir-faire transmis de génération en génération, mêlant influences berbères, arabes et andalouses. Chaque pièce est une célébration de cette riche histoire culturelle.</p>
                    <p class="text-gray-700 mb-6 leading-relaxed">Fondé en 2010, Artisanat Marocain s'engage à préserver ce patrimoine en collaborant directement avec les artisans, assurant une rémunération équitable et la promotion de leur art exceptionnel à travers le monde.</p>
                    <a href="contact.php" class="inline-block border-2 border-amber-600 text-amber-700 hover:bg-amber-600 hover:text-white font-bold py-3 px-8 rounded-full transition duration-300 shadow-md hover:shadow-lg">
                        En savoir plus sur notre mission
                    </a>
                </div>
                <div class="lg:w-1/2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="rounded-lg overflow-hidden shadow-md h-52 md:h-64">
                            <img src="image/8cae4c27-7884-42b1-8732-2050bee7d469.jpg">
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-md h-52 md:h-64">
                            <img src="image/Collier berbère en argent avec boîtes à….jpg">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="stat-item">
                    <div class="stat-number" data-count="150">0</div>
                    <div class="stat-label uppercase">Artisans Partenaires</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="12">0</div>
                    <div class="stat-label uppercase">Régions Représentées</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="5000">0</div>
                    <div class="stat-label uppercase">Clients Satisfaits</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="45">0</div>
                    <div class="stat-label uppercase">Pays Livrés</div>
                </div>
            </div>

            <!-- Values Section -->
            <div class="mt-16">
                <h3 class="text-2xl font-bold text-center text-gray-800 mb-10 title-font">Nos Valeurs Fondamentales</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="value-card text-center p-6 bg-white rounded-lg shadow-md">
                        <div class="text-amber-600 text-4xl mb-4"><i class="fas fa-hands-helping"></i></div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Commerce Équitable</h4>
                        <p class="text-gray-600 text-sm">Rémunération juste et soutien direct à nos artisans.</p>
                    </div>
                    <div class="value-card text-center p-6 bg-white rounded-lg shadow-md">
                        <div class="text-amber-600 text-4xl mb-4"><i class="fas fa-leaf"></i></div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Matériaux Durables</h4>
                        <p class="text-gray-600 text-sm">Utilisation de ressources naturelles et locales.</p>
                    </div>
                    <div class="value-card text-center p-6 bg-white rounded-lg shadow-md">
                        <div class="text-amber-600 text-4xl mb-4"><i class="fas fa-history"></i></div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Savoir-Faire Ancestral</h4>
                        <p class="text-gray-600 text-sm">Préservation des techniques traditionnelles.</p>
                    </div>
                    <div class="value-card text-center p-6 bg-white rounded-lg shadow-md">
                        <div class="text-amber-600 text-4xl mb-4"><i class="fas fa-award"></i></div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Qualité Exceptionnelle</h4>
                        <p class="text-gray-600 text-sm">Chaque pièce est unique et confectionnée avec soin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12 title-font">Ce Que Disent Nos Clients</h2>
            
            <div class="relative">
                <div id="testimonialContainer" class="overflow-hidden">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-slide bg-gray-100 p-8 rounded-lg shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex space-x-1 text-amber-500 text-xl"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                        <p class="text-gray-700 mb-6 italic leading-relaxed">"Le tapis que j'ai acheté est magnifique et de qualité exceptionnelle. La livraison a été rapide et l'emballage soigné. Je recommande vivement!"</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client" class="w-14 h-14 rounded-full mr-4 border-2 border-amber-200">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Sophie Martin</h4>
                                <p class="text-gray-600 text-sm">Paris, France</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="testimonial-slide bg-gray-100 p-8 rounded-lg shadow-lg hidden">
                        <div class="flex items-center mb-4">
                             <div class="flex space-x-1 text-amber-500 text-xl"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        </div>
                        <p class="text-gray-700 mb-6 italic leading-relaxed">"La théière est encore plus belle en vrai que sur les photos. Un vrai travail d'artisanat. Je suis ravi de mon achat et je reviendrai certainement."</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-14 h-14 rounded-full mr-4 border-2 border-amber-200">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Thomas Dubois</h4>
                                <p class="text-gray-600 text-sm">Bruxelles, Belgique</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="testimonial-slide bg-gray-100 p-8 rounded-lg shadow-lg hidden">
                        <div class="flex items-center mb-4">
                            <div class="flex space-x-1 text-amber-500 text-xl"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                        <p class="text-gray-700 mb-6 italic leading-relaxed">"J'ai offert le collier berbère à ma femme qui l'a adoré. La qualité de l'argent est impeccable et le design traditionnel est superbe. Service client très professionnel."</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client" class="w-14 h-14 rounded-full mr-4 border-2 border-amber-200">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Jean-Luc Moreau</h4>
                                <p class="text-gray-600 text-sm">Montréal, Canada</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="prevTestimonial" class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-4 md:-translate-x-8 bg-white hover:bg-amber-500 hover:text-white text-amber-600 p-3 rounded-full shadow-md transition duration-300 focus:outline-none">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextTestimonial" class="absolute top-1/2 right-0 transform -translate-y-1/2 translate-x-4 md:translate-x-8 bg-white hover:bg-amber-500 hover:text-white text-amber-600 p-3 rounded-full shadow-md transition duration-300 focus:outline-none">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

 
   <?php include('footer.php'); ?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile Menu Toggle
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const navLinks = document.getElementById('navLinks');
            
            if (mobileMenuButton && navLinks) {
                mobileMenuButton.addEventListener('click', function() {
                    navLinks.classList.toggle('hidden'); // Toggles visibility
                    navLinks.classList.toggle('mobile-menu-open'); // Toggles mobile specific layout styles
                });
            }
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        // Close mobile menu if open before scrolling
                        if (navLinks && navLinks.classList.contains('mobile-menu-open')) {
                            navLinks.classList.add('hidden');
                            navLinks.classList.remove('mobile-menu-open');
                        }
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Testimonial Slider
            const testimonialSlides = document.querySelectorAll('.testimonial-slide');
            const prevTestimonialButton = document.getElementById('prevTestimonial');
            const nextTestimonialButton = document.getElementById('nextTestimonial');
            let currentTestimonialIndex = 0;

            function showTestimonial(index) {
                testimonialSlides.forEach((slide, i) => {
                    slide.classList.toggle('hidden', i !== index);
                });
            }

            if (testimonialSlides.length > 0) {
                showTestimonial(currentTestimonialIndex);

                if (prevTestimonialButton && nextTestimonialButton) {
                    nextTestimonialButton.addEventListener('click', () => {
                        currentTestimonialIndex = (currentTestimonialIndex + 1) % testimonialSlides.length;
                        showTestimonial(currentTestimonialIndex);
                    });

                    prevTestimonialButton.addEventListener('click', () => {
                        currentTestimonialIndex = (currentTestimonialIndex - 1 + testimonialSlides.length) % testimonialSlides.length;
                        showTestimonial(currentTestimonialIndex);
                    });
                }
            }

            // Stats Counter Animation
            function animateValue(obj, start, end, duration) {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    obj.innerHTML = Math.floor(progress * (end - start) + start).toLocaleString(); // Added toLocaleString for formatting
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            }

            const statNumbers = document.querySelectorAll('.stat-number');
            // Use Intersection Observer to trigger animation when section is visible
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const endValue = parseInt(entry.target.getAttribute('data-count'));
                        animateValue(entry.target, 0, endValue, 2000);
                        observer.unobserve(entry.target); // Animate only once
                    }
                });
            }, { threshold: 0.5 }); // Trigger when 50% of the element is visible

            statNumbers.forEach(obj => {
                observer.observe(obj);
            });

            // Update current year in footer
            const currentYearSpan = document.getElementById('currentYear');
            if (currentYearSpan) {
                currentYearSpan.textContent = new Date().getFullYear();
            }
        });
    </script>
</body>
</html>