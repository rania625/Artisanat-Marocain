<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisanat Marocain | Trésors Faits Main</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        
        .title-font {
            font-family: 'Playfair Display', serif;
        }
        
        .hero-pattern {
            background-image: url('https://images.unsplash.com/photo-1551651685-7713df254b0e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .product-card:hover, .artisan-card:hover, .category-card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .artisan-card:hover img {
            transform: scale(1.05);
        }
        
        .arabic-pattern {
            background-image: url('https://www.transparenttextures.com/patterns/morocco.png');
            opacity: 0.05; /* Slightly more subtle */
        }

        .testimonial-slide {
            transition: opacity 0.5s ease-in-out;
        }
        .testimonial-slide.hidden {
            display: none;
        }
        .stat-number {
            font-weight: 700;
            font-size: 2.5rem; /* Larger stat numbers */
            color: #c05621; /* Amber color for stats */
        }
        .stat-label {
            font-size: 0.9rem;
            color: #4a5568; /* Gray-700 */
        }
        /* Mobile Menu Styling */
        #navLinks.mobile-menu-open {
            display: flex !important;
            flex-direction: column;
            position: absolute;
            top: 60px; /* Adjust based on nav height */
            left: 0;
            right: 0;
            background-color: white;
            padding: 1rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            z-index: 40; /* Below sticky nav */
            border-top: 1px solid #e2e8f0; /* Light border */
        }
        #navLinks.mobile-menu-open a {
            padding: 0.75rem 0;
            border-bottom: 1px solid #f7fafc; /* Lighter separator */
        }
        #navLinks.mobile-menu-open a:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="#accueil" class="text-2xl font-bold text-amber-800 title-font">Artisanat Marocain</a>
                </div>
                
                <div id="navLinks" class="hidden md:flex items-center space-x-1 lg:space-x-8">
                    <a href="index.php" class="text-gray-700 hover:text-amber-600 px-3 py-2 rounded-md text-sm font-medium">Accueil</a>
                    <a href="produits.php" class="text-gray-700 hover:text-amber-600 px-3 py-2 rounded-md text-sm font-medium">Produits</a>
                    <a href="artisans.php" class="text-gray-700 hover:text-amber-600 px-3 py-2 rounded-md text-sm font-medium">Artisans</a>
                    <a href="about.php" class="text-gray-700 hover:text-amber-600 px-3 py-2 rounded-md text-sm font-medium">Notre Histoire</a>
                    <a href="contact.php" class="text-gray-700 hover:text-amber-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="ajout-au-panier.php" class="text-gray-700 hover:text-amber-600 relative">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-amber-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </a>
                    <button id="mobileMenuButton" class="md:hidden focus:outline-none">
                        <i class="fas fa-bars text-gray-700 text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>