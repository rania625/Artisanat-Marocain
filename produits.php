<?php
// --- DONNÉES MOCKÉES POUR DEMO ---
// Remplacez par vos propres requêtes SQL/ORM en production !
$categories = [
    ['id' => 0, 'nom' => 'Tout'],
    ['id' => 1, 'nom' => 'Céramique'],
    ['id' => 2, 'nom' => 'Textiles'],
    ['id' => 3, 'nom' => 'Bijoux'],
    ['id' => 4, 'nom' => 'Cuir'],
    ['id' => 5, 'nom' => 'Décoration']
];

function formatPrice($price) {
    return number_format($price, 0, ',', ' ') . ' DH';
}
function generateStars($rating) {
    $full = floor($rating); $half = $rating - $full >= 0.5 ? 1 : 0;
    $out = str_repeat('<i class="fas fa-star text-yellow-400"></i>', $full);
    if ($half) $out .= '<i class="fas fa-star-half-alt text-yellow-400"></i>';
    $out .= str_repeat('<i class="far fa-star text-yellow-400"></i>', 5 - $full - $half);
    return $out;
}
$products = [
    [
        'id' => 1, 'nom' => 'Tajine Traditionnel', 'description' => 'Tajine en terre cuite, décor géométrique, idéal pour la cuisson.', 
        'image_url' => 'image/tajine1.jpg', 'categorie_nom' => 'Céramique', 'origine' => 'Fès', 
        'artisan_prenom' => 'Khalid', 'artisan_nom' => 'Bensouda', 'prix' => 320, 'prix_promo' => 270,
        'note_moyenne' => 4.5, 'nouveau' => true, 'en_promo' => true, 'stock' => 10
    ],
    [
        'id' => 2, 'nom' => 'Tapis Beni Ouarain', 'description' => 'Tapis en laine blanche, losanges noirs, tissage main.', 
        'image_url' => 'image/tapi1.jpg', 'categorie_nom' => 'Textiles', 'origine' => 'Atlas', 
        'artisan_prenom' => 'Fatima', 'artisan_nom' => 'Ait Ouarain', 'prix' => 2800, 'prix_promo' => null,
        'note_moyenne' => 5, 'nouveau' => true, 'en_promo' => false, 'stock' => 3
    ],
    [
        'id' => 3, 'nom' => 'Collier Amazigh', 'description' => 'Collier berbère en argent et perles colorées, pièce unique.', 
        'image_url' => 'image/Collier 1.jpg', 'categorie_nom' => 'Bijoux', 'origine' => 'Tiznit', 
        'artisan_prenom' => 'Hassan', 'artisan_nom' => 'El Gour', 'prix' => 600, 'prix_promo' => 520,
        'note_moyenne' => 4, 'nouveau' => false, 'en_promo' => true, 'stock' => 1
    ],
    [
        'id' => 4, 'nom' => 'Pouf en Cuir', 'description' => 'Pouf marocain cousu main, cuir naturel, motif traditionnel.', 
        'image_url' => 'image/cuire 1.jpg', 'categorie_nom' => 'Cuir', 'origine' => 'Marrakech', 
        'artisan_prenom' => 'Abdellah', 'artisan_nom' => 'Qasimi', 'prix' => 850, 'prix_promo' => null,
        'note_moyenne' => 4.8, 'nouveau' => false, 'en_promo' => false, 'stock' => 7
    ],
    [
        'id' => 5, 'nom' => 'Plateau Zellige', 'description' => 'Plateau en bois incrusté de zellige, idéal pour le thé.', 
        'image_url' => 'image/tbela1.jpg', 'categorie_nom' => 'Décoration', 'origine' => 'Fès', 
        'artisan_prenom' => 'Samira', 'artisan_nom' => 'El Fassi', 'prix' => 450, 'prix_promo' => null,
        'note_moyenne' => 4.2, 'nouveau' => true, 'en_promo' => false, 'stock' => 2
    ],
    // ... Ajoutez plus de produits ici ...
];

