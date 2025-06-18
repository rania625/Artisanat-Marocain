 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Histoire - Artisanat Marocain</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f5f0;
            color: #333;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1564501047431-9144565e8661?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -40px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #d4a373;
            border: 3px solid #fefae0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            height: 100%;
            width: 2px;
            background-color: #d4a373;
        }
        
        .artisan-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .artisan-card {
            transition: all 0.3s ease;
        }
        
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

  <?php include('header.php');  ?>
    <!-- Hero Section -->
    <section class="hero-section text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-serif fade-in">Notre Histoire</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto fade-in">Découvrez l'héritage millénaire de l'artisanat marocain et notre passion pour préserver ces traditions</p>
        </div>
    </section>

    <!-- Introduction -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10 fade-in">
                    <h2 class="text-3xl font-bold text-amber-800 mb-6 font-serif">L'Âme de l'Artisanat Marocain</h2>
                    <p class="text-lg mb-6">Depuis des siècles, l'artisanat marocain incarne l'âme et la richesse culturelle de notre pays. Chaque pièce raconte une histoire, chaque motif porte un symbole, chaque couleur évoque une région.</p>
                    <p class="text-lg mb-6">Notre entreprise est née de la passion pour ces traditions ancestrales et de la volonté de les partager avec le monde tout en soutenant les artisans locaux.</p>
                    <button class="bg-amber-700 hover:bg-amber-800 text-white px-6 py-3 rounded-full transition duration-300">
                        Découvrez nos collections
                    </button>
                </div>
                <div class="md:w-1/2 fade-in">
                    <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1432&q=80" alt="Artisan marocain" class="rounded-lg shadow-xl w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="py-16 bg-amber-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-amber-800 mb-16 font-serif">Notre Parcours</h2>
            
            <div class="relative pl-16 timeline">
                <!-- Timeline Item 1 -->
                <div class="relative mb-16 timeline-item fade-in">
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="bg-amber-100 text-amber-800 p-3 rounded-full mr-4">
                                <i class="fas fa-seedling text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-amber-800">1985 - Les Débuts</h3>
                        </div>
                        <p>Fondation de notre atelier familial à Fès par Mohamed El Amrani, maître artisan en zellige. Nous commençons avec une petite équipe de 5 artisans spécialisés dans les mosaïques traditionnelles.</p>
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="relative mb-16 timeline-item fade-in">
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="bg-amber-100 text-amber-800 p-3 rounded-full mr-4">
                                <i class="fas fa-expand text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-amber-800">1998 - Expansion</h3>
                        </div>
                        <p>Ouverture de notre premier showroom à Marrakech et diversification de nos produits avec l'introduction de la maroquinerie et de la poterie berbère. Nous employons désormais 30 artisans venant de différentes régions du Maroc.</p>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="relative mb-16 timeline-item fade-in">
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="bg-amber-100 text-amber-800 p-3 rounded-full mr-4">
                                <i class="fas fa-globe text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-amber-800">2010 - International</h3>
                        </div>
                        <p>Première participation à des salons internationaux d'artisanat en Europe. Nos produits commencent à être exportés vers la France, l'Espagne et les États-Unis. Création de notre site e-commerce.</p>
                    </div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="relative timeline-item fade-in">
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="bg-amber-100 text-amber-800 p-3 rounded-full mr-4">
                                <i class="fas fa-award text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-amber-800">2023 - Reconnaissance</h3>
                        </div>
                        <p>Obtention du label "Entreprise du Patrimoine Vivant" et collaboration avec des designers internationaux pour des collections contemporaines inspirées des motifs traditionnels. Nous travaillons avec plus de 200 artisans répartis dans 12 coopératives à travers le Maroc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artisans Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-amber-800 mb-16 font-serif">Nos Maîtres Artisans</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Artisan 1 -->
                <div class="artisan-card bg-white rounded-lg overflow-hidden shadow-lg fade-in">
                    <img src="https://images.unsplash.com/photo-1589159344818-5daf4b1f0e0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Artisan potier" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-amber-800 mb-2">Fatima Zahra</h3>
                        <p class="text-amber-600 mb-4">Maître Potière - Safi</p>
                        <p class="text-gray-700">Spécialiste de la poterie bleue de Safi depuis 25 ans, Fatima perpétue les techniques ancestrales de cuisson et d'émaillage.</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm">Potterie</span>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm">Céramique</span>
                        </div>
                    </div>
                </div>
                
                <!-- Artisan 2 -->
                <div class="artisan-card bg-white rounded-lg overflow-hidden shadow-lg fade-in">
                    <img src="https://images.unsplash.com/photo-1564466809058-bf4114d55352?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1430&q=80" alt="Artisan maroquinier" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-amber-800 mb-2">Abdellah El Fassi</h3>
                        <p class="text-amber-600 mb-4">Maître Maroquinier - Fès</p>
                        <p class="text-gray-700">Héritier d'une longue lignée de maroquiniers, Abdellah crée des pièces en cuir tanné aux plantes selon des méthodes vieilles de 8 siècles.</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm">Cuir</span>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm">Maroquinerie</span>
                        </div>
                    </div>
                </div>
                
                <!-- Artisan 3 -->
                <div class="artisan-card bg-white rounded-lg overflow-hidden shadow-lg fade-in">
                    <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1526&q=80" alt="Artisan tapissier" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-amber-800 mb-2">Khadija Benchekroun</h3>
                        <p class="text-amber-600 mb-4">Maître Tisseuse - Rabat</p>
                        <p class="text-gray-700">Khadija maîtrise l'art complexe du tissage des tapis Rabati, combinant motifs géométriques et couleurs végétales naturelles.</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm">Tapis</span>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm">Tissage</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 fade-in">
                <button class="border-2 border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white px-8 py-3 rounded-full transition duration-300">
                    Rencontrer tous nos artisans
                </button>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 bg-amber-800 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 font-serif">Nos Valeurs</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="text-center p-6 fade-in">
                    <div class="bg-amber-100 text-amber-800 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-hands-helping text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Équité</h3>
                    <p>Nous garantissons des conditions de travail dignes et une rémunération juste à tous nos artisans, avec une répartition équitable des bénéfices.</p>
                </div>
                
                <!-- Value 2 -->
                <div class="text-center p-6 fade-in">
                    <div class="bg-amber-100 text-amber-800 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-leaf text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Durabilité</h3>
                    <p>Utilisation exclusive de matériaux naturels et locaux, avec des processus de production respectueux de l'environnement et zéro déchet.</p>
                </div>
                
                <!-- Value 3 -->
                <div class="text-center p-6 fade-in">
                    <div class="bg-amber-100 text-amber-800 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-history text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Authenticité</h3>
                    <p>Préservation des techniques traditionnelles transmises de génération en génération, avec un strict respect des motifs et symboles originaux.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center fade-in">
            <h2 class="text-3xl font-bold text-amber-800 mb-6 font-serif">Prêt à découvrir l'artisanat marocain ?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Chaque achat soutient directement nos artisans et contribue à préserver ces savoir-faire uniques.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <button class="bg-amber-700 hover:bg-amber-800 text-white px-8 py-4 rounded-full transition duration-300">
                    Explorer notre boutique
                </button>
                <button class="border-2 border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white px-8 py-4 rounded-full transition duration-300">
                    Visiter nos ateliers
                </button>
            </div>
        </div>
    </section>

   <?php include('footer.php'); ?>


    <script>
        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        fadeInObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            fadeElements.forEach(element => {
                element.classList.add('opacity-0', 'translate-y-10');
                fadeInObserver.observe(element);
            });
            
            // Mobile menu toggle (would need more implementation)
            const mobileMenuButton = document.querySelector('button.md\\:hidden');
            mobileMenuButton.addEventListener('click', function() {
                // Implementation for mobile menu toggle would go here
                console.log('Mobile menu clicked');
            });
        });
    </script>
</body>
</html>