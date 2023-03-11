<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$nom = "";
$type = "";
$adresse = "";
$ville = "";
$code = "";
$prix = "";
$agent = "";
$photo = "";
$id_bien = "";


$sql = "SELECT nom,type_bien,adresse1,ville,code_postal,prix,agent_immo,photo,id_bien FROM biens";
$resultat = mysqli_query($sessionsql, $sql);

echo'<div class="supp-bien" style="display : none ;">';

while ($row = mysqli_fetch_assoc($resultat)) {
    $nom =$row['nom'];
    $type =$row['type_bien'];
    $adresse =$row['adresse1'];
    $ville =$row['ville'];
    $code =$row['code_postal'];
    $prix =$row['prix'];
    $agent =$row['agent_immo'];
    $photo =$row['photo'];
    $id_bien =$row['id_bien'];

    echo
        "<div class=\"user-info\">
            <h2 align=center>Bien Immobilier</h2>
            <img style=\"width :300px; height : 300px; float: left; margin-bottom:20px;\" src=\"data:image/jpg;base64," . base64_encode($photo) . "\" />
            <div style=\"float: left;margin-left:20px; padding-top:80px;\">
                <div class=\"user-adress\">Type de bien : $type</div>
                <div class=\"user-name\">Nom : $nom</div>
                <div class=\"user-address\">Adresse : $adresse, $code $ville</div>
                <div class=\"user-phone\">Agent : $agent</div>
                <div class=\"user-name\">Prix : $prix</div>
            </div>
            <form method=\"post\" action=\"scripts/delete_bien.php\">
                        <input type=\"hidden\" name=\"rdv_id\" value=\"$id_bien\">
                        <button class=\"bouton_rdv\" id=\"button_bien_sup\" type=\"submit\" name=\"bien_submit$id_bien\">Cliquez pour supprimer ce bien</button>
            </form>
        </div>";
}
echo'</div>';
?>