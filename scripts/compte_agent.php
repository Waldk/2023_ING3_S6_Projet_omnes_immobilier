<?php
echo '
            <div class="user-info">
                <h2>Informations personnelles</h2>
                <div class="user-name">Nom et prénom : Waldeck Felix</div>
                <div class="user-address">Adresse : 123 rue du Commerce, 75001 Paris</div>
                <div class="user-phone">Téléphone : 01 23 45 67 89</div>
                <div class="user-email">E-mail : john.doe@example.com</div>
                <div class="user-bank">trouver un moyen de cacher une information bancaire</div>
                <button class="bouton_footer" id="button_modif">Cliquez pour mettre à jour les informations</button>
            </div>
            <div class="modif-info" style="display : none;">
                <h2>Modification d\'informations</h2>
                    <div id="container">
                        <form action="scripts/inscription.php" method="post">
                            <table border="0">
                                <tr>
                                    <td>Nom:</td>
                                    <td><input type="text" name="nom"></td>
                                </tr>
                                <tr>
                                    <td>Prenom:</td>
                                    <td><input type="text" name="prenom"></td>
                                </tr>
                                <tr>
                                    <td>Adresse:</td>
                                    <td><input type="text" name="Adresse_1"></td>
                                </tr>
                                <tr>
                                    <td>Complément d\'adresse:</td>
                                    <td><input type="text" name="Adresse_2"></td>
                                </tr>
                                <tr>
                                    <td>Ville:</td>
                                    <td><input type="text" name="ville"></td>
                                </tr>
                                <tr>
                                    <td>Code Postal:</td>
                                    <td><input type="number" name="codepostal"></td>
                                </tr>
                                <tr>
                                    <td>Pays:</td>
                                    <td><input type="text" name="pays"></td>
                                </tr>
                                <tr>
                                    <td>telephone:</td>
                                    <td><input type="tel" name="telephone"></td>
                                </tr>
                                <tr>
                                    <td>E-mail:</td>
                                    <td><input type="email" name="mail"></td>
                                </tr>
                                <tr>
                                    <td>Identifiant:</td>
                                    <td><input type="text" name="identifiant"></td>
                                </tr>

                                <tr>
                                    <td>Mot de passe:</td>
                                    <td><input type="password" name="mot_de_passe"></td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="center"><input class="bouton_footer" type="submit"
                                            name="submit" value="valider"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
            </div>';

            include("scripts/script_affichage_rdv_agent.php");
            include("scripts/script_affichage_rdv_passe_agent.php");
?>