<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$agent_immo = "";
$date = "";
$lieu = "";
$adresse_lieu = "";
$ville_lieu = "";
$code_lieu = "";
$id_rdv = "";

$client = $_SESSION['Omnes']['user_id'];
$sql = "SELECT Client,Date,Lieu,id_rdv FROM RDV JOIN Users ON Users.identifiant = RDV.Agent_immo WHERE Users.identifiant = \"$client\" and RDV.effectue=\"0\"";
$resultat = mysqli_query($sessionsql, $sql);

echo '
<div class="user-rdv">

    <h2>Rendez-vous à venir</h2>
        <table id="consultation">
            <thead>
                <tr>
                    <th>Date/Heure</th>
                    <th>Client</th>
                    <th>Biens</th>
                    <th>Adresse</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>';

while ($row = mysqli_fetch_assoc($resultat)) {
    $client = $row['Client'];
    $date = $row['Date'];
    $lieu = $row['Lieu'];
    $id_rdv = $row['id_rdv'];
    $sql = "SELECT Adresse1,Ville,Code_postal FROM biens WHERE nom = \"$lieu\"";
    $resultat2 = mysqli_query($sessionsql, $sql);
    while($row = mysqli_fetch_assoc($resultat2)) {
        $adresse_lieu =$row['Adresse1'];
        $ville_lieu =$row['Ville'];
        $code_lieu =$row['Code_postal'];
    }

    echo
        "<tr>
            <td>$date</td>
            <td>$client</td>
            <td><a href=\"vers le lien du bien \">$lieu</a></td>
            <td>$adresse_lieu, $code_lieu $ville_lieu</td>
            <td colspan=\"2\" align=\"center\">
                <form method=\"post\" action=\"scripts/delete_rdv.php\" >
                    <input type=\"hidden\" name=\"rdv_id\" value=\"$id_rdv\">
                    <button class=\"bouton_rdv\" type=\"submit\" name=\"submit$id_rdv\">Annuler ce RDV</button>
                </form>
            </td>
        </tr>";
}

echo '
    </tbody>
    </table>
    </div>
';



?>