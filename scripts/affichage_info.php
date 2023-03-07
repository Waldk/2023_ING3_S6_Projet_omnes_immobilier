<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$nom = "";
$prenom = "";
$tel = "";
$mail = "";
$adresse = "";
$ville = "";
$code = "";

$client = $_SESSION['Omnes']['user_id'];
$sql = "SELECT nom,prenom,telephone,mail,Adresse_1,Ville,Code_postal FROM users WHERE identifiant = \"$client\"";
$resultat = mysqli_query($sessionsql, $sql);


while ($row = mysqli_fetch_assoc($resultat)) {
    $nom .=$row['nom'];
    $prenom .=$row['prenom'];
    $mail .=$row['mail'];
    $tel .=$row['telephone'];
    $adresse .=$row['Adresse_1'];
    $ville .=$row['Ville'];
    $code .=$row['Code_postal'];
    echo
        "<div class=\"user-info\">
        <h2>Informations personnelles</h2>
        <div class=\"user-name\">Nom et prénom : $prenom $nom</div>
        <div class=\"user-address\">Adresse : $adresse, $code $ville</div>
        <div class=\"user-phone\">Téléphone : $tel</div>
        <div class=\"user-email\">E-mail : $mail</div>
        <div class=\"user-bank\">trouver un moyen de cacher une information bancaire</div>
        <button class=\"bouton_footer\" id=\"button_modif\">Cliquez pour mettre à jour les informations</button>
    </div>";
}
?>