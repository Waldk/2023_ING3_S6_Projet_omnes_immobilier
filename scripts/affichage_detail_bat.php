<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$description = "";
$description2 = "";
$nom_lieu = "";
$nom_agent = "";
$prenom = "";
$tel = "";
$mail = "";
$id_bien = "";
$photo[] = "";
$agent[] = "";

if (isset($_GET['id_bien'])) {
    $id_bien = $_GET['id_bien'];
}


$sql = "SELECT Adresse1,Ville,Code_postal,prix,Nom,Photo,Description,Description2,Agent_immo,Agent_immo1,Agent_immo2,Agent_immo3,Agent_immo4  FROM Biens WHERE id_bien = \"$id_bien\"";
$resultat = mysqli_query($sessionsql, $sql);

while ($row = mysqli_fetch_assoc($resultat)) {
    $adresse_lieu = $row['Adresse1'];
    $ville_lieu = $row['Ville'];
    $code_lieu = $row['Code_postal'];
    $prix = $row['prix'];
    $description = $row['Description'];
    $description2 = $row['Description2'];
    $photo[0] = $row['Photo'];
    $nom_lieu = $row['Nom'];
    $agent[0] = $row['Agent_immo'];
    $agent[1] = $row['Agent_immo1'];
    $agent[2] = $row['Agent_immo2'];
    $agent[3] = $row['Agent_immo3'];
    $agent[4] = $row['Agent_immo4'];

    $sql = "SELECT Photo1,Photo2,Photo3,Photo4,Photo5 FROM images WHERE id_bien = \"$id_bien\"";
    $resultat2 = mysqli_query($sessionsql, $sql);
    while ($row = mysqli_fetch_assoc($resultat2)) {
        $photo[1] = $row['Photo1'];
        $photo[2] = $row['Photo2'];
        $photo[3] = $row['Photo3'];
        $photo[4] = $row['Photo4'];
        $photo[5] = $row['Photo5'];

        echo "
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
            </div>";

        $sql = "SELECT nom,prenom,telephone,mail,Photo FROM users WHERE identifiant = \"$agent[0]\" or identifiant = \"$agent[1]\" or identifiant = \"$agent[2]\" or identifiant = \"$agent[3]\" or identifiant = \"$agent[4]\"";
        $resultat3 = mysqli_query($sessionsql, $sql);


        while ($row = mysqli_fetch_assoc($resultat3)) {
            $nom_agent = $row['nom'];
            $prenom = $row['prenom'];
            $mail = $row['mail'];
            $tel = $row['telephone'];
            $photo_agent = $row['Photo'];

        echo "
            <div class=\"descr\">
            <div class=\"agent\">
                <img style=\"float: left; width: 25%; padding-left:50px;\" class=\"image_info\" src=\"data:image/jpg;base64," . base64_encode($photo_agent) . "\" />
                <h4 style=\"float: left; padding-left: 30px;\">
                $nom_agent $prenom<br>
                Agent Immobilier agréé<br>
                Téléphone : +33 $tel<br>
                Email : $mail<br>
                Spécialité : Appartements<br>
                </h4>
            </div>
            <div>
                <hr class=\"trait\">
                <br><br>
            </div>";

            include("testcalendrier.php");

            echo";
            <div>
                <hr class=\"trait\">
                <br><br>
            </div>

            <div class=\"bouton_resa\">
                <button class=\"bouton_footer\" class=\"btn\" id=\"reserver_btn\"><a href=\"CV.php\">Voir le CV</a></button>
            </div>
            </div>

            ";
        }
    }
}
?>