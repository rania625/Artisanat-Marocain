<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vase en Céramique Artisanal - Atelier des Terres</title>
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
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            line-height: 1.7;
            color: #3a2f2a;
            background: linear-gradient(135deg, #f5f1eb 0%, #e8ddd4 50%, #d4c4b0 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .craft-badge {
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #8b4513, #a0522d);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: bold;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.3);
            animation: gentle-pulse 3s infinite;
        }

        @keyframes gentle-pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .product-page {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(58, 47, 42, 0.1);
            overflow: hidden;
            border: 1px solid rgba(139, 69, 19, 0.1);
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .header-section {
            background: linear-gradient(135deg, #8b4513 0%, #a0522d 100%);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="craft" patternUnits="userSpaceOnUse" width="20" height="20"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23craft)"/></svg>') repeat;
        }

        .artisan-name {
            font-size: 1.2em;
            font-weight: 300;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .workshop-title {
            font-size: 2.5em;
            font-weight: bold;
            margin: 10px 0;
            position: relative;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .breadcrumb {
            padding: 20px 30px;
            background: rgba(139, 69, 19, 0.05);
            font-size: 14px;
            color: #8b4513;
            border-bottom: 1px solid rgba(139, 69, 19, 0.1);
        }

        .breadcrumb a {
            color: #8b4513;
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb a:hover {
            color: #5d2e0a;
            text-decoration: underline;
        }

        .product-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            padding: 40px;
        }

        .product-images {
            position: relative;
        }

        .main-image {
            width: 100%;
            height: 500px;
            background: linear-gradient(45deg, #f4f1ed, #e6ddd4);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #8b4513;
            margin-bottom: 20px;
            transition: all 0.4s ease;
            cursor: zoom-in;
            border: 3px solid #d4c4b0;
            box-shadow: inset 0 0 20px rgba(139, 69, 19, 0.1);
            position: relative;
            overflow: hidden;
        }

        .main-image::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            border: 2px dashed rgba(139, 69, 19, 0.2);
            border-radius: 5px;
            pointer-events: none;
        }

        .main-image:hover {
            transform: scale(1.02) rotate(0.5deg);
            box-shadow: 0 15px 30px rgba(139, 69, 19, 0.2);
        }

        .thumbnail-images {
            display: flex;
            gap: 12px;
            overflow-x: auto;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #f8f5f0, #ebe5dc);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid #d4c4b0;
            flex-shrink: 0;
            position: relative;
        }

        .thumbnail::after {
            content: '';
            position: absolute;
            inset: 4px;
            border: 1px dashed rgba(139, 69, 19, 0.3);
            border-radius: 4px;
        }

        .thumbnail:hover, .thumbnail.active {
            border-color: #8b4513;
            transform: translateY(-3px) rotate(-1deg);
            box-shadow: 0 8px 15px rgba(139, 69, 19, 0.2);
        }

        .product-info {
            padding: 20px 0;
        }

        .handmade-badge {
            display: inline-block;
            background: linear-gradient(135deg, #228b22, #32cd32);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .product-title {
            font-size: 2.8em;
            font-weight: 700;
            margin-bottom: 15px;
            color: #5d2e0a;
            font-family: 'Georgia', serif;
            text-shadow: 1px 1px 2px rgba(139, 69, 19, 0.1);
        }

        .artisan-signature {
            font-style: italic;
            color: #8b4513;
            margin-bottom: 20px;
            font-size: 1.1em;
        }

        .product-rating {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            gap: 15px;
        }

        .stars {
            color: #daa520;
            font-size: 1.3em;
            text-shadow: 1px 1px 2px rgba(218, 165, 32, 0.3);
        }

        .rating-text {
            color: #8b4513;
            font-size: 14px;
        }

        .product-price {
            margin-bottom: 25px;
            padding: 20px;
            background: linear-gradient(135deg, #faf8f5, #f0ebe5);
            border-radius: 10px;
            border: 1px solid #d4c4b0;
        }

        .current-price {
            font-size: 2.5em;
            font-weight: 700;
            color: #8b4513;
            margin-right: 15px;
        }

        .price-note {
            font-size: 0.9em;
            color: #8b4513;
            font-style: italic;
            margin-top: 10px;
        }

        .craft-story {
            background: rgba(139, 69, 19, 0.05);
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            border-left: 4px solid #8b4513;
        }

        .story-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: #5d2e0a;
            font-size: 1.2em;
        }

        .story-text {
            line-height: 1.8;
            color: #5d2e0a;
            font-style: italic;
        }

        .product-options {
            margin-bottom: 30px;
        }

        .option-group {
            margin-bottom: 25px;
            padding: 20px;
            background: #faf8f5;
            border-radius: 8px;
            border: 1px solid #e6ddd4;
        }

        .option-label {
            font-weight: 600;
            margin-bottom: 15px;
            color: #5d2e0a;
            font-size: 1.1em;
        }

        .customization-options {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .custom-option {
            padding: 12px 24px;
            border: 2px solid #d4c4b0;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: white;
            color: #5d2e0a;
            font-weight: 500;
        }

        .custom-option:hover, .custom-option.selected {
            border-color: #8b4513;
            background: #8b4513;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 69, 19, 0.3);
        }

        .personalization-section {
            background: linear-gradient(135deg, #faf8f5, #f0ebe5);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            border: 1px solid #d4c4b0;
        }

        .personalization-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: #5d2e0a;
        }

        .personalization-input {
            width: 100%;
            padding: 12px;
            border: 2px solid #d4c4b0;
            border-radius: 8px;
            font-size: 16px;
            font-family: inherit;
            transition: border-color 0.3s;
        }

        .personalization-input:focus {
            outline: none;
            border-color: #8b4513;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
            padding: 15px;
            background: #faf8f5;
            border-radius: 8px;
        }

        .quantity-label {
            font-weight: 600;
            color: #5d2e0a;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            border: 2px solid #d4c4b0;
            border-radius: 25px;
            overflow: hidden;
            background: white;
        }

        .quantity-btn {
            background: #f8f5f0;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s;
            color: #8b4513;
            font-weight: bold;
        }

        .quantity-btn:hover {
            background: #8b4513;
            color: white;
        }

        .quantity-input {
            border: none;
            padding: 10px;
            width: 60px;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            color: #5d2e0a;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .btn {
            padding: 16px 32px;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            transition: all 0.3s ease;
            transform: translate(-50%, -50%);
        }

        .btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #8b4513, #a0522d);
            color: white;
            flex: 2;
            box-shadow: 0 6px 20px rgba(139, 69, 19, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: #8b4513;
            border: 2px solid #8b4513;
            flex: 1;
        }

        .btn-secondary:hover {
            background: #8b4513;
            color: white;
            transform: translateY(-2px);
        }

        .btn-icon {
            background: #fff;
            color: #e74c3c;
            border: 2px solid #e74c3c;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .btn-icon:hover {
            background: #e74c3c;
            color: white;
            transform: scale(1.1);
        }

        .craft-features {
            background: linear-gradient(135deg, #f4f1ed, #e6ddd4);
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 25px;
            border: 1px solid #d4c4b0;
        }

        .features-title {
            font-weight: 600;
            margin-bottom: 18px;
            color: #5d2e0a;
            font-size: 1.2em;
        }

        .features-list {
            list-style: none;
        }

        .features-list li {
            padding: 8px 0;
            color: #5d2e0a;
            position: relative;
            padding-left: 30px;
            line-height: 1.6;
        }

        .features-list li:before {
            content: "🎨";
            position: absolute;
            left: 0;
            top: 8px;
        }

        .artisan-info {
            background: rgba(139, 69, 19, 0.05);
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 4px solid #8b4513;
        }

        .artisan-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: #5d2e0a;
            font-size: 1.2em;
        }

        .artisan-text {
            color: #5d2e0a;
            line-height: 1.7;
            font-style: italic;
        }

        .shipping-info {
            background: linear-gradient(135deg, #228b22, #32cd32);
            color: white;
            padding: 20px;
            border-radius: 10px;
            font-size: 14px;
            text-align: center;
        }

        .tabs {
            background: #fff;
            border-top: 1px solid #e6ddd4;
        }

        .tab-buttons {
            display: flex;
            border-bottom: 1px solid #e6ddd4;
            background: #faf8f5;
        }

        .tab-button {
            background: none;
            border: none;
            padding: 20px 30px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            color: #8b4513;
            transition: all 0.3s;
            border-bottom: 3px solid transparent;
            position: relative;
        }

        .tab-button.active {
            color: #5d2e0a;
            border-bottom-color: #8b4513;
            background: white;
        }

        .tab-button:hover {
            background: rgba(139, 69, 19, 0.05);
        }

        .tab-content {
            padding: 35px;
            display: none;
            line-height: 1.8;
        }

        .tab-content.active {
            display: block;
        }

        .tab-content h3 {
            color: #5d2e0a;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .care-instructions {
            background: #fff8dc;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #daa520;
            margin: 20px 0;
        }

        @media (max-width: 768px) {
            .product-content {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 20px;
            }
            
            .product-title {
                font-size: 2.2em;
            }
            
            .current-price {
                font-size: 2em;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .workshop-title {
                font-size: 2em;
            }
        }

        .texture-overlay {
            position: relative;
        }

        .texture-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="texture" patternUnits="userSpaceOnUse" width="4" height="4"><rect width="4" height="4" fill="rgba(139,69,19,0.02)"/><circle cx="2" cy="2" r="0.5" fill="rgba(139,69,19,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23texture)"/></svg>') repeat;
            pointer-events: none;
            border-radius: inherit;
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>
    <section class="hero-section text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 font-serif fade-in">Détails du produit</h1>
          
        </div>
    </section> 

    <div class="craft-badge">✨ Fait Main ✨</div>
    
    <div class="container">
        <div class="product-page">
          

            <div class="breadcrumb">
                <a href="#">Accueil</a> / <a href="#">Artisanat</a> / <a href="#">Céramique</a> / Vase Rustique
            </div>

            <div class="product-content">
                <div class="product-images">
                    <div class="main-image texture-overlay" id="mainImage">
                        🏺 Vase Principal
                    </div>
                    <div class="thumbnail-images">
                        <div class="thumbnail active texture-overlay" onclick="changeImage(0)"></div>
                        <div class="thumbnail texture-overlay" onclick="changeImage(1)"></div>
                        <div class="thumbnail texture-overlay" onclick="changeImage(2)"></div>
                        <div class="thumbnail texture-overlay" onclick="changeImage(3)"></div>
                        <div class="thumbnail texture-overlay" onclick="changeImage(4)"></div>
                    </div>
                </div>

                <div class="product-info">
                    <div class="handmade-badge">100% Fait Main</div>
                    
                    <h1 class="product-title">Vase Rustique en Grès</h1>
                    <div class="artisan-signature">Pièce unique signée par Marie Dubois</div>
                    
                    <div class="product-rating">
                        <div class="stars">★★★★★</div>
                        <span class="rating-text">(4.9/5 - 47 avis authentifiés)</span>
                    </div>

                    <div class="product-price">
                        <span class="current-price">89€</span>
                        <div class="price-note">Prix juste pour un travail artisanal de qualité</div>
                    </div>

                    <div class="craft-story">
                        <div class="story-title">L'Histoire de cette Pièce</div>
                        <div class="story-text">
                            Ce vase a été modelé à la main sur tour de potier traditionnel, puis cuit dans notre four à bois 
                            centenaire. Chaque pièce porte les traces uniques du geste artisanal et de la flamme, 
                            créant des nuances de couleur impossibles à reproduire industriellement.
                        </div>
                    </div>

                    <div class="product-options">
                        <div class="option-group">
                            <div class="option-label">Finition :</div>
                            <div class="customization-options">
                                <div class="custom-option selected" onclick="selectOption(this)">Grès Naturel</div>
                                <div class="custom-option" onclick="selectOption(this)">Émaillé Bleu</div>
                                <div class="custom-option" onclick="selectOption(this)">Terre de Feu</div>
                            </div>
                        </div>

                        <div class="option-group">
                            <div class="option-label">Taille :</div>
                            <div class="customization-options">
                                <div class="custom-option" onclick="selectOption(this)">Petit (15cm)</div>
                                <div class="custom-option selected" onclick="selectOption(this)">Moyen (20cm)</div>
                                <div class="custom-option" onclick="selectOption(this)">Grand (25cm)</div>
                            </div>
                        </div>
                    </div>

                    <div class="personalization-section">
                        <div class="personalization-title">Personnalisation (Optionnelle) :</div>
                        <input type="text" class="personalization-input" placeholder="Gravure personnalisée (ex: initiales, date...)" maxlength="20">
                        <div style="font-size: 12px; color: #8b4513; margin-top: 8px; font-style: italic;">
                            +15€ pour gravure artisanale
                        </div>
                    </div>

                    <div class="quantity-selector">
                        <span class="quantity-label">Quantité :</span>
                        <div class="quantity-controls">
                            <button class="quantity-btn" onclick="changeQuantity(-1)">-</button>
                            <input type="number" class="quantity-input" value="1" id="quantity" min="1" max="3">
                            <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
                        </div>
                        <span style="font-size: 12px; color: #8b4513; font-style: italic;">Max 3 pièces (stock limité)</span>
                    </div>

                    <div class="action-buttons">
                        <button class="btn btn-primary" onclick="addToCart()">
                            <span style="position: relative; z-index: 1;">Acquérir cette Pièce</span>
                        </button>
                        <button class="btn btn-secondary" onclick="contactArtisan()">
                            <span style="position: relative; z-index: 1;">Contacter l'Artisan</span>
                        </button>
                        <button class="btn btn-icon" onclick="addToWishlist()">♡</button>
                    </div>

                    <div class="craft-features">
                        <div class="features-title">Caractéristiques Artisanales :</div>
                        <ul class="features-list">
                            <li>Modelé entièrement à la main sur tour traditionnel</li>
                            <li>Grès haute température (1280°C) pour une solidité exceptionnelle</li>
                            <li>Cuisson au feu de bois pour des effets uniques</li>
                            <li>Signature de l'artisan sous la pièce</li>
                            <li>Chaque pièce est unique et légèrement différente</li>
                            <li>Résistant au gel et aux intempéries</li>
                        </ul>
                    </div>

                    <div class="artisan-info">
                        <div class="artisan-title">À propos de l'Artisan :</div>
                        <div class="artisan-text">
                            Marie Dubois perpétue la tradition céramique familiale depuis plus de 20 ans. 
                            Formée aux techniques ancestrales, elle crée des pièces uniques dans son atelier 
                            du Périgord, utilisant uniquement des matériaux nobles et des méthodes traditionnelles.
                        </div>
                    </div>

                    <div class="shipping-info">
                        🌱 <strong>Livraison soignée</strong> sous 5-7 jours • 🎁 <strong>Emballage cadeau</strong> offert • 🛡️ <strong>Garantie artisan</strong> à vie
                    </div>
                </div>
            </div>

            <div class="tabs">
                <div class="tab-buttons">
                    <button class="tab-button active" onclick="showTab('story')">Histoire & Création</button>
                    <button class="tab-button" onclick="showTab('care')">Entretien</button>
                    <button class="tab-button" onclick="showTab('reviews')">Témoignages (47)</button>
                    <button class="tab-button" onclick="showTab('artisan')">L'Atelier</button>
                </div>

                <div class="tab-content active" id="story">
                    <h3>Le Processus de Création</h3>
                    <p>Chaque vase naît d'une boule d'argile locale, extraite des terres du Périgord. Marie commence par centrer la terre sur son tour, héritage de son grand-père potier. Le façonnage se fait lentement, au rythme ancestral, permettant à la pièce de trouver sa forme naturelle.</p>
                    
                    <p>Après un premier séchage de plusieurs semaines, la pièce subit une première cuisson à 980°C. Puis vient l'émaillage à la main, avec des glaçures préparées selon des recettes familiales gardées secrètes depuis trois générations.</p>
                    
                    <p>La cuisson finale s'effectue dans le four à bois centenaire de l'atelier. Cette technique traditionnelle, plus longue et imprévisible, confère à chaque pièce des nuances et des effets uniques que seul le feu sait créer.</p>

                    <div class="care-instructions">
                        <strong>Temps de création :</strong> Chaque pièce nécessite environ 3 semaines de la création à la finalisation, expliquant son caractère précieux et unique.
                    </div>
                </div>

                <div class="tab-content" id="care">
                    <h3>Entretien de votre Pièce</h3>
                    <p><strong>Nettoyage :</strong> Un simple rinçage à l'eau tiède suffit. Évitez les détergents agressifs qui pourraient altérer la patine naturelle du grès.</p>
                    
                    <p><strong>Usage extérieur :</strong> Ce vase résiste parfaitement aux intempéries. En hiver, videz-le de son eau pour éviter les risques de gel.</p>
                    
                    <p><strong>Patine :</strong> Avec le temps, votre vase développera une belle
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
 