<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Craft - Panier</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #fafafa;
            color: #1a1a1a;
            line-height: 1.6;
        }

        .nav {
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1a1a1a;
            text-decoration: none;
        }

        .cart-icon {
            position: relative;
            font-size: 1.2rem;
            color: #666;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff4444;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 0.5rem;
            color: #1a1a1a;
        }

        .page-subtitle {
            color: #666;
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }

        .main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 60px;
            align-items: start;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
        }

        .product {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.2s ease;
        }

        .product:hover {
            border-color: #ccc;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .product-image {
            width: 100%;
            height: 240px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #999;
        }

        .product-content {
            padding: 24px;
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .product-description {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 16px;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .quantity-label {
            font-size: 0.9rem;
            color: #666;
            font-weight: 500;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            overflow: hidden;
        }

        .quantity-btn {
            background: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 1rem;
            color: #666;
            transition: background 0.2s;
        }

        .quantity-btn:hover {
            background: #f5f5f5;
        }

        .quantity-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .quantity-value {
            padding: 8px 16px;
            font-weight: 500;
            min-width: 50px;
            text-align: center;
            border-left: 1px solid #e5e5e5;
            border-right: 1px solid #e5e5e5;
        }

        .add-btn {
            width: 100%;
            background: #1a1a1a;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .add-btn:hover {
            background: #333;
        }

        .add-btn:active {
            transform: translateY(1px);
        }

        .cart-panel {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 32px;
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .cart-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 24px;
            color: #1a1a1a;
        }

        .cart-empty {
            text-align: center;
            color: #999;
            font-style: italic;
            padding: 40px 0;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 16px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-info {
            flex: 1;
        }

        .cart-item-name {
            font-weight: 600;
            margin-bottom: 4px;
            color: #1a1a1a;
        }

        .cart-item-qty {
            font-size: 0.9rem;
            color: #666;
        }

        .cart-item-price {
            font-weight: 600;
            color: #1a1a1a;
        }

        .remove-btn {
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
            font-size: 0.8rem;
            margin-top: 4px;
            padding: 4px;
        }

        .remove-btn:hover {
            color: #ff4444;
        }

        .cart-summary {
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #f0f0f0;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .summary-row.total {
            font-size: 1.1rem;
            font-weight: 600;
            padding-top: 12px;
            border-top: 1px solid #f0f0f0;
            margin-top: 12px;
        }

        .checkout-btn {
            width: 100%;
            background: #1a1a1a;
            color: white;
            border: none;
            padding: 16px;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 24px;
            transition: all 0.2s ease;
        }

        .checkout-btn:hover {
            background: #333;
        }

        .checkout-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .toast {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: #1a1a1a;
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            font-size: 0.9rem;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .toast.show {
            transform: translateY(0);
            opacity: 1;
        }

        @media (max-width: 768px) {
            .main-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .nav-container {
                padding: 0 16px;
            }
            
            .container {
                padding: 24px 16px;
            }
        }
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

   <section class="hero-section text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-serif fade-in">Produits Artisanaux</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto fade-in">Collection authentique faite à la main
</p>
        </div>
    </section>

    <div class="container">
      

        <div class="main-grid">
            <div class="products-grid">
                <div class="product">
                    <div class="product-image"><img src="image/tajine2.jpg" alt=""></div>
                    <div class="product-content">
                        <h3 class="product-title">Poterie Traditionnelle</h3>
                        <p class="product-description">Céramique artisanale fabriquée selon les techniques ancestrales</p>
                        <div class="product-price">180 DH</div>
                        <div class="quantity-control">
                            <span class="quantity-label">Quantité</span>
                            <div class="quantity-selector">
                                <button class="quantity-btn" onclick="updateQuantity('pot', -1)">−</button>
                                <span class="quantity-value" id="qty-pot">1</span>
                                <button class="quantity-btn" onclick="updateQuantity('pot', 1)">+</button>
                            </div>
                        </div>
                        <button class="add-btn" onclick="addItem('pot', 'Poterie Traditionnelle', 180)">
                            Ajouter au panier
                        </button>
                    </div>
                </div>

                <div class="product">
                    <div class="product-image"><img src="image/Coussin berbère.jpg" alt=""></div>
                    <div class="product-content">
                        <h3 class="product-title">Textile Berbère</h3>
                        <p class="product-description">Tapis tissé à la main avec motifs géométriques authentiques</p>
                        <div class="product-price">890 DH</div>
                        <div class="quantity-control">
                            <span class="quantity-label">Quantité</span>
                            <div class="quantity-selector">
                                <button class="quantity-btn" onclick="updateQuantity('textile', -1)">−</button>
                                <span class="quantity-value" id="qty-textile">1</span>
                                <button class="quantity-btn" onclick="updateQuantity('textile', 1)">+</button>
                            </div>
                        </div>
                        <button class="add-btn" onclick="addItem('textile', 'Textile Berbère', 890)">
                            Ajouter au panier
                        </button>
                    </div>
                </div>

                <div class="product">
                    <div class="product-image"><img src="image/Bracelet from.jpg" alt="" srcset=""></div>
                    <div class="product-content">
                        <h3 class="product-title">Bijoux Argent</h3>
                        <p class="product-description">Bijouterie traditionnelle en argent massif ciselé à la main</p>
                        <div class="product-price">320 DH</div>
                        <div class="quantity-control">
                            <span class="quantity-label">Quantité</span>
                            <div class="quantity-selector">
                                <button class="quantity-btn" onclick="updateQuantity('bijoux', -1)">−</button>
                                <span class="quantity-value" id="qty-bijoux">1</span>
                                <button class="quantity-btn" onclick="updateQuantity('bijoux', 1)">+</button>
                            </div>
                        </div>
                        <button class="add-btn" onclick="addItem('bijoux', 'Bijoux Argent', 320)">
                            Ajouter au panier
                        </button>
                    </div>
                </div>

                <div class="product">
                    <div class="product-image"><img src="image/or.jpg" alt=""></div>
                    <div class="product-content">
                        <h3 class="product-title">Huile d'Argan</h3>
                        <p class="product-description">Huile pure d'argan bio pressée à froid, 100ml</p>
                        <div class="product-price">150 DH</div>
                        <div class="quantity-control">
                            <span class="quantity-label">Quantité</span>
                            <div class="quantity-selector">
                                <button class="quantity-btn" onclick="updateQuantity('argan', -1)">−</button>
                                <span class="quantity-value" id="qty-argan">1</span>
                                <button class="quantity-btn" onclick="updateQuantity('argan', 1)">+</button>
                            </div>
                        </div>
                        <button class="add-btn" onclick="addItem('argan', 'Huile d\'Argan', 150)">
                            Ajouter au panier
                        </button>
                    </div>
                </div>
            </div>

            <div class="cart-panel">
                <h2 class="cart-title">Panier</h2>
                <div id="cart-content">
                    <div class="cart-empty">Votre panier est vide</div>
                </div>
                <div class="cart-summary" id="cart-summary" style="display: none;">
                    <div class="summary-row">
                        <span>Sous-total</span>
                        <span id="subtotal">0 DH</span>
                    </div>
                    <div class="summary-row">
                        <span>Livraison</span>
                        <span>40 DH</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total</span>
                        <span id="total">40 DH</span>
                    </div>
                </div>
               <a href="page-de-commande.php" class="checkout-btn" id="checkout-btn" style="pointer-events: none; opacity: 0.6;">
    Commander
</a>
            </div>
        </div>
    </div>

    <div class="toast" id="toast">Produit ajouté au panier</div>
    <?php include('footer.php'); ?>

    <script>
        let cart = [];
        let quantities = {
            pot: 1,
            textile: 1,
            bijoux: 1,
            argan: 1
        };

        function updateQuantity(id, change) {
            const newQty = Math.max(1, quantities[id] + change);
            quantities[id] = newQty;
            document.getElementById(`qty-${id}`).textContent = newQty;
        }

        function addItem(id, name, price) {
            const qty = quantities[id];
            const existing = cart.find(item => item.id === id);
            
            if (existing) {
                existing.quantity += qty;
            } else {
                cart.push({ id, name, price, quantity: qty });
            }
            
            quantities[id] = 1;
            document.getElementById(`qty-${id}`).textContent = 1;
            
            updateCart();
            showToast();
        }

        function removeItem(id) {
            cart = cart.filter(item => item.id !== id);
            updateCart();
        }

        function updateCart() {
           const content = document.getElementById('cart-content');
    const summary = document.getElementById('cart-summary');
    const badge = document.getElementById('cart-badge');
    const checkout = document.getElementById('checkout-btn');
    
    if (cart.length === 0) {
        content.innerHTML = '<div class="cart-empty">Votre panier est vide</div>';
        summary.style.display = 'none';
        badge.style.display = 'none';
        // Désactive le lien
        checkout.style.pointerEvents = 'none';
        checkout.style.opacity = '0.6';
        return;
    }
            
            let html = '';
            let subtotal = 0;
            let totalItems = 0;
            
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;
                totalItems += item.quantity;
                
                html += `
                    <div class="cart-item">
                        <div class="cart-item-info">
                            <div class="cart-item-name">${item.name}</div>
                            <div class="cart-item-qty">Quantité: ${item.quantity}</div>
                            <button class="remove-btn" onclick="removeItem('${item.id}')">Supprimer</button>
                        </div>
                        <div class="cart-item-price">${itemTotal} DH</div>
                    </div>
                `;
            });
            
            content.innerHTML = html;
            
            const total = subtotal + 40;
            document.getElementById('subtotal').textContent = `${subtotal} DH`;
            document.getElementById('total').textContent = `${total} DH`;
            
           
             checkout.style.pointerEvents = 'auto';
    checkout.style.opacity = '1';
        }

        function showToast() {
            const toast = document.getElementById('toast');
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 2000);
        }

        function checkout() {
            alert('Redirection vers le paiement...');
            // Simulate checkout process
        }
    </script>
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