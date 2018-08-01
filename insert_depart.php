<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$depart = $_POST["depart"];
$sejour_id = $_POST["sejour_id"];
$utilisateur_id = $utilisateur["id"];

insertDepart($depart, $sejour_id);

header("Location: sejour.php?id=" . $sejour_id);

