<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Zoo Arcadia</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h2>Nos Services</h2>
        <p>Découvrez les services que nous proposons pour rendre votre visite inoubliable.</p>

        <section class="services-gallery">
            <!-- Restaurant -->
            <div class="service-card">
                <img src="restaurant.jpg" alt="Restaurant" class="service-image">
                <h3>Restaurant</h3>
                <p>Un espace convivial avec des plats savoureux pour toute la famille.</p>
            </div>

            <!-- Petit Train -->
            <div class="service-card">
                <img src="petit-train.jpg" alt="Petit Train" class="service-image">
                <h3>Petit Train</h3>
                <p>Explorez tout le zoo à bord de notre petit train touristique.</p>
            </div>

            <!-- Visite Guidée -->
            <div class="service-card">
                <img src="visite.jpg" alt="Visite Guidée" class="service-image">
                <h3>Visite Guidée</h3>
                <p>Profitez d’une visite enrichissante accompagnée de nos guides experts.</p>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>

