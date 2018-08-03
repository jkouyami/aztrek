<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$date_debut = $_POST["date_debut"];
$prix = $_POST["prix"];
$nb_places = $_POST["nb_places"];
$sejour_id = $_POST["sejour_id"];



//Enregistrement en base de données
insertDepart($date_debut, $prix, $nb_places, $sejour_id);

//Redirection vers la liste
header("Location: index.php");

