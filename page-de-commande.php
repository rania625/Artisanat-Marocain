<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Craft - Commander</title>
        <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .back-link {
            color: #666;
            text-decoration: none;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .back-link:hover {
            color: #1a1a1a;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 0.5rem;
            color: #1a1a1a;
        }

        .page-subtitle {
            color: #666;
            font-size: 1.1rem;
        }

        .checkout-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 60px;
            align-items: start;
        }

        .form-section {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 40px;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 24px;
            color: #1a1a1a;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.2s;
            background: #fff;
        }

        .form-input:focus {
            outline: none;
            border-color: #1a1a1a;
        }

        .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            font-size: 1rem;
            background: #fff;
            cursor: pointer;
        }

        .form-select:focus {
            outline: none;
            border-color: #1a1a1a;
        }

        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .radio-option {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 16px;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .radio-option:hover {
            border-color: #ccc;
        }

        .radio-option.selected {
            border-color: #1a1a1a;
            background: #f9f9f9;
        }

        .radio-input {
            margin: 0;
        }

        .radio-content {
            flex: 1;
        }

        .radio-title {
            font-weight: 600;
            margin-bottom: 4px;
        }

        .radio-description {
            font-size: 0.9rem;
            color: #666;
        }

        .radio-price {
            font-weight: 600;
            color: #1a1a1a;
        }

        .order-summary {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 32px;
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .summary-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 24px;
            color: #1a1a1a;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .item-info {
            flex: 1;
        }

        .item-name {
            font-weight: 500;
            margin-bottom: 2px;
        }

        .item-qty {
            font-size: 0.9rem;
            color: #666;
        }

        .item-price {
            font-weight: 600;
            color: #1a1a1a;
        }

        .summary-section {
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
            font-size: 1.2rem;
            font-weight: 700;
            padding-top: 16px;
            border-top: 2px solid #1a1a1a;
            margin-top: 16px;
            color: #1a1a1a;
        }

        .place-order-btn {
            width: 100%;
            background: #1a1a1a;
            color: white;
            border: none;
            padding: 18px;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 24px;
            transition: all 0.2s ease;
        }

        .place-order-btn:hover {
            background: #333;
        }

        .place-order-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .security-info {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: #666;
            margin-top: 16px;
            justify-content: center;
        }

        .progress-bar {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 32px;
            justify-content: center;
        }

        .progress-step {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #ccc;
            font-size: 0.9rem;
        }

        .progress-step.active {
            color: #1a1a1a;
            font-weight: 600;
        }

        .progress-step.completed {
            color: #27ae60;
        }

        .step-number {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .progress-step.active .step-number {
            background: #1a1a1a;
            color: white;
        }

        .progress-step.completed .step-number {
            background: #27ae60;
            color: white;
        }

        .success-message {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            display: none;
        }

        @media (max-width: 768px) {
            .checkout-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .form-section,
            .order-summary {
                padding: 24px;
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
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-serif fade-in">Finaliser la commande</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto fade-in">Quelques étapes pour recevoir vos produits artisanaux
</p>
        </div>
    </section>

    <div class="container">
       

        <div class="progress-bar">
            <div class="progress-step completed">
                <div class="step-number">✓</div>
                <span>Panier</span>
            </div>
            <div style="width: 40px; height: 1px; background: #e5e5e5;"></div>
            <div class="progress-step active">
                <div class="step-number">2</div>
                <span>Commande</span>
            </div>
            <div style="width: 40px; height: 1px; background: #e5e5e5;"></div>
            <div class="progress-step">
                <div class="step-number">3</div>
                <span>Paiement</span>
            </div>
        </div>

        <div class="checkout-grid">
            <div>
                <div class="form-section">
                    <h2 class="section-title">Informations de livraison</h2>
                    <div class="success-message" id="success-message">
                        ✅ Commande confirmée ! Vous recevrez un email de confirmation.
                    </div>
                    <form id="checkout-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Prénom *</label>
                                <input type="text" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nom *</label>
                                <input type="text" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-input" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Téléphone *</label>
                            <input type="tel" class="form-input" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Adresse *</label>
                            <input type="text" class="form-input" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Ville *</label>
                                <select class="form-select" required>
                                    <option value="">Choisir une ville</option>
                                    <option value="casablanca">Casablanca</option>
                                    <option value="rabat">Rabat</option>
                                    <option value="marrakech">Marrakech</option>
                                    <option value="fes">Fès</option>
                                    <option value="tanger">Tanger</option>
                                    <option value="agadir">Agadir</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Code Postal</label>
                                <input type="text" class="form-input">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="form-section" style="margin-top: 24px;">
                    <h2 class="section-title">Mode de livraison</h2>
                    <div class="radio-group">
                        <div class="radio-option selected" onclick="selectDelivery(this, 'standard', 40)">
                            <input type="radio" name="delivery" value="standard" class="radio-input" checked>
                            <div class="radio-content">
                                <div class="radio-title">Livraison Standard</div>
                                <div class="radio-description">3-5 jours ouvrables</div>
                            </div>
                            <div class="radio-price">40 DH</div>
                        </div>
                        <div class="radio-option" onclick="selectDelivery(this, 'express', 80)">
                            <input type="radio" name="delivery" value="express" class="radio-input">
                            <div class="radio-content">
                                <div class="radio-title">Livraison Express</div>
                                <div class="radio-description">1-2 jours ouvrables</div>
                            </div>
                            <div class="radio-price">80 DH</div>
                        </div>
                        <div class="radio-option" onclick="selectDelivery(this, 'pickup', 0)">
                            <input type="radio" name="delivery" value="pickup" class="radio-input">
                            <div class="radio-content">
                                <div class="radio-title">Retrait en boutique</div>
                                <div class="radio-description">Disponible sous 24h</div>
                            </div>
                            <div class="radio-price">Gratuit</div>
                        </div>
                    </div>
                </div>

                <div class="form-section" style="margin-top: 24px;">
                    <h2 class="section-title">Mode de paiement</h2>
                    <div class="radio-group">
                        <div class="radio-option selected" onclick="selectPayment(this, 'card')">
                            <input type="radio" name="payment" value="card" class="radio-input" checked>
                            <div class="radio-content">
                                <div class="radio-title">Carte bancaire</div>
                                <div class="radio-description">Visa, Mastercard, American Express</div>
                            </div>
                        </div>
                        <div class="radio-option" onclick="selectPayment(this, 'cash')">
                            <input type="radio" name="payment" value="cash" class="radio-input">
                            <div class="radio-content">
                                <div class="radio-title">Paiement à la livraison</div>
                                <div class="radio-description">Espèces uniquement</div>
                            </div>
                        </div>
                        <div class="radio-option" onclick="selectPayment(this, 'transfer')">
                            <input type="radio" name="payment" value="transfer" class="radio-input">
                            <div class="radio-content">
                                <div class="radio-title">Virement bancaire</div>
                                <div class="radio-description">RIB fourni après commande</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-summary">
                <h2 class="summary-title">Récapitulatif</h2>
                
                <div id="order-items">
                    <div class="order-item">
                        <div class="item-info">
                            <div class="item-name">Poterie Traditionnelle</div>
                            <div class="item-qty">Quantité: 2</div>
                        </div>
                        <div class="item-price">360 DH</div>
                    </div>
                    
                    <div class="order-item">
                        <div class="item-info">
                            <div class="item-name">Bijoux Argent</div>
                            <div class="item-qty">Quantité: 1</div>
                        </div>
                        <div class="item-price">320 DH</div>
                    </div>
                </div>

                <div class="summary-section">
                    <div class="summary-row">
                        <span>Sous-total</span>
                        <span id="subtotal">680 DH</span>
                    </div>
                    <div class="summary-row">
                        <span>Livraison</span>
                        <span id="delivery-cost">40 DH</span>
                    </div>
                    <div class="summary-row">
                        <span>TVA (20%)</span>
                        <span id="tax">144 DH</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total</span>
                        <span id="final-total">864 DH</span>
                    </div>
                </div>

                <button class="place-order-btn" onclick="placeOrder()">
                    Confirmer la commande
                </button>

                <div class="security-info">
                    🔒 Paiement sécurisé SSL
                </div>
            </div>
        </div>
    </div>

    <script>
        let deliveryCost = 40;
        let subtotal = 680;

        function selectDelivery(element, type, cost) {
            // Remove selected class from all delivery options
            document.querySelectorAll('.radio-option').forEach(opt => {
                if (opt.querySelector('input[name="delivery"]')) {
                    opt.classList.remove('selected');
                }
            });
            
            // Add selected class to clicked option
            element.classList.add('selected');
            element.querySelector('input').checked = true;
            
            // Update delivery cost
            deliveryCost = cost;
            updateTotal();
        }

        function selectPayment(element, type) {
            // Remove selected class from all payment options
            document.querySelectorAll('.radio-option').forEach(opt => {
                if (opt.querySelector('input[name="payment"]')) {
                    opt.classList.remove('selected');
                }
            });
            
            // Add selected class to clicked option
            element.classList.add('selected');
            element.querySelector('input').checked = true;
        }

        function updateTotal() {
            const tax = Math.round((subtotal + deliveryCost) * 0.2);
            const total = subtotal + deliveryCost + tax;
            
            document.getElementById('delivery-cost').textContent = deliveryCost + ' DH';
            document.getElementById('tax').textContent = tax + ' DH';
            document.getElementById('final-total').textContent = total + ' DH';
        }

        function placeOrder() {
            const form = document.getElementById('checkout-form');
            
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }
            
            // Show success message
            document.getElementById('success-message').style.display = 'block';
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
            
            // Simulate order processing
            setTimeout(() => {
                alert('Commande confirmée ! Numéro de commande: #AC' + Math.random().toString(36).substr(2, 9).toUpperCase());
            }, 1500);
        }

        // Initialize
        updateTotal();
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