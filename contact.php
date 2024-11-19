<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Zoo Arcadia</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h2>Contactez-nous</h2>
        <form action="process-contact.php" method="POST" class="form-contact">
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" required>
            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="5" required></textarea>
            <label for="email">Votre Email :</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Envoyer</button>
        </form>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