// Filtres (en vrai, faites via SQL)
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : 0;
if ($categoryFilter && $categoryFilter != 0) {
    $products = array_filter($products, fn($p) => $p['categorie_nom'] === $categories[$categoryFilter]['nom']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nos Produits Artisanaux - Artisanat Marocain</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <style>
        body { font-family: 'Poppins',sans-serif; background: #f8f7f4; }
        .hero-prods {
            background: linear-gradient(115deg, #d4af37 0%, #fff7e6 100%);
            background-size: cover;
        }
        .glass-bg {
            background: rgba(255,255,255,0.70);
            backdrop-filter: blur(6px);
            box-shadow: 0 4px 24px rgba(212,175,55,0.07);
        }
        .product-card {
            transition: all .35s cubic-bezier(.23,1,.32,1);
        }
        .product-card:hover {
            transform: translateY(-8px) scale(1.025) rotateZ(-0.5deg);
            box-shadow: 0 12px 32px rgba(212,175,55,0.13);
        }
        .category-filters .active {
            background: linear-gradient(90deg,#d4af37 0%,#b8860b 100%);
            color: #fff;
            font-weight: bold;
        }
        .category-filters a {
            transition: .2s;
        }
        .category-filters a:not(.active):hover {
            background: #fff7e6;
            color: #d4af37;
        }
        .badge {
            font-size: .72rem;
            font-weight: bold;
            letter-spacing: 1px;
            border-radius: 9px;
            padding: .2em .8em;
        }
        .badge-nouveau { background: #d4af37; color: #fff; }
        .badge-promo { background: #e53e3e; color: #fff; }
        .fade-in { animation:fIn .8s cubic-bezier(.43,1.42,.44,.99);}
        @keyframes fIn {from{opacity:0;transform:translateY(30px);}to{opacity:1;transform:translateY(0);}}
    </style>
</head>
<body class="relative">
    <!-- NAVIGATION -->
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="index.php" class="text-xl md:text-2xl font-bold text-yellow-700 tracking-widest font-serif">Artisanat Marocain</a>
            <div class="hidden md:flex gap-6">
                <a href="index.php" class="text-gray-700 hover:text-yellow-700">Accueil</a>
                <a href="produits.php" class="text-yellow-700 font-semibold">Produits</a>
                <a href="artisans.php" class="text-gray-700 hover:text-yellow-700">Artisans</a>
                <a href="about.php" class="text-gray-700 hover:text-yellow-700">Notre Histoire</a>
                <a href="contact.php" class="text-gray-700 hover:text-yellow-700">Contact</a>
            </div>
            <a href="ajout-au-panier.php" class="relative text-gray-700 hover:text-yellow-600">
                <i class="fas fa-shopping-cart text-xl"></i>
                <span class="absolute -top-2 -right-2 bg-yellow-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
            </a>
        </div>
    </nav>
    <!-- HERO -->
    <section class="hero-prods py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold text-yellow-900 mb-4 fade-in font-serif">Nos Produits Artisanaux</h1>
            <p class="text-lg text-yellow-900/80 mb-6 fade-in">Découvrez la richesse du savoir-faire marocain à travers notre collection unique.</p>
        </div>
    </section>
    <!-- FILTRES -->
    <div class="container mx-auto px-4 py-6">
        <div class="category-filters flex gap-4 justify-center flex-wrap mb-4">
            <?php foreach($categories as $cat): ?>
                <a href="produits.php<?php echo $cat['id'] ? '?category='.$cat['id'] : ''; ?>" class="px-5 py-2 rounded-full <?php echo ($categoryFilter == $cat['id']) ? 'active' : ''; ?>">
                    <?php echo htmlspecialchars($cat['nom']); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- PRODUITS -->
    <main class="container mx-auto px-4 pb-12">
        <?php if (empty($products)): ?>
            <div class="text-center my-16 text-xl text-gray-500">Aucun produit trouvé dans cette catégorie.</div>
        <?php else: ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <?php foreach($products as $p): ?>
            <div class="product-card glass-bg fade-in">
                <div class="relative">
                    <img src="<?php echo $p['image_url']; ?>" alt="<?php echo htmlspecialchars($p['nom']); ?>" class="w-full h-56 object-cover rounded-t-xl"/>
                    <?php if($p['nouveau']): ?>
                        <span class="badge badge-nouveau absolute top-3 left-3">Nouveau</span>
                    <?php endif; ?>
                    <?php if($p['en_promo']): ?>
                        <span class="badge badge-promo absolute top-3 right-3">Promo</span>
                    <?php endif; ?>
                </div>
                <div class="px-5 py-4">
                    <div class="product-category text-xs uppercase tracking-wide mb-1 text-yellow-700 font-bold"><?php echo htmlspecialchars($p['categorie_nom']); ?></div>
                    <h3 class="font-bold text-lg text-gray-900 mb-2"><?php echo htmlspecialchars($p['nom']); ?></h3>
                    <p class="text-gray-700 text-sm mb-2"><?php echo htmlspecialchars(mb_substr($p['description'],0,65)).'...'; ?></p>
                    <div class="flex items-center justify-between mb-2">
                        <span class="origin text-sm text-gray-500">📍 <?php echo htmlspecialchars($p['origine']); ?></span>
                        <span class="artisan text-sm text-gray-500">👤 <?php echo htmlspecialchars($p['artisan_prenom'].' '.$p['artisan_nom']); ?></span>
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        <?php if($p['prix_promo']): ?>
                            <span class="text-gray-400 line-through"><?php echo formatPrice($p['prix']); ?></span>
                            <span class="text-yellow-700 font-bold text-xl"><?php echo formatPrice($p['prix_promo']); ?></span>
                        <?php else: ?>
                            <span class="text-yellow-700 font-bold text-xl"><?php echo formatPrice($p['prix']); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="flex items-center gap-1 mb-2"><?php echo generateStars($p['note_moyenne']); ?></div>
                    <div class="flex gap-2">
                        <a href="details-du-produit.php?id=<?php echo $p['id']; ?>" class="flex-1 bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-3 rounded-full transition duration-200 text-center shadow">Détails</a>
                        <a href="ajout-au-panier.php?id=<?php echo $p['id']; ?>" class="flex-1 bg-white border border-yellow-700 text-yellow-700 hover:bg-yellow-50 font-bold py-2 px-3 rounded-full transition duration-200 text-center shadow">Ajouter</a>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">
                        <?php if($p['stock']>0): ?>
                            <span class="text-green-600"><i class="fas fa-check-circle"></i> En stock</span>
                        <?php else: ?>
                            <span class="text-red-600"><i class="fas fa-times-circle"></i> Rupture</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </main>
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
    <script>
    // Simple fade-in animation on scroll for product-cards
    document.addEventListener('DOMContentLoaded',()=> {
        const cards = document.querySelectorAll('.product-card');
        const observer = new IntersectionObserver(entries=>{
            entries.forEach(entry=>{
                if(entry.isIntersecting) entry.target.classList.add('fade-in');
            });
        },{threshold:.1});
        cards.forEach(card=>{ observer.observe(card); });
    });
    </script>
</body>
</html>