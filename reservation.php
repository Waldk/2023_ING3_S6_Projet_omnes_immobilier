<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="image/OMNES.ico">

</head>

<body>
    <div id="wrapper">
        <?php
        include("scripts/header.php");
        ?>

        <?php
        include("scripts/deroulant.php");
        ?>

        <section>
            <center>
                <div class="boite">
                    <center>
                        <form action="validation.php" class="reserve">
                            <table align="center">
                                <h3 align="center">Réservation d'un bien</h3>
                                <br>
                                <tr>
                                    <td>Date de Réservation :</td>
                                    <td><input type="date" id="start" name="date-rdv"></td>
                                </tr>
                                <tr>
                                    <td>Agent immobilier :</td>
                                    <td>
                                        <select name="agent" name="Nom_agent">
                                            <option selected="selected">Sélectionner votre agent</option>
                                            <option value="Nom_agent">PENNECOT</option>
                                            <option value="Nom_agent">LA</option>
                                            <option value="Nom_agent">FELIX</option>
                                            <option value="Nom_agent">THOMAS</option>
                                        </select>
                                    </td>
                                </tr>
                                <th>Paiement des taxes de réservation: </th>
                                <tr>
                                    <td>Carte de paiement :</td>
                                    <td>
                                        <select name="moyen de paiement" name="type_carte">
                                            <option selected="selected">Sélectionner votre carte</option>
                                            <option value="MasterCard">MasterCard</option>
                                            <option value="Visa">Visa</option>
                                            <option value="American Express">Americain Express</option>
                                            <option value="Paypal">Paypal</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Numéro de carte :</td>
                                    <td><input type="number" name="numero_carte"></td>
                                </tr>
                                <tr>
                                    <td>Date d'expiration :</td>
                                    <td><input type="date" name="date_expiration"></td>
                                </tr>
                                <tr>
                                    <td>code de sécurité :</td>
                                    <td><input type="text" name="code_securite"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" name="submit" value="valider">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>
            </center>
        </section>

        <?php
        include("scripts/footer.php");
        ?>
    </div>
</body>

</html>