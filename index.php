<?php
require_once 'functions.php';
require_once 'model/database.php';

// Déclaration des variables
$liste_photos = getAllPhotos();

getHeader("Accueil", "Jean Webdesign le super site");
?>

<header class="header-home">
    <div id="header_content" class="row col_center">

        <?php getMenu(); ?>

        <h2>Hello ! Je suis Jean WebDesign</h2>
        <h3>J'aime bidouiller Photoshop</h3>

    </div>
</header>

<main>
    <section id="photos">

        <div id="photos_content" class="row col_center">
            <h2>Dernières photos</h2>

            <?php foreach ($liste_photos as $photo) : ?>
                <?php include 'include/photo.inc.php'; ?>
            <?php endforeach; ?>

        </div>
    </section>

    <section id="contact">

        <h2>Prenons contact</h2>
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro officia, esse et suscipit quibusdam, iure tempore quas deleniti necessitatibus.</h3>

        <a href="contact.php">Me contacter</a>
    </section>
</main>

<?php getFooter(); ?>