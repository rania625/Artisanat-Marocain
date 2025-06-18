<?php include('header.php'); ?>
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



    <!-- Contact Section -->

      <section class="hero-section text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-serif fade-in">Contactez-Nous</h1>
          
        </div>
    </section> 
  
            
            <div class="flex flex-col lg:flex-row bg-white p-8 md:p-12 rounded-lg shadow-xl">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 title-font">Nos Coordonnées</h3>
                    <p class="text-gray-700 mb-8 leading-relaxed">Nous sommes à votre disposition pour toute question concernant nos produits, une commande spéciale ou simplement pour échanger sur l'artisanat marocain.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-amber-100 p-3 rounded-full mr-4 shrink-0">
                                <i class="fas fa-map-marker-alt text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 text-lg">Adresse</h4>
                                <p class="text-gray-600">123 Rue des Artisans, Médina, Marrakech 40000, Maroc</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-amber-100 p-3 rounded-full mr-4 shrink-0">
                                <i class="fas fa-phone-alt text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 text-lg">Téléphone</h4>
                                <p class="text-gray-600">+212 5 24 34 56 78</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-amber-100 p-3 rounded-full mr-4 shrink-0">
                                <i class="fas fa-envelope text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 text-lg">Email</h4>
                                <p class="text-gray-600">contact@artisanat-marocain-tresors.com</p>
                            </div>
                        </div>
                         <div class="flex items-start">
                            <div class="bg-amber-100 p-3 rounded-full mr-4 shrink-0">
                                <i class="fas fa-clock text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 text-lg">Heures d'ouverture</h4>
                                <p class="text-gray-600">Lundi - Vendredi: 9h00 - 18h00</p>
                                <p class="text-gray-600">Samedi: 10h00 - 16h00</p>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-800 mt-10 mb-4 title-font">Suivez Notre Aventure</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-200 hover:bg-amber-600 hover:text-white w-10 h-10 rounded-full flex items-center justify-center text-gray-700 transition duration-300 shadow"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="bg-gray-200 hover:bg-amber-600 hover:text-white w-10 h-10 rounded-full flex items-center justify-center text-gray-700 transition duration-300 shadow"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="bg-gray-200 hover:bg-amber-600 hover:text-white w-10 h-10 rounded-full flex items-center justify-center text-gray-700 transition duration-300 shadow"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" class="bg-gray-200 hover:bg-amber-600 hover:text-white w-10 h-10 rounded-full flex items-center justify-center text-gray-700 transition duration-300 shadow"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="lg:w-1/2 lg:pl-10">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 title-font">Envoyez-nous un Message</h3>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nom complet</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required>
                            </div>
                            <div>
                                <label for="email_contact" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email_contact" name="email_contact" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Sujet</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Votre message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 shadow-sm" required></textarea>
                        </div>
                        <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 w-full shadow-md hover:shadow-lg text-lg">
                            Envoyer le Message
                        </button>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            <div class="mt-12 rounded-lg overflow-hidden shadow-xl">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.372049699235!2d-7.992200084880779!3d31.62290598133474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d6b018551%3A0x498d62a7a1a9e1a3!2sJemaa%20el-Fnaa!5e0!3m2!1sfr!2sma!4v1678886400000!5m2!1sfr!2sma" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
 