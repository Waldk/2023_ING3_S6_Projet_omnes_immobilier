<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$search = "";
$lieu = "";
$adresse_lieu = "";
$ville_lieu = "";
$code_lieu = "";
$nom = "";
$prix = "";

$search = isset($_POST["search"]) ? $_POST["search"] : "";

$erreur = "";

if ($search == "") {
    $erreur .= "Le champ recherche est vide. <br>";
}

//$sql = "SELECT Adresse1,Ville,Code_postal FROM biens WHERE nom = \"$search\"";
//$resultat = mysqli_query($sessionsql, $sql);

session_start();
$_SESSION['Omnes']['search'] = $search;
//$_SESSION['Omnes']['result'] = $resultat;
header('Location: ../Recherche.php');

/*
echo "
<section class=\"slider\">
    <div class=\"container\">
        <h2 class=\"titre\">Résultats de recherche pour : $search</h2>  
        <br>
    ";

while ($row = mysqli_fetch_assoc($resultat)) {
    $adresse_lieu = $row['Adresse1'];
    $ville_lieu = $row['Ville'];
    $code_lieu = $row['Code_postal'];

    echo "
        <div class=\"slide\">
            <div class=\"slide-img terrain-1\">
                <a href=\"Detail_batiment.php\">Voir plus</a>
            </div>
            <br>
            <div>
                <h3>$nom</h3>
                <h4>Localisation : $adresse_lieu, $code_lieu $ville_lieu</h4>
                <h5>Prix : $prix €</h5>
            </div>
        </div>
    ";
}

echo '
    </div>
</section>
    ';*/
?>