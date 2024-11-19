<?php
include('db_connect.php'); // Connexion à la base de données

// Vérifie si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Ajoute le service à la base de données
    $sql = "INSERT INTO services (name, description) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $description);

    if ($stmt->execute()) {
        echo "Service ajouté avec succès !";
    } else {
        echo "Erreur : " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Service</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Ajouter un Service</h1>
    <form method="POST" action="">
        <label for="name">Nom du Service :</label>
        <input type="text" name="name" id="name" required>
        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
