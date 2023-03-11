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
            </div>
            <div class="user-rdv">

                <h2>Rendez-vous à venir</h2>
                <table id="consultation">
                    <thead>
                        <tr>
                            <th>Date/Heure</th>
                            <th>Agent immobilier</th>
                            <th>Biens</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/02/2022 14:30</td>
                            <td>Dio Brando</td>
                            <td>34 quai de grenelle, 75015 Paris(un lien vers le bien)</td>
                            <td colspan="2" align="center">
                                <form method="post" action="">
                                    <input type="hidden" name="champ-caché" value="1">
                                    <input class="bouton_rdv" type="submit" name="submit" value="Annuler ce RDV">
                            </td>
                        </tr>
                        <tr>
                            <td>10/03/2022 10:15</td>
                            <td>Jane Smith</td>
                            <td>34 quai de grenelle, 75015 Paris</td>
                            <td colspan="2" align="center">
                                <form method="post" action="">
                                    <input type="hidden" name="champ-caché" value="1">
                                    <input class="bouton_rdv" type="submit" name="submit" value="Annuler ce RDV">
                            </td>
                        </tr>
                        <tr>
                            <td>20/04/2022 16:45</td>
                            <td>Tep Penneçot</td>
                            <td>34 quai de grenelle, 75015 Paris</td>
                            <td colspan="2" align="center">
                                <form method="post" action="">
                                    <input type="hidden" name="champ-caché" value="1">
                                    <input class="bouton_rdv" type="submit" name="submit" value="Annuler ce RDV">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="user-consultation">
                <h2>Historique de consultations immobilières</h2>
                <table id="consultation">
                    <thead>
                        <tr>
                            <th>Date/Heure</th>
                            <th>Agent immobilier</th>
                            <th>Biens</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/02/2022 14:30</td>
                            <td>Dio Brando</td>
                            <td>34 quai de grenelle, 75015 Paris(un lien vers le bien)</td>
                        </tr>
                        <tr>
                            <td>10/03/2022 10:15</td>
                            <td>Jane Smith</td>
                            <td>34 quai de grenelle, 75015 Paris</td>
                        </tr>
                        <tr>
                            <td>20/04/2022 16:45</td>
                            <td>Tep Penneçot</td>
                            <td>34 quai de grenelle, 75015 Paris</td>
                        </tr>
                    </tbody>
                </table>
            </div>';
?>