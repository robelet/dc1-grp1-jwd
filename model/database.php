<?php

require_once 'config/parameters.php';

$connection = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_pass, [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
]);

function getAllPhotos(): array {
    global $connection;
    
    $query = "SELECT 
                    photo.id,
                    photo.titre,
                    photo.image,
                    photo.nb_likes,
                    photo.date_creation,
                    date_format(photo.date_creation, '%e %M %Y' ) AS 'date_creation_format',
                    categorie.titre AS categorie
                FROM photo 
                INNER JOIN categorie ON categorie.id = photo.categorie_id
                ORDER BY photo.date_creation DESC 
                LIMIT 6;";
    
    $stmt = $connection->prepare($query);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function getPhoto(int $id): array {
    global $connection;
    
    $query = "SELECT id,
                    titre,
                    image,
                    nb_likes,
                    date_creation,
                    date_format(date_creation, '%e %M %Y' ) AS 'date_creation_format',
                    description 
                    FROM photo 
                    WHERE id = :id";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    return $stmt->fetch();
}

function getAllCommentaireByPhoto(int $id):array {
    global $connection;

    $query = "SELECT id,
                    content,
                    date_creation,
                    date_format(date_creation, '%e %M %Y' ) AS 'date_creation_format'
                FROM commentaire
                WHERE photo_id = :id
                ORDER BY date_creation";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


function insertCommentaire(string $contenu, int $photo_id){
    global $connection;

    $query = "INSERT INTO commentaire(content, date_creation, photo_id) VALUES (:contenu, NOW(), :id)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":contenu", $contenu);
    $stmt->bindParam(":id", $photo_id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllTagsByPhoto (int $id): array {
    global $connection;

    $query = "SELECT 
                    tag.id,
                    tag.titre
            FROM tag
            INNER JOIN photo_has_tag ON photo_has_tag.tag_id = tag.id
            WHERE photo_has_tag.photo_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetchAll();
}



