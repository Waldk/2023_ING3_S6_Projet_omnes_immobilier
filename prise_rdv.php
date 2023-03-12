<?php
session_start();
$client = $_SESSION['Omnes']['user_id'];
$mysqli = new mysqli("localhost", "root", "", "test_projet_1");

if ($mysqli->connect_error) {
    die("Erreur de connexion à la base de données: " . $mysqli->connect_error);
}

if (isset($_GET["date"]) && isset($_GET["identifiant_agent"]) && isset($_GET['nom_lieu'])) {
    $date = $_GET["date"];
    $identifiant_agent = $_GET["identifiant_agent"];
    $nom_lieu = $_GET['nom_lieu'];
    $id_bien = $_GET['id_bien'];

    echo $date;
    echo $nom_agent;
    echo $nom_lieu;

    $result = $mysqli->query("SELECT date FROM rdv WHERE date = '" . $date . "'");
    if ($result->num_rows > 0) {
        echo "Cette date est déjà prise.";
    } else {
        $insert = "INSERT INTO rdv (date,client,agent_immo,lieu) VALUES ('" . $date . "', '" . $client . "', '" . $identifiant_agent . "', '" . $nom_lieu . "')";
        if ($mysqli->query($insert) === TRUE) {
            echo "La date a été ajoutée avec succès.";
            header('Location: Parcourir.php');
        } else {
            echo "Une erreur est survenue : " . $mysqli->error;
            header("Location: Detail_batiment.php?id_bien=$id_bien");
        }
    }
}

$mysqli->close();
?>