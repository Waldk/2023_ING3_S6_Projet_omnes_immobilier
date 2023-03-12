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
$compte = "";
$id_user = "";

$sql = "SELECT nom,prenom,telephone,mail,Adresse_1,Ville,Code_postal,type_de_compte,id_user FROM users";
$resultat = mysqli_query($sessionsql, $sql);

echo'<div class="user-list" style="display : none ;">';

while ($row = mysqli_fetch_assoc($resultat)) {
    $nom =$row['nom'];
    $prenom =$row['prenom'];
    $mail =$row['mail'];
    $tel =$row['telephone'];
    $adresse =$row['Adresse_1'];
    $ville =$row['Ville'];
    $code =$row['Code_postal'];
    $compte =$row['type_de_compte'];
    $id_user =$row['id_user'];

    echo
        "<div class=\"user-info\">
            <h2 align=center>Informations personnelles</h2>
            <div class=\"user-name\">
                Type de compte : $compte
                <form action=\"scripts/modif_type_compte.php\"  method=\"post\">
                    <table border=\"0\">
                            <td>Modifier le type de compte:</td>
                            <td>
                                <select name=\"type_de_compte\">
                                    <option selected=\"selected\">Type</option>
                                    <option value=\"Client\">Client</option>
                                    <option value=\"Agent immobilier\">Agent immobilier</option>
                                    <option value=\"Admin\">Admin</option>
                                </select>
                            </td>
                            <td>
                                <input style=\"display:none;\" type=\"text\" name=\"nom\" value=\"$id_user\" required>
                            </td>
                            <td>
                                <td colspan=\"2\" align=\"center\"><input style=\"padding : 4px 8px;color: white;background-color: #008CCE;    border: none;border-radius: 8px;cursor: pointer;\" type=\"submit\" name=\"submit\" value=\"valider\"></td>
                            </td>
                    </table>
                </form>
            </div>
            <div class=\"user-name\">Nom et prénom : $prenom $nom</div>
            <div class=\"user-address\">Adresse : $adresse, $code $ville</div>
            <div class=\"user-phone\">Téléphone : $tel</div>
            <div class=\"user-email\">E-mail : $mail</div>
            <div class=\"user-bank\">trouver un moyen de cacher une information bancaire</div>
            <form method=\"post\" action=\"scripts/delete_users.php\">
                        <input type=\"hidden\" name=\"rdv_id\" value=\"$id_user\">
                        <button class=\"bouton_rdv\" id=\"button_modif\" type=\"submit\" name=\"user_submit$id_user\">Cliquez pour supprimer ce compte</button>
            </form>
        </div>";
}
echo'</div>';
?>