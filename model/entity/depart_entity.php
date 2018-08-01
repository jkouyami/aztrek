<?php

function getAllDeparts(int $limit = 999): array {
    global $connexion;

    $query = "SELECT 
                depart.*,
                sejour.titre AS sejour,
                pays.nom AS pays
            FROM depart
            INNER JOIN sejour ON sejour.id = depart.sejour_id
            INNER JOIN pays ON pays.id = sejour.pays_id
            LIMIT :limit";           

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllDepartsBySejour(int $id): array {
    global $connexion;

    $query = "SELECT *
        FROM depart
        WHERE depart.sejour_id = :id
        ";           

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


function getDepart(int $id): array {
    global $connexion;

    $query = "SELECT 
sejour.*,
pays.nom AS pays

FROM sejour
INNER JOIN pays ON pays.id = sejour.pays_id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertDepart(string $date_debut, string $prix, string $nb_places, int $sejour_id): int{
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO depart (date_debut, prix, nb_places, sejour_id) VALUES (:date_debut, :prix, :nb_places, :sejour_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_places", $nb_places);
    $stmt->bindParam(":sejour_id", $sejour_id);
   
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
    
}

function updateDepart(string $id, string $date_debut, string $prix, string $nb_places): int{
    /* @var $connexion PDO */
    global $connexion;
    
 $query = "UPDATE depart
                SET 
                
                    date_debut = :date_debut,
                    prix = :prix,
                    nb_places = :nb_places,
                    
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_places", $nb_places);
    
   
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
    
}





//Entities: fonctions qui permettent de récupérer des informations dans la base de données. Permet au php et au sql de communiquer ensemble

//Fetch ou fetchAll trouve des infos précises sur un projet en particulier ou sur plusieurs projets
