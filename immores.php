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
            include("scripts/affichage_immores.php");
            ?><!--
                <h2 class="titre">Les Immobiliers Résidentiels à vendre</h2>  
                <br>
                <div class="slide">
                    <div class="slide-img immores-1">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Résidentiel 188</h3>
                        <h4>Localisation : Saint-Denis</h4>
                        <h5>Prix : 299 000 €</h5>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="slide-img immores-2">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Résidentiel 222</h3>
                        <h4>Localisation : Paris 13</h4>
                        <h5>Prix : 479 000 €</h5>
                    </div>
                </div>
            
                <div class="slide">
                    <div class="slide-img immores-3">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Résidentiel 399</h3>
                        <h4>Localisation : La Défense</h4>
                        <h5>Prix : 782 000 €</h5>
                    </div>
                </div>
                <br>
            
                <div class="slide">
                    <div class="slide-img immores-4">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Résidentiel 402</h3>
                        <h4>Localisation : Torcy</h4>
                        <h5>Prix : 560 000 €</h5>
                    </div>
                </div>
            
                <div class="slide">
                    <div class="slide-img immores-5">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Résidentiel 533</h3>
                        <h4>Localisation : Beaugrenelle</h4>
                        <h5>Prix : 467 000 €</h5>
                    </div>
                </div>-->
            </div>
        </section>



       <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>