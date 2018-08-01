<?php

function getAllSejours(int $limit = 999): array {
    global $connexion;

    $query = "SELECT 
                sejour.*,
                pays.nom AS pays,
                MIN(depart.prix) AS prix,
                IFNULL(SUM(reservation.nb_voyageurs), 0) AS nb_voyageurs
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            LEFT JOIN depart ON depart.sejour_id = sejour.id
            LEFT JOIN reservation ON reservation.depart_id = depart.id
            WHERE depart.date_debut > NOW() OR depart.date_debut IS NULL
            GROUP BY sejour.id
            ORDER BY RAND()
            LIMIT :limit";           

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}



function getAllSejoursByPays(int $id): array {
    global $connexion;

    $query = "SELECT 
            sejour.*,
            pays.nom AS pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            WHERE pays.id = :id";           

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}



function getSejour(int $id): array {
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

function insertSejour(string $titre, string $nb_jours, string $difficulte, string $image, string $description_longue, string $description_courte,string $itineraire, int $pays_id): int{
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, nb_jours, difficulte, image, description_longue, description_courte, itineraire, pays_id) VALUES (:titre, :nb_jours, :difficulte, :image, :description_longue, :description_courte, :itineraire, :pays_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":nb_jours", $nb_jours);
    $stmt->bindParam(":difficulte", $difficulte);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":itineraire", $itineraire);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
    
}



function updateSejour(string $titre, string $nb_jours, string $difficulte, string $image, string $description_longue, string $description_courte,string $itineraire, int $pays_id): int{
    /* @var $connexion PDO */
    global $connexion;
    
     $query = "UPDATE sejour
                SET titre = :titre,
                    nb-jours = :nb-jours,
                    difficulte = :difficulte,
                    image = :image,
                    description_longue = :description_longue,
                    description_courte = :description_courte,
                    itineraire = :itineraire,
                    pays_id = :pays_id
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":nb-jours", $nb-jours);
    $stmt->bindParam(":difficulte", $difficulte);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":itineraire", $itineraire);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
    
}


//Entities: fonctions qui permettent de récupérer des informations dans la base de données. Permet au php et au sql de communiquer ensemble

//Fetch ou fetchAll trouve des infos précises sur un projet en particulier ou sur plusieurs projets
