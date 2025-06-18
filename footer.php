  <!-- FOOTER -->
    <footer class="bg-yellow-900 text-yellow-50 pt-12 pb-6 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
                <div>
                    <h2 class="font-serif font-bold text-2xl mb-3">Artisanat Marocain</h2>
                    <p>Préservant et partageant les trésors de l'artisanat marocain.</p>
                    <div class="flex gap-4 mt-4">
                        <a href="#" class="hover:text-yellow-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-yellow-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-yellow-300"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold mb-3">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="hover:text-yellow-300">Accueil</a></li>
                        <li><a href="produits.php" class="hover:text-yellow-300">Produits</a></li>
                        <li><a href="artisans.php" class="hover:text-yellow-300">Artisans</a></li>
                        <li><a href="about.php" class="hover:text-yellow-300">Notre Histoire</a></li>
                        <li><a href="contact.php" class="hover:text-yellow-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-3">Contact</h4>
                    <ul class="space-y-2 text-sm">
                        <li><i class="fas fa-map-marker-alt mr-2"></i> 123 Rue des Artisans, Marrakech</li>
                        <li><i class="fas fa-phone-alt mr-2"></i> +212 6 12 34 56 78</li>
                        <li><i class="fas fa-envelope mr-2"></i> contact@artisanatmarocain.com</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-3">Newsletter</h4>
                    <p class="mb-2">Recevez nos nouveautés et offres spéciales :</p>
                    <form class="flex">
                        <input type="email" placeholder="Votre email" class="bg-yellow-800 text-yellow-50 px-3 py-2 rounded-l focus:outline-none" required>
                        <button class="bg-yellow-400 hover:bg-yellow-300 text-yellow-900 px-4 rounded-r font-bold">OK</button>
                    </form>
                </div>
            </div>
            <div class="text-center text-yellow-100 pt-6 border-t border-yellow-800 text-xs">
                &copy; <?php echo date('Y'); ?> Artisanat Marocain. Tous droits réservés.
            </div>
        </div>
    </footer>