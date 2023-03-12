<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$nom = "";
$prenom = "";
$adresse1 = "";
$adresse2 = "";
$ville = "";
$codepostal = "";
$pays = "";
$telephone = "";
$mail = "";
$photo ="";
$description ="";
$specialite ="";
$identifiant = "";
$motdepasse = "";

$client = $_SESSION['Omnes']['user_id'];
$sql = "SELECT nom,prenom,adresse_1,adresse_2,ville,code_postal,pays,telephone,mail,photo, description_cv, specialite,identifiant,mot_de_passe FROM users WHERE identifiant = \"$client\"";
$resultat = mysqli_query($sessionsql, $sql);


while ($row = mysqli_fetch_assoc($resultat)) {
    $nom .=$row['nom'];
    $prenom .=$row['prenom'];
    $adresse1 .=$row['adresse_1'];
    $adresse2 .=$row['adresse_2'];
    $ville .=$row['ville'];
    $codepostal .=$row['code_postal'];
    $pays .=$row['pays'];
    $telephone .=$row['telephone'];
    $mail .=$row['mail'];
    $photo .=$row['photo'];
    $description .=$row['description_cv'];
    $specialite .=$row['specialite'];
    $identifiant .=$row['identifiant'];
    $motdepasse .=$row['mot_de_passe'];
    echo
        "<center>
    <div class=\"modif-info\" style=\"display : none;\">
        <h2>Modification d'informations</h2>
            <div id=\"container\">
                <form action=\"scripts/modification_agent.php\" enctype=\"multipart/form-data\" method=\"post\">
                    <table border=\"0\">
                        <tr>
                            <td>Nom:</td>
                            <td><input type=\"text\" name=\"nom\" value=\"$nom\" required></td>
                        </tr>
                        <tr>
                            <td>Prenom:</td>
                            <td><input type=\"text\" name=\"prenom\" value=\"$prenom\" required></td>
                        </tr>
                        <tr>
                            <td>Adresse:</td>
                            <td><input type=\"text\" name=\"Adresse_1\" value=\"$adresse1\" required></td>
                        </tr>
                        <tr>
                            <td>Complément d\'adresse:</td>
                            <td><input type=\"text\" name=\"Adresse_2\" value=\"$adresse2\"></td>
                        </tr>
                        <tr>
                            <td>Ville:</td>
                            <td><input type=\"text\" name=\"ville\" value=\"$ville\" required></td>
                        </tr>
                        <tr>
                            <td>Code Postal:</td>
                            <td><input type=\"number\" name=\"codepostal\" value=\"$codepostal\" required></td>
                        </tr>
                        <tr>
                            <td>Pays:</td>
                            <td><input type=\"text\" name=\"pays\" value=\"$pays\" required></td>
                        </tr>
                        <tr>
                            <td>Telephone:</td>
                            <td><input type=\"tel\" name=\"telephone\" value=\"$telephone\" required></td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td><input type=\"email\" name=\"mail\" value=\"$mail\" required></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Photo:</td>
                            <td><input type=\"file\" name=\"photo\" required></td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td><input type=\"text\" name=\"description_cv\" value=\"$description\" required></td>
                        </tr>
                        <tr>
                            <td>Specialite:</td>
                            <td><input type=\"text\" name=\"specialite\" value=\"$specialite\" required></td>
                        </tr>
                        <tr>
                            <td>Identifiant:</td>
                            <td><input readonly=\"readonly\" type=\"text\" name=\"identifiant\" value=\"$identifiant\" required></td>
                        </tr>

                        <tr>
                            <td>Mot de passe:</td>
                            <td><input type=\"password\" name=\"mot_de_passe\" value=\"$motdepasse\" required></td>
                        </tr>

                        <tr>
                            <td colspan=\"2\" align=\"center\"><input class=\"bouton_footer\" type=\"submit\"
                                    name=\"submit\" value=\"valider\"></td>
                        </tr>
                    </table>
                </form>
            </div>
    </div></center>';";
}
    
?>