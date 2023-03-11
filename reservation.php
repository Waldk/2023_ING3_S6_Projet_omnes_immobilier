<!DOCTYPE html>
<head>
    <title>Prime Properties</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css"/>
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

        <h2 align="center">Réservation d'un bien</h2>
        <div class="descr">
            <form>
                <table align="center">
                    <tr>
                        <td>Date de Réservation</td>
                        <td><input type="date" id="start" name="date-rdv"></td>
                    </tr>
                    <tr>
                        <td>Choix de l'agent immobilier:</td>
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
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" value="valider"></td>
                    </tr>
                </table>
            </form>
        </div>

        <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>