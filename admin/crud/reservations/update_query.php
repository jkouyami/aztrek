<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$valide = isset($_POST["valide"]) ? 1 : 0;

//Enregistrement en base de données
updateReservation($id, $valide);


//Redirection vers la liste
header("Location: index.php");

