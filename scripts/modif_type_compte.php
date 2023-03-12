<?php

$typecompte = isset($_POST["type_de_compte"]) ? $_POST["type_de_compte"] : "";
$id_user = isset($_POST["nom"]) ? $_POST["nom"] : "";

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$session = mysqli_connect($host, $user, $password, $database);

if (!$session) {
    die('La connexion à la base de données a échoué : ' . mysqli_connect_error());
}

$sql = "UPDATE Users SET type_de_compte = '$typecompte'  WHERE id_user = '$id_user'";

if ($session->query($sql) === TRUE) {
    echo $typecompte;
} else {
    echo "Erreur lors de la mise à jour des données : " . $session->error;
}

mysqli_close($session);
header('Location: ../compte.php');
?>