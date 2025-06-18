<?php
try {
    $host = 'localhost';
    $dbname = 'artisanat_marocain';
    $username = 'root'; // À changer en production
    $password = ''; // À changer en production
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // Définir le fuseau horaire
    $pdo->exec("SET time_zone = '+00:00'");
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
?>