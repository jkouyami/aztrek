<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST["nom"];

//Upload de l'image
$photo = $_FILES["photo"] ["name"];
$tmp = $_FILES["photo"] ["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $photo);

//Enregistrement en base de données
insertPays($nom, $photo);


//Redirection vers la liste
header("Location: index.php");

