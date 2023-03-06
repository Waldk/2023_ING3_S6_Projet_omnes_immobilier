<?php
include("scripts/affichage_info.php");
echo'
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

            include("scripts/script_affichage_rdv.php");
            include("scripts/script_affichage_rdv_passe.php");
?>