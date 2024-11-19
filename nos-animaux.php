<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Animaux - Zoo Arcadia</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h2>Nos Animaux</h2>
        <section class="animals">
            <div class="animal-card">
                <img src="Simba.jpg" alt="Lion" class="animal-image">
                <h3>Nom : Simba</h3>
                <p><strong>Espèce :</strong> Lion</p>
                <p><strong>État de santé :</strong> Excellent</p>
                <p><strong>Caractère :</strong> Courageux et protecteur</p>
                <p><strong>Nourriture favorite :</strong> Viande (6kg/jour)</p>
            </div>

            <div class="animal-card">
                <img src="dumbo.jpg" alt="Éléphant" class="animal-image">
                <h3>Nom : Dumbo</h3>
                <p><strong>Espèce :</strong> Éléphant</p>
                <p><strong>État de santé :</strong> Bon</p>
                <p><strong>Caractère :</strong> Doux et affectueux</p>
                <p><strong>Nourriture favorite :</strong> Fruits et légumes (160kg/jour)</p>
            </div>

            <div class="animal-card">
                <img src="Po.jpg" alt="Panda" class="animal-image">
                <h3>Nom : Po</h3>
                <p><strong>Espèce :</strong> Panda</p>
                <p><strong>État de santé :</strong> Moyen</p>
                <p><strong>Caractère :</strong> Paresseux mais adorable</p>
                <p><strong>Nourriture favorite :</strong> Bambou (20kg/jour)</p>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
