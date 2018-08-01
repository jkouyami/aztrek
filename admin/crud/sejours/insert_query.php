<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST["titre"];
$nb_jours = $_POST["nb_jours"];
$difficulte = $_POST["difficulte"];
$description_longue = $_POST["description_longue"];
$description_courte = $_POST["description_courte"];
$itineraire = $_POST["itineraire"];
$pays_id = $_POST["pays_id"];


//Upload de l'image
$image = $_FILES["image"] ["name"];
$tmp = $_FILES["image"] ["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $image);

//Enregistrement en base de données
insertSejour( $titre, $nb_jours, $difficulte, $image, $description_longue, $description_courte, $itineraire, $pays_id);


//Redirection vers la liste
header("Location: index.php");

