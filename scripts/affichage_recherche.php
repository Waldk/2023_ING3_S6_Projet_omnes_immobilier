<?php
$nom="";
$prix="";
$photo="";
$adresse_lieu = "";
$ville_lieu = "";
$code_lieu = "";
$search= isset($_SESSION['Omnes']['search']) ? $_SESSION['Omnes']['search'] : "";
//$resultat= isset($_SESSION['Omnes']['result']) ? $_SESSION['Omnes']['result'] : "";

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);

//nom
$sql = "SELECT nom,Adresse1,Ville,Code_postal,prix,Photo FROM biens WHERE nom = \"$search\"";
$resultat = mysqli_query($sessionsql, $sql);

if (mysqli_num_rows($resultat) == 0) {
    $sql = "SELECT nom,Adresse1,Ville,Code_postal,prix,Photo FROM biens WHERE Agent_immo = \"$search\"";
    $resultat = mysqli_query($sessionsql, $sql);
}
 if (mysqli_num_rows($resultat) == 0) {
    $sql = "SELECT nom,Adresse1,Ville,Code_postal,prix,Photo FROM biens WHERE Ville = \"$search\"";
    $resultat = mysqli_query($sessionsql, $sql);
}
 if (mysqli_num_rows($resultat) == 0) {
    $sql = "SELECT nom,Adresse1,Ville,Code_postal,prix,Photo FROM biens WHERE id_bien = \"$search\"";
    $resultat = mysqli_query($sessionsql, $sql);
}

echo "
        <h2 class=\"titre\">Résultats de recherche pour : $search</h2>  
        <br>
    ";
    if (mysqli_num_rows($resultat) == 0) {
        echo '<center><p>Aucun résulat trouvé.</p>';
    }

    while ($row = mysqli_fetch_assoc($resultat)) {
        $nom = $row['nom'];
        $adresse_lieu = $row['Adresse1'];
        $ville_lieu = $row['Ville'];
        $code_lieu = $row['Code_postal'];
        $prix = $row['prix'];
        $photo = $row['Photo'];

    echo "
        <div class=\"slide\">
            <div class=\"slide-img \" style=\"background-image: url(data:image/jpg;base64," . base64_encode($row['Photo']) . ");\">
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
?>