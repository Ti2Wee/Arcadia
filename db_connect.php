<?php
$servername = "localhost";
$username = "root"; // Utilisateur par défaut
$password = ""; // Mot de passe vide par défaut
$dbname = "arcadia";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
