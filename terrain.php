<!DOCTYPE html>
<head>
    <title>Prime Properties</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css"/>
    <link href="detail.css" rel="stylesheet" type="text/css"/>
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

        <section class="slider">
            <div class="container">
            <?php
            include("scripts/affichage_immoterrain.php");
            ?><!--
                <h2 class="titre">Les Terrains à vendre</h2>  
                <br>
                <div class="slide">
                    <div class="slide-img terrain-1">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Terrain 102</h3>
                        <h4>Localisation : bois de Vincennes</h4>
                        <h5>Prix : 175 000 €</h5>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="slide-img terrain-2">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Terrain 243</h3>
                        <h4>Localisation : Bouchemont</h4>
                        <h5>Prix : 75 000 €</h5>
                    </div>
                </div>
            
                <div class="slide">
                    <div class="slide-img terrain-3">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Terrain 312</h3>
                        <h4>Localisation : Issy-Les-Moulineaux</h4>
                        <h5>Prix : 370 000 €</h5>
                    </div>
                </div>
                <br>
            
                <div class="slide">
                    <div class="slide-img terrain-4">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Terrain 444</h3>
                        <h4>Localisation : Passy</h4>
                        <h5>Prix : 389 000 €</h5>
                    </div>
                </div>
            
                <div class="slide">
                    <div class="slide-img terrain-5">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Terrain 587</h3>
                        <h4>Localisation : Bussy-Saint-Georges</h4>
                        <h5>Prix : 560 000 €</h5>
                    </div>
                </div>
            </div>
-->
        </section>



       <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>