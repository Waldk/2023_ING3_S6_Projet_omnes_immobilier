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
$spécialité = "";
$description_cv = "";

if (isset($_GET["identifiant_agent"])) {
    $identifiant_agent = $_GET["identifiant_agent"];
    $sql = "SELECT nom,prenom,telephone,mail,Adresse_1,Ville,Code_postal,specialite,description_cv,Photo FROM users WHERE identifiant = \"$identifiant_agent\"";
    $resultat = mysqli_query($sessionsql, $sql);


    while ($row = mysqli_fetch_assoc($resultat)) {
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $photo = $row['Photo'];
        $mail = $row['mail'];
        $tel = $row['telephone'];
        $adresse = $row['Adresse_1'];
        $ville = $row['Ville'];
        $code = $row['Code_postal'];
        $spécialité = $row['specialite'];
        $description_cv = $row['description_cv'];

        echo
            "
        <div id=\"boite\">
                    <div id=\"boxi\">
                        <form
                            style=\"width:100%;padding: 30px;border: 1px solid #f1f1f1;background: #fff;margin-bottom: 120px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);\">
                            <div class=\"logo\">
                                <h1
                                    style=\"margin-left:40px; height: 100%;width: 40%;text-align:center;font-size: 30px;color: #000000;text-decoration: underline black;\">
                                    $prenom $nom</h1>
                                <img style=\"border-radius: 20px;\" class=\"image_info\" src=\"data:image/jpg;base64," . base64_encode($photo) . "\" />
                            </div>
                            <br><br><br><br><br><br><br><br><br>
                            <h4 style=\"text-align: center;font-size: 20px;color: #000000;\">Agent Immobilier agréé<br></h4>
                            <h4 style=\"text-align: center;font-size: 20px;color: #000000;\">Téléphone : +33 $tel<br>
                            </h4>
                            <h4 style=\"text-align: center;font-size: 20px;color: #000000;   \">Email :
                                $mail<br></h4>
                            <center>
                                <h2 style=\"height: 100%;width: 40%;text-align:center;font-size: 25px;color: red;\">Spécialité
                                    :</h2>
                            </center>
                            <h4 style=\"text-align: center;font-size: 20px;color: #000000;\">$spécialité<br></h4>
                            <center>
                                <h2 style=\"height: 100%;width: 40%;text-align:center;font-size: 25px;color: red;\">Formations
                                    :</h2>
                            </center>
                            <h4 style=\"text-align: center;font-size: 20px;color: #000000;\">
                                $description_cv
                            </h4>
                        </form>
                    </div>
                </div>
        ";
    }
}
?>