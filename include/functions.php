<?php

// Connexion à la base de données
function connectDB() {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=artisanat;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}

// Obtenir tous les produits
function getAllProducts($limit = 0) {
    $pdo = connectDB();
    $sql = "SELECT * FROM produits ORDER BY date_creation DESC";
    if ($limit > 0) {
        $sql .= " LIMIT :limit";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    } else {
        $stmt = $pdo->prepare($sql);
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Obtenir les produits en vedette
function getFeaturedProducts($limit = 3) {
    return getAllProducts($limit);
}

// Obtenir un produit par ID
function getProductById($id) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("SELECT * FROM produits WHERE id = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Obtenir toutes les catégories
function getAllCategories() {
    $pdo = connectDB();
    $stmt = $pdo->query("SELECT * FROM categories ORDER BY libelle ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Obtenir les produits par catégorie
function getProductsByCategory($categoryId, $limit = 0) {
    $pdo = connectDB();
    $sql = "SELECT * FROM produits WHERE categorie_id = :categoryId ORDER BY date_creation DESC";
    if ($limit > 0) {
        $sql .= " LIMIT :limit";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    } else {
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
