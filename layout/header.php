<!doctype html>
<!-- le doctype est indispensable -->

<html lang="fr">

    <!-- head contient les infos invisibles -->
    <head>

        <!-- encodage des caractères spécifiques -->

        <meta charset="utf-8">

        <title>JWD - <?php echo $title; ?></title>

        <meta name="description" content="<?php echo $description; ?>">

        <!-- icone d'onglet et de favoris -->

        <link rel="shortcut icon" href="favicone/favicon.ico">

        <!-- feuilles de styles -->

        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

        <!-- normalize -->

        <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">

        <!-- Grille 12 colonnes -->

        <link rel="stylesheet" href="css/grille.css" type="text/css" media="screen">

        <?php foreach ($stylesheets as $path) : ?>
            <link rel="stylesheet" href="<?php echo $path; ?>" type="text/css" media="screen">
        <?php endforeach; ?>

        <!-- Google Font -->

        <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">

    </head>

    <!-- body contient toutes les infos visibles par les moteurs de recherche et pour les utilisateurs -->

    <body>