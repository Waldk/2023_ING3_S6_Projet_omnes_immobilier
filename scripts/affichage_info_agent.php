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
$photo = "";
$description = "";
$specialite = "";
$adresse = "";
$ville = "";
$code = "";

$client = $_SESSION['Omnes']['user_id'];
$sql = "SELECT nom,prenom,telephone,mail,Adresse_1,Ville,photo,description_cv,specialite,Code_postal FROM users WHERE identifiant = \"$client\"";
$resultat = mysqli_query($sessionsql, $sql);


while ($row = mysqli_fetch_assoc($resultat)) {
    $nom .=$row['nom'];
    $prenom .=$row['prenom'];
    $mail .=$row['mail'];
    $tel .=$row['telephone'];
    $adresse .=$row['Adresse_1'];
    $ville .=$row['Ville'];
    $photo .=$row['photo'];
    $description .=$row['description_cv'];
    $specialite .=$row['specialite'];
    $code .=$row['Code_postal'];
    echo
        "<div class=\"user-info\">
            <h2>Informations personnelles</h2>
            <div class=\"user-name\"><img style=\"border-radius: 20px; width:400px; height:300px;\"   class=\"image_info\" src=\"data:image/jpg;base64," . base64_encode($photo) . "\" /></div>
            <div class=\"user-name\">Nom et prénom : $nom  $prenom</div>
            <div class=\"user-address\">Adresse : $adresse, $code $ville</div>
            <div class=\"user-phone\">Téléphone : 0$tel</div>
            <div class=\"user-email\">E-mail : $mail</div>
            <div class=\"user-address\">Description : $description</div>
            <div class=\"user-address\">Specialite : $specialite</div>

            <button class=\"bouton_footer\" id=\"button_modif\">Modifier vos informations</button>
        </div>";
}
?>