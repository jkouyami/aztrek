<?php

function getAllDepartBySejour(int $id): array {
  global $connexion;

  $query = "SELECT
              utilisateur.nom,
              utilisateur.prenom,
              utilisateur.photo,
              depart.date_debut,
              reservation.prix,
              reservation.utilisateur_id
          FROM reservation
          INNER JOIN utilisateur
                  ON utilisateur.id = reservation.utilisateur_id
         
          ORDER BY depart.date_debut DESC;";

  $stmt = $connexion->prepare($query);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

  return $stmt->fetchAll();
}

function getAllReservation(): array {
  global $connexion;

  $query = "SELECT
               reservation.*,
               depart.date_debut,
               CONCAT(utilisateur.nom, ' ', utilisateur.prenom) AS utilisateur,
                sejour.titre AS sejour,
                pays.nom AS pays
          FROM reservation
          INNER JOIN utilisateur ON utilisateur.id = reservation.utilisateur_id
          INNER JOIN depart ON depart.id = reservation.depart_id
          INNER JOIN sejour ON sejour.id = depart.sejour_id
          INNER JOIN pays ON pays.id = sejour.pays_id
          ORDER BY depart.date_debut DESC;";

  $stmt = $connexion->prepare($query);
  $stmt->execute();

  return $stmt->fetchAll();
}
function insertReservation(int $nb_voyageurs, string $valide, string $depart_id, string $utilisateur_id): int {
  /* @var $connexion PDO */
  global $connexion;
 
  $query ="INSERT INTO reservation (nb_voyageurs, valide, depart_id, utilisateur_id) VALUES (:nb_voyageurs, 0, :depart_id, :utilisateur_id);";
 
  $stmt = $connexion->prepare($query);
  $stmt->bindParam(":nb_voyageurs", $nb_voyageurs);
  $stmt->bindParam(":valide", $valide);
  $stmt->bindParam(":depart_id", $depart_id);
  $stmt->bindParam(":utilisateur_id", $utilisateur_id);
  $stmt->execute();
 
  return $connexion->lastInsertId();
}

function updateReservation(int $id, string $valide): int{
    /* @var $connexion PDO */
    global $connexion;
    
     $query = "UPDATE reservation
                SET valide = :valide
                WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":valide", $valide);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
    
}