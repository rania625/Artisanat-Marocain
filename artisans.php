 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Artisans - Artisanat Marocain</title>
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
        
        .artisan-card {
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .artisan-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .craft-icon {
            transition: all 0.3s ease;
        }
        
        .craft-icon:hover {
            transform: scale(1.1);
        }
        
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .region-filter.active {
            background-color: #d4a373;
            color: white;
        }
    </style>
</head>
<body>
    <?php include('header.php');  ?>

    <!-- Hero Section -->
    <section class="hero-section text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-serif fade-in">Nos Artisans</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto fade-in">Rencontrez les mains talentueuses qui perpétuent les traditions séculaires de l'artisanat marocain</p>
        </div>
    </section>

    <!-- Artisans Introduction -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10 fade-in">
                    <h2 class="text-3xl font-bold text-amber-800 mb-6 font-serif">Les Gardiens de Notre Patrimoine</h2>
                    <p class="text-lg mb-6">Derrière chaque pièce d'artisanat marocain se cache une histoire, une famille, un savoir-faire transmis de génération en génération. Nos artisans sont les dépositaires de ces traditions millénaires.</p>
                    <p class="text-lg mb-6">Nous travaillons avec plus de 200 artisans répartis dans tout le Maroc, chacun spécialisé dans un métier spécifique selon les traditions de sa région.</p>
                    <div class="flex items-center">
                        <i class="fas fa-certificate text-amber-600 text-2xl mr-3"></i>
                        <span class="text-sm text-gray-600">Tous nos artisans sont certifiés maîtres dans leur discipline</span>
                    </div>
                </div>
                <div class="md:w-1/2 fade-in">
                    <img src="https://images.unsplash.com/photo-1564466809058-bf4114d55352?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1430&q=80" alt="Artisan marocain" class="rounded-lg shadow-xl w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Regions Filter -->
    <section class="py-10 bg-amber-50">
        <div class="container mx-auto px-4">
            <h3 class="text-xl font-semibold text-center text-amber-800 mb-6">Filtrer par région :</h3>
            <div class="flex flex-wrap justify-center gap-3">
                <button class="region-filter active px-4 py-2 rounded-full border border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white transition" data-region="all">
                    Toutes
                </button>
                <button class="region-filter px-4 py-2 rounded-full border border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white transition" data-region="marrakech">
                    Marrakech
                </button>
                <button class="region-filter px-4 py-2 rounded-full border border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white transition" data-region="fes">
                    Fès
                </button>
                <button class="region-filter px-4 py-2 rounded-full border border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white transition" data-region="rabat">
                    Rabat
                </button>
                <button class="region-filter px-4 py-2 rounded-full border border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white transition" data-region="safi">
                    Safi
                </button>
                <button class="region-filter px-4 py-2 rounded-full border border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white transition" data-region="atlas">
                    Atlas
                </button>
                <button class="region-filter px-4 py-2 rounded-full border border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white transition" data-region="sahara">
                    Sahara
                </button>
            </div>
        </div>
    </section>

    <!-- Crafts Filter -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-xl font-semibold text-center text-amber-800 mb-6">Filtrer par métier :</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-7 gap-4">
                <div class="craft-icon text-center cursor-pointer" data-craft="all">
                    <div class="bg-amber-100 text-amber-800 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-star text-2xl"></i>
                    </div>
                    <span class="text-sm">Tous</span>
                </div>
                <div class="craft-icon text-center cursor-pointer" data-craft="pottery">
                    <div class="bg-amber-100 text-amber-800 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-jug text-2xl"></i>
                    </div>
                    <span class="text-sm">Potterie</span>
                </div>
                <div class="craft-icon text-center cursor-pointer" data-craft="leather">
                    <div class="bg-amber-100 text-amber-800 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-shoe-prints text-2xl"></i>
                    </div>
                    <span class="text-sm">Cuir</span>
                </div>
                <div class="craft-icon text-center cursor-pointer" data-craft="carpet">
                    <div class="bg-amber-100 text-amber-800 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-rug text-2xl"></i>
                    </div>
                    <span class="text-sm">Tapis</span>
                </div>
                <div class="craft-icon text-center cursor-pointer" data-craft="zellige">
                    <div class="bg-amber-100 text-amber-800 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-border-style text-2xl"></i>
                    </div>
                    <span class="text-sm">Zellige</span>
                </div>
                <div class="craft-icon text-center cursor-pointer" data-craft="weaving">
                    <div class="bg-amber-100 text-amber-800 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-yarn text-2xl"></i>
                    </div>
                    <span class="text-sm">Tissage</span>
                </div>
                <div class="craft-icon text-center cursor-pointer" data-craft="jewelry">
                    <div class="bg-amber-100 text-amber-800 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-gem text-2xl"></i>
                    </div>
                    <span class="text-sm">Bijoux</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Artisans Grid -->
    <section class="py-16 bg-amber-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artisan 1 -->
                <div class="artisan-card bg-white rounded-lg overflow-hidden fade-in" data-region="marrakech" data-craft="leather">
                    <img src="https://images.unsplash.com/photo-1589159344818-5daf4b1f0e0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Artisan maroquinier" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-xl font-bold text-amber-800">Abdellah El Fassi</h3>
                                <p class="text-amber-600">Maître Maroquinier</p>
                            </div>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-xs">Marrakech</span>
                        </div>
                        <p class="text-gray-700 mb-4">Héritier d'une longue lignée de maroquiniers, Abdellah crée des pièces en cuir tanné aux plantes selon des méthodes vieilles de 8 siècles.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-award text-amber-600 mr-2"></i>
                            <span>35 ans d'expérience</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <a href="#" class="text-amber-700 hover:text-amber-800 font-medium flex items-center">
                                Voir le profil
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artisan 2 -->
                <div class="artisan-card bg-white rounded-lg overflow-hidden fade-in" data-region="safi" data-craft="pottery">
                    <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1432&q=80" alt="Artisan potier" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-xl font-bold text-amber-800">Fatima Zahra</h3>
                                <p class="text-amber-600">Maître Potière</p>
                            </div>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-xs">Safi</span>
                        </div>
                        <p class="text-gray-700 mb-4">Spécialiste de la poterie bleue de Safi depuis 25 ans, Fatima perpétue les techniques ancestrales de cuisson et d'émaillage.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-award text-amber-600 mr-2"></i>
                            <span>Prix National d'Artisanat 2018</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <a href="#" class="text-amber-700 hover:text-amber-800 font-medium flex items-center">
                                Voir le profil
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artisan 3 -->
                <div class="artisan-card bg-white rounded-lg overflow-hidden fade-in" data-region="atlas" data-craft="weaving">
                    <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1526&q=80" alt="Artisan tisseur" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-xl font-bold text-amber-800">Khadija Benchekroun</h3>
                                <p class="text-amber-600">Maître Tisseuse</p>
                            </div>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-xs">Atlas</span>
                        </div>
                        <p class="text-gray-700 mb-4">Khadija maîtrise l'art complexe du tissage des tapis berbères, combinant motifs géométriques et couleurs végétales naturelles.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-award text-amber-600 mr-2"></i>
                            <span>Formée par sa grand-mère à l'âge de 8 ans</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <a href="#" class="text-amber-700 hover:text-amber-800 font-medium flex items-center">
                                Voir le profil
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artisan 4 -->
                <div class="artisan-card bg-white rounded-lg overflow-hidden fade-in" data-region="fes" data-craft="zellige">
                    <img src="https://images.unsplash.com/photo-1567784177951-6b2a2f8a4e3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Artisan zellige" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-xl font-bold text-amber-800">Mohamed Alami</h3>
                                <p class="text-amber-600">Maître Zelligeur</p>
                            </div>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-xs">Fès</span>
                        </div>
                        <p class="text-gray-700 mb-4">Mohamed maîtrise l'art délicat du zellige, découpant à la main chaque pièce de céramique émaillée pour créer des motifs géométriques complexes.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-award text-amber-600 mr-2"></i>
                            <span>28 ans d'expérience</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <a href="#" class="text-amber-700 hover:text-amber-800 font-medium flex items-center">
                                Voir le profil
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artisan 5 -->
                <div class="artisan-card bg-white rounded-lg overflow-hidden fade-in" data-region="sahara" data-craft="jewelry">
                    <img src="https://images.unsplash.com/photo-1584308666744-24d5c474b2b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1430&q=80" alt="Artisan bijoutier" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-xl font-bold text-amber-800">Amina Oulad</h3>
                                <p class="text-amber-600">Maître Bijoutière</p>
                            </div>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-xs">Sahara</span>
                        </div>
                        <p class="text-gray-700 mb-4">Spécialiste des bijoux sahariens en argent, Amina crée des pièces uniques inspirées des motifs traditionnels des nomades du désert.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-award text-amber-600 mr-2"></i>
                            <span>Exposition internationale 2022</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <a href="#" class="text-amber-700 hover:text-amber-800 font-medium flex items-center">
                                Voir le profil
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artisan 6 -->
                <div class="artisan-card bg-white rounded-lg overflow-hidden fade-in" data-region="rabat" data-craft="carpet">
                    <img src="https://images.unsplash.com/photo-1564466809058-bf4114d55352?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1430&q=80" alt="Artisan tapissier" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-xl font-bold text-amber-800">Hassan Berrada</h3>
                                <p class="text-amber-600">Maître Tapissier</p>
                            </div>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-xs">Rabat</span>
                        </div>
                        <p class="text-gray-700 mb-4">Hassan perpétue la tradition des tapis Rabati, utilisant exclusivement de la laine naturelle et des teintures végétales pour créer des œuvres uniques.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-award text-amber-600 mr-2"></i>
                            <span>Famille de tapissiers depuis 4 générations</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <a href="#" class="text-amber-700 hover:text-amber-800 font-medium flex items-center">
                                Voir le profil
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex space-x-2">
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-gray-400 hover:text-amber-600"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="border-2 border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white px-8 py-3 rounded-full transition duration-300">
                    Voir plus d'artisans
                </button>
            </div>
        </div>
    </section>

    <!-- Apprenticeship Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-amber-800 text-white rounded-xl p-8 md:p-12 flex flex-col md:flex-row items-center">
                <div class="md:w-2/3 mb-8 md:mb-0 md:pr-10">
                    <h2 class="text-3xl font-bold mb-6 font-serif">Devenez Apprenti Artisan</h2>
                    <p class="text-lg mb-6">Nous proposons des programmes d'apprentissage pour préserver et transmettre ces savoir-faire ancestraux. Rejoignez nos maîtres artisans pour apprendre les techniques traditionnelles.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-white text-amber-800 hover:bg-amber-100 px-6 py-3 rounded-full font-medium transition">
                            Programme d'apprentissage
                        </button>
                        <button class="border-2 border-white text-white hover:bg-white hover:text-amber-800 px-6 py-3 rounded-full font-medium transition">
                            Stages découverte
                        </button>
                    </div>
                </div>
                <div class="md:w-1/3">
                    <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1432&q=80" alt="Apprenti artisan" class="rounded-lg shadow-xl w-full h-auto">
                </div>
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
            
            // Filter functionality
            const regionFilters = document.querySelectorAll('.region-filter');
            const craftIcons = document.querySelectorAll('.craft-icon');
            const artisanCards = document.querySelectorAll('.artisan-card');
            
            let activeRegion = 'all';
            let activeCraft = 'all';
            
            // Region filter click handler
            regionFilters.forEach(filter => {
                filter.addEventListener('click', function() {
                    // Update active state
                    regionFilters.forEach(f => f.classList.remove('active', 'bg-amber-700', 'text-white'));
                    this.classList.add('active', 'bg-amber-700', 'text-white');
                    
                    // Get filter value
                    activeRegion = this.dataset.region;
                    filterArtisans();
                });
            });
            
            // Craft filter click handler
            craftIcons.forEach(icon => {
                icon.addEventListener('click', function() {
                    // Highlight selected icon
                    craftIcons.forEach(i => {
                        i.querySelector('div').classList.remove('bg-amber-700', 'text-white');
                        i.querySelector('div').classList.add('bg-amber-100', 'text-amber-800');
                    });
                    
                    this.querySelector('div').classList.remove('bg-amber-100', 'text-amber-800');
                    this.querySelector('div').classList.add('bg-amber-700', 'text-white');
                    
                    // Get filter value
                    activeCraft = this.dataset.craft;
                    filterArtisans();
                });
            });
            
            // Filter artisans based on active filters
            function filterArtisans() {
                artisanCards.forEach(card => {
                    const cardRegion = card.dataset.region;
                    const cardCraft = card.dataset.craft;
                    
                    const regionMatch = activeRegion === 'all' || cardRegion === activeRegion;
                    const craftMatch = activeCraft === 'all' || cardCraft === activeCraft;
                    
                    if (regionMatch && craftMatch) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
            
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