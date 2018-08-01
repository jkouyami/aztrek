<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$nb_voyageurs = $_POST["nb_voyageurs"];
$valide = $_POST["valide"];
$depart_id = $_POST["depart_id"];
$utilisateur_id = $utilisateur_id["id"];

insertReservation($nb_voyageurs, $valide, $depart_id, $utilisateur_id);

header("Location: reservation.php?id=" . $sejour_id);
