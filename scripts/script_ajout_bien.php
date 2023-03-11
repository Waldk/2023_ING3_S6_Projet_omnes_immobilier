<?php

// Récupération des données soumises

$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
$adresse1 = isset($_POST["Adresse_1"]) ? $_POST["Adresse_1"] : "";
$adresse2 = isset($_POST["Adresse_2"]) ? $_POST["Adresse_2"] : "";
$ville = isset($_POST["ville"]) ? $_POST["ville"] : "";
$prix = isset($_POST["prix"]) ? $_POST["prix"] : "";
$codepostal = isset($_POST["codepostal"]) ? $_POST["codepostal"] : "";
$pays = isset($_POST["pays"]) ? $_POST["pays"] : "";
$type_bien = isset($_POST["type_bien"]) ? $_POST["type_bien"] : "";
$description = isset($_POST["description"]) ? $_POST["description"] : "";
$video = isset($_POST["video"]) ? $_POST["video"] : "";
$photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : "";
$agent = isset($_POST["agent"]) ? $_POST["agent"] : "";

$erreur = "";

if ($nom == "") {
    $erreur .= "Le champ nom est vide. <br>";
}
if ($adresse1 == "") {
    $erreur .= "Le champ adresse est vide. <br>";
}
if ($ville == "") {
    $erreur .= "Le champ ville est vide. <br>";
}
if ($codepostal == "") {
    $erreur .= "Le champ code postal est vide. <br>";
}
if ($pays == "") {
    $erreur .= "Le champ pays est vide. <br>";
}
if ($type_bien == "") {
    $erreur .= "Le champ type de biens est vide. <br>";
}
if ($prix == "") {
    $erreur .= "Le champ prix est vide. <br>";
}

$photo_tmp = $_FILES['photo']['tmp_name'];
// vérification de l'extension de la photo
$photo_ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));
if (in_array($photo_ext, array("jpg", "jpeg", "png", "gif")) === false) {
    echo "Extension non autorisée, veuillez choisir un fichier image.";
    exit();
}
$image = addslashes(file_get_contents($photo_tmp));

if ($erreur == "") {

    // Connexion à la base de données
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'test_projet_1';
    $session = mysqli_connect($host, $user, $password, $database);

    // Vérification si la connexion est établie
    if (!$session) {
        die('La connexion à la base de données a échoué : ' . mysqli_connect_error());
    }
    $sql = "INSERT INTO Biens (nom, Adresse1, Adresse2, ville, code_postal, pays, Type_bien, description, prix, photo, video, agent_immo) 
                          VALUES ('$nom', '$adresse1', '$adresse2', '$ville', '$codepostal', '$pays', '$type_bien', '$description', '$prix', '$image', '$video', '$agent')";
    if (mysqli_query($session, $sql)) {
        echo "Nouveau bien créé avec succès.";
        header('Location: ../accueil.php');
    } else {
        echo "Une erreur est survenue lors de la création du bien : " . mysqli_error($session);
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($session);
} else {
    echo "Erreur : <br>" . $erreur;
}
?>