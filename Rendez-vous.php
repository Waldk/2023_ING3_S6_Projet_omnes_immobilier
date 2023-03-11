<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="image/OMNES.ico">
    <link rel="stylesheet" type="text/css" href="Rendez-vous.css">
    <script src="https://kit.fontawesome.com/92cddb0a79.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="wrapper">
        <?php
        include("scripts/header.php");
        ?>
        <?php
        include("scripts/deroulant.php");
        ?>

        <div class="user-rdv">

            <h2 align="center">Rendez-vous à venir</h2>
            <?php
                include("scripts/affichage_detail_rdv.php");
            ?>
            <!--<table id="consultation">
                <tr>
                    <th>Date/Heure</th>
                    <th>Agent immobilier</th>
                    <th>Biens</th>
                    <th></th>
                </tr>
                <tbody>
                    <tr>
                        <td>09/04/2023 14:30</td>
                        <td>Marco La</td>
                        <td>34 quai de grenelle, 75015 Paris</td>
                        <td colspan="2" align="center">
                            <form method="post" action="scripts/delete_rdv.php">
                                <input type="hidden" name="champ-caché" value="1">
                                <input class="bouton_rdv" type="submit" name="submit" value="Annuler ce RDV">
                            </form>
                        </td>
                    </tr>

                    <div class="descr">
                        <img src="image/semaine1">
                        <br>
                        <div>
                            <h3 align="center">Terrain 312</h3>
                            <h4 align="center">Localisation : Paris 15</h4>
                            <h5 align="center">Prix : 370 000 €</h5>
                        </div>
                    </div>
                </tbody>
            </table>

            <table id="consultation">
                <tr>
                    <th>Date/Heure</th>
                    <th>Agent immobilier</th>
                    <th>Biens</th>
                    <th></th>
                </tr>
                <tbody>
                    <tr>
                        <td>09/04/2023 14:30</td>
                        <td>Marco La</td>
                        <td>34 quai de grenelle, 75015 Paris</td>
                        <td colspan="2" align="center">
                            <form method="post" action="scripts/delete_rdv.php">
                                <input type="hidden" name="champ-caché" value="1">
                                <input class="bouton_rdv" type="submit" name="submit" value="Annuler ce RDV">
                            </form>
                        </td>
                    </tr>

                    <div class="descr">
                        <img src="image/semaine1">
                        <br>
                        <div>
                            <h3 align="center">Terrain 312</h3>
                            <h4 align="center">Localisation : Paris 15</h4>
                            <h5 align="center">Prix : 370 000 €</h5>
                        </div>
                    </div>
                </tbody>
            </table>-->

        </div>


        <?php
        include("scripts/footer.php");
        ?>
    </div>
</body>

</html>