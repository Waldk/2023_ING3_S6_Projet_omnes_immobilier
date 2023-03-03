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

$sql = "SELECT Nom,Photo,Description FROM Biens";
$resultat = mysqli_query($sessionsql, $sql);

while ($row = mysqli_fetch_assoc($resultat)) {
    $description = $row['Description'];
    $photo = $row['Photo'];
    $nom = $row['Nom'];
    echo
        "<li class=\"element-carousel\">
                    <div class=\"card\">
                        <h2 class=\"card-title\">$nom</h2>
                        <img src=\"$photo.png\" />
                        <div class=\"card-content\">
                            <p>$description</p>
                            <a href=\"#\" class=\"button\">Read more</a>
                        </div>
                    </div>
                </li>";
}



?>