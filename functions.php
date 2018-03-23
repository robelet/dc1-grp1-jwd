<?php

function debug($var, bool $die = true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die) {
        die;
    }
}

/**
 * Affiche le contenu du fichier header.php
 * @param string $title Titre de la page
 * @param string $description MetaDescription de la page
 */
function getHeader(string $title, string $description, array $stylesheets = []) {
    require_once 'layout/header.php';
}

function getMenu() {
    require_once 'layout/menu.php';
}

function getFooter() {
    require_once 'layout/footer.php';
}