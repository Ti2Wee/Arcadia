<?php
include('db_connect.php');

// Gestion de la suppression
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM services WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

// Récupérer les services existants
$result = $conn->query("SELECT * FROM services");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gérer les Services</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Gérer les Services</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
                <a href="admin_edit_service.php?id=<?php echo $row['id']; ?>">Modifier</a>
                <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="admin_add_service.php">Ajouter un Service</a>
</body>
</html>
