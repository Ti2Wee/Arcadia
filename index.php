<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Zoo Arcadia</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="hero">
    <div class="hero-content">
        <h2>Bienvenue au Zoo Arcadia</h2>
        <p>
            Découvrez la magie de la faune et de la flore dans des habitats soigneusement conçus
            pour offrir une expérience inoubliable aux visiteurs et préserver la biodiversité.
        </p>
        <a href="nos-animaux.php" class="btn btn-hero">Explorer Nos Animaux</a>
    </div>

    <!-- Section Photos -->
    <div class="hero-photos">
        <img src="assets/images/rose.jpg" alt="Savane" class="hero-photo">
        <img src="assets/images/roux.jpg" alt="Jungle" class="hero-photo">
        <img src="assets/images/oran.jpg" alt="Arctique" class="hero-photo">
    </div>
</section>






        <!-- Présentation du Zoo -->
        <section class="presentation">
            <h2>Présentation du Zoo</h2>
            <p>
                Situé au cœur de la nature, le Zoo Arcadia est un sanctuaire pour plus de 200 espèces
                venant du monde entier. Notre mission est de protéger la biodiversité et de sensibiliser
                les visiteurs à l'importance de préserver notre planète.
            </p>
            <p>
                Explorez nos habitats uniques, participez à des activités interactives, et découvrez
                la faune dans toute sa splendeur. Un lieu idéal pour apprendre, s’émerveiller, et passer
                un moment inoubliable avec vos proches !
            </p>
        </section>

        <!-- Galerie de Photos -->
        <section class="gallery">
            <h2>Photos</h2>
            <div class="photo-grid">
                <img src="assets/images/zebres-accueil.jpg" alt="Photo du zoo 1" class="gallery-photo">
                <img src="assets/images/accueil-singe.jpg" alt="Photo du zoo 2" class="gallery-photo">
                <img src="assets/images/accueil-tigre.jpg" alt="Photo du zoo 3" class="gallery-photo">
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>

