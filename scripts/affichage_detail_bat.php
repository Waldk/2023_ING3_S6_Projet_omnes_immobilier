<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$description = "";
$description2 ="";
$nom = "";
$id_bien= "";
$photo[] = "";

if(isset($_GET['id_bien'])) {
   $id_bien=$_GET['id_bien']; 
}


$sql = "SELECT Adresse1,Ville,Code_postal,prix,Nom,Photo,Description,Description2 FROM Biens WHERE id_bien = \"$id_bien\"";
$resultat = mysqli_query($sessionsql, $sql);

while ($row = mysqli_fetch_assoc($resultat)) {
    $adresse_lieu = $row['Adresse1'];
    $ville_lieu = $row['Ville'];
    $code_lieu = $row['Code_postal'];
    $prix = $row['prix'];
    $description = $row['Description'];
    $description2 = $row['Description2'];
    $photo[0] = $row['Photo'];
    $nom = $row['Nom'];

    $sql = "SELECT Photo1,Photo2,Photo3,Photo4,Photo5 FROM images WHERE id_bien = \"$id_bien\"";
    $resultat2 = mysqli_query($sessionsql, $sql);
    while ($row = mysqli_fetch_assoc($resultat2)) {
        $photo[1] = $row['Photo1'];
        $photo[2] = $row['Photo2'];
        $photo[3] = $row['Photo3'];
        $photo[4] = $row['Photo4'];
        $photo[5] = $row['Photo5'];

        echo"
            <div class=\"container\">

            <div class=\"mySlides\">
                <img style=\"width :100%;\" src=\"data:image/jpg;base64," . base64_encode($photo[0]) . "\" />
            </div>

            <div class=\"mySlides\">
            <img style=\"width :100%;\" src=\"data:image/jpg;base64," . base64_encode($photo[1]) . "\" />
            </div>

            <divc class=\"mySlides\">
            <img style=\"width :100%;\" src=\"data:image/jpg;base64," . base64_encode($photo[2]) . "\" />
            </div>

            <div class=\"mySlides\">
            <img style=\"width :100%;\" src=\"data:image/jpg;base64," . base64_encode($photo[3]) . "\" />
            </div>

            <div class=\"mySlides\">
            <img style=\"width :100%;\" src=\"data:image/jpg;base64," . base64_encode($photo[4]) . "\" />
            </div>

            <div class=\"mySlides\">
            <img style=\"width :100%;\" src=\"data:image/jpg;base64," . base64_encode($photo[5]) . "\" />
            </div>

            <div class=\"row\">
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"data:image/jpg;base64," . base64_encode($photo[0]) . "\" style=\"width:100%\" onclick=\"currentSlide(1)\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"data:image/jpg;base64," . base64_encode($photo[1]) . "\"style=\"width:100%\" onclick=\"currentSlide(2)\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"data:image/jpg;base64," . base64_encode($photo[2]) . "\" style=\"width:100%\" onclick=\"currentSlide(3)\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"data:image/jpg;base64," . base64_encode($photo[3]) . "\" style=\"width:100%\" onclick=\"currentSlide(4)\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"data:image/jpg;base64," . base64_encode($photo[4]) . "\" style=\"width:100%\" onclick=\"currentSlide(5)\">
            </div>
            <div class=\"column\">
                <img class=\"demo cursor\" src=\"data:image/jpg;base64," . base64_encode($photo[5]) . "\" style=\"width:100%\" onclick=\"currentSlide(6)\">
            </div>
            </div>
            ";
    }
}
?>