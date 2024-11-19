<?php
include('db_connect.php'); // Connexion à la base de données

// Gestion de la création d'utilisateur
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Hachage du mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertion dans la base de données
    $sql = "INSERT INTO users (email, password, role) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $email, $hashed_password, $role);

    if ($stmt->execute()) {
        echo "Utilisateur créé avec succès !";
    } else {
        echo "Erreur : " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Utilisateur</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Ajouter un Utilisateur</h1>
    <form method="POST" action="">
        <label>Email :</label>
        <input type="email" name="email" required>
        <label>Mot de passe :</label>
        <input type="password" name="password" required>
        <label>Rôle :</label>
        <select name="role" required>
            <option value="employe">Employé</option>
            <option value="veterinaire">Vétérinaire</option>
        </select>
        <button type="submit">Créer l'utilisateur</button>
    </form>
</body>
</html>
