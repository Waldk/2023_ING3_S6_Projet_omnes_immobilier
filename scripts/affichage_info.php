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
$typecarte = "";
$numerocarte = "";
$dateexpiration = "";
$codesecurite = "";
$adresse = "";
$ville = "";
$code = "";

$client = $_SESSION['Omnes']['user_id'];
$sql = "SELECT nom,prenom,telephone,mail,type_carte,numero_carte,date_expiration,code_securite,Adresse_1,Ville,Code_postal FROM users WHERE identifiant = \"$client\"";
$resultat = mysqli_query($sessionsql, $sql);


while ($row = mysqli_fetch_assoc($resultat)) {
    $nom .=$row['nom'];
    $prenom .=$row['prenom'];
    $mail .=$row['mail'];
    $typecarte .=$row['type_carte'];
    $numerocarte .=$row['numero_carte'];
    $dateexpiration .=$row['date_expiration'];
    $codesecurite .=$row['code_securite'];
    $tel .=$row['telephone'];
    $adresse .=$row['Adresse_1'];
    $ville .=$row['Ville'];
    $code .=$row['Code_postal'];
    echo
        "<div class=\"user-info\">
            <h2>Informations personnelles</h2>
            <div class=\"user-name\">Nom et prénom : $nom  $prenom</div>
            <div class=\"user-address\">Adresse : $adresse, $code $ville</div>
            <div class=\"user-phone\">Téléphone : 0$tel</div>
            <div class=\"user-email\">E-mail : $mail</div>
            <div class=\"user-adress\">Type de carte bancaire : $typecarte</div>
            <div class=\"user-adress\">Expire le $dateexpiration</div>
            <div type=\"password\" class=\"user-adress\">Numéro de carte : $numerocarte</div>
            <div class=\"user-adress\">Code sécurité : $codesecurite</div>

            <button class=\"bouton_footer\" id=\"button_modif\">Modifier vos informations</button>
        </div>";
}
?>