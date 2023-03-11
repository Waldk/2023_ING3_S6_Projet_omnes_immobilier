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
                    <li class="element-carousel">
                        <div class="card">
                            <h2 class="card-title">Appartement à louer</h2>
                            <img src="image/semaine1.png" />
                            <div class="card-content">
                                <p>C'est en plein centre de New York que se trouve ce petit bijou immobilier. Avec
                                    une surface de 135m², 3 chambres, une cuisine entièrement fonctionnelle et
                                    moderne. Prendre son déjeûner sur une terrasse avec vue sur Central Park, c'est
                                    un rêve !</p>
                            </div>
                        </div>
                    </li>
                    <li class="element-carousel">
                        <div class="card">
                            <h2 class="card-title">Terrain constructible</h2>
                            <img src="image/semaine2.png" />
                            <div class="card-content">
                                <p>Terrain constructible situé en Bourgogne. Assez éloigné des cours d'eau, ce
                                    terrain saura vous conquir par la pluralité de la faune et de la flore qui y
                                    séjourne. C'est sur une surface de 2 hectares que vous pourriez installer votre
                                    petit cocon familial.</p>
                            </div>
                        </div>
                    </li>
                    <li class="element-carousel">
                        <div class="card">
                            <h2 class="card-title">Hôtel 5 étoiles</h2>
                            <img src="image/semaine3.png" />
                            <div class="card-content">
                                <p>Qui n'a jamais rêvé de partir en vacances dans un hôtel luxieux. C'est ce que ce
                                    magnifique hôtel pourra offrir à vos clients si vous possédiez ce batiment avec
                                    plus de 150 chambres aux gammes différentes.</p>
                            </div>
                        </div>
                    </li>
                    <li class="element-carousel">
                        <div class="card">
                            <h2 class="card-title">Station-service</h2>
                            <img src="image/semaine4.png" />
                            <div class="card-content">
                                <p>Vous n'avez plus d'essence pour alimenter votre bolide 8 cylindres, si vous aviez
                                    acquis cette statio essence, vous auriez pu vous fournir simplement, surtout dans le contexte
                                    actuel. Ce bien est un réel investissement.</p>
                            </div>
                        </div>
                    </li>
                    <li class="element-carousel">
                        <div class="card">
                            <h2 class="card-title">Bureau pour entreprise</h2>
                            <img src="image/semaine5.png" />
                            <div class="card-content">
                                <p>Améliorer la productivité de vos employés, c'est le rêve de tout investisseur.
                                    Pour cela, pensez à vous procurer de beaux locaux motivant pour mettre un accent
                                    sur le dynamisme de vos équipes
                                    .</p>
                            </div>
                        </div>
                    </li>
                    <li class="element-carousel">
                        <div class="card">
                            <h2 class="card-title">Résidence copropriétaire</h2>
                            <img src="image/semaine6.png" />
                            <div class="card-content">
                                <p>Cette résidence vous permettra de vivre dans une villa tout en vivant le plaisir
                                    de la vie en communauté. Vous aurez accès à un deux pièces avec une surface de
                                    80 m² ainsi qu'une piscine à partager avec les autres habitants.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <?php
        include("scripts/footer.php");
        ?>
    </div>
</body>

</html>