<?php
include('db_connect.php');

// Récupérer les statistiques
$result = $conn->query("SELECT name, consultations FROM animals ORDER BY consultations DESC");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Statistiques des Animaux</h1>
    <table>
        <tr>
            <th>Animal</th>
            <th>Consultations</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['consultations']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
