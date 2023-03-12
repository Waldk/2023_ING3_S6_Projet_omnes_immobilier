<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$str_resultat = "";
$description = "";
$nom = "";
$photo = "";

$sql = "SELECT Nom,Photo,Description,id_bien FROM Biens";
$resultat = mysqli_query($sessionsql, $sql);

while ($row = mysqli_fetch_assoc($resultat)) {
    $description = $row['Description'];
    $photo = $row['Photo'];
    $nom = $row['Nom'];
    $id_bien = $row['id_bien'];
    echo
        "<li class=\"element-carousel\">
                    <div class=\"card\">
                        <h2 class=\"card-title\">".utf8_encode($nom)."</h2>
                        <img style=\"width :700px; height : 300px;\" src=\"data:image/jpg;base64," . base64_encode($photo) . "\" />
                        <div class=\"card-content\">
                            <p>".utf8_encode($description)."</p>
                            <a href=\"Detail_batiment.php?id_bien=$id_bien\" class=\"button\">Voir plus</a>
                        </div>
                    </div>
                </li>";
}
?>