<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="image/OMNES.ico">
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

        <div class="moment1">
            <h1 class="affaire">LES EVENEMENTS DE LA SEMAINE !</h1>
            <div>
                <img style="float: left;" class="image_info" src="image/augmentation.jpg" height="340px" width="auto">
                <h2 style="float: left; width: 50%; text-align: center; padding-top: 70px;">
                    La hausse des prix immobiliers dans les grandes villes en raison de la pandémie :
                    Depuis le début de la pandémie de COVID-19, de nombreux ménages ont cherché à quitter les centres-villes pour des zones plus spacieuses en périphérie. Cela a entraîné une augmentation des prix immobiliers dans les grandes villes où la demande reste forte.
                </h2>
                <hr class="trait">
            </div>
            <div>
                <img style="float: right;" class="image_info" src="image/ecolo.jpg" height="340px" width="auto">
                <h2 style="float: right; width: 50%; text-align: center; padding-top: 85px;">
                    L'essor de la construction de logements écologiques :
                    De plus en plus de promoteurs immobiliers cherchent à construire des logements respectueux de l'environnement en utilisant des matériaux durables et en intégrant des technologies éco-responsables telles que les panneaux solaires.
                </h2>
                <hr class="trait">
            </div>
            <div>
                <img style="float: left;" class="image_info" src="image/blockchain.jpg" height="340px" width="auto">
                <h2 style="float: left; width: 50%; text-align: center; padding-top: 90px;">
                    L'adoption de la technologie blockchain dans l'immobilier :
                    La technologie blockchain est utilisée pour créer des registres fonciers sécurisés et transparents, permettant aux acheteurs et aux vendeurs de suivre l'historique de propriété d'un bien immobilier en temps réel.
                </h2>
                <hr class="trait">
            </div>

        </div>

        <section>
            <div class="moment">
                <h1 class="affaire">LES AFFAIRES DU MOMENT !</h1>
                <ul class="liste-carousel">
                <?php
                include("scripts/script_affichage_bien.php");
                ?>
                
                </ul>
            </div>
        </section>
        <?php
        include("scripts/footer.php");
        ?>
    </div>
</body>

</html>