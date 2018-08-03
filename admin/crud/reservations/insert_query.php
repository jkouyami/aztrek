<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$nb_voyageurs = $_POST["nb_voyageurs"];
$valide = $_POST["valide"];
$depart_id = $_POST["depart_id"];
$utilisateur_id = $_POST["utilisateur_id"];



//Enregistrement en base de données
insertReservation($id, $nb_voyageurs, $valide, $depart_id, $utilisateur_id);

//Redirection vers la liste
header("Location: index.php");

