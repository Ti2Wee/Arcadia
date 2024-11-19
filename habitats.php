<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitats - Zoo Arcadia</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h2>Nos Habitats</h2>
        <p>
            Découvrez nos habitats soigneusement recréés pour offrir un environnement naturel et captivant à nos animaux. 
        </p>

        <section class="habitats-gallery">
            <!-- Savane -->
            <div class="habitat-card">
                <img src="savane.jpg" alt="Savane" class="habitat-image">
                <h3>Savane</h3>
                <p>Un paysage ouvert où cohabitent lions, zèbres, et girafes.</p>
            </div>

            <!-- Jungle -->
            <div class="habitat-card">
                <img src="jungle.jpg" alt="Jungle" class="habitat-image">
                <h3>Jungle</h3>
                <p>Un environnement tropical et luxuriant pour singes et perroquets.</p>
            </div>

            <!-- Arctique -->
            <div class="habitat-card">
                <img src="polaire.jpg" alt="Arctique" class="habitat-image">
                <h3>Arctique</h3>
                <p>Un espace glacé et serein, idéal pour nos ours polaires.</p>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>

