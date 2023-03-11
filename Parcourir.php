<!DOCTYPE html>
<head>
    <title>Prime Properties</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="image/OMNES.ico">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
            include("scripts/affichage_immo.php");
            ?><!--
                <h2 class="titre">Les maisons à vendre</h2>  
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
                <div class="slide">
                    <div class="slide-img immocom-1">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Commercial 109</h3>
                        <h4>Localisation : Noisy-Le-Grand</h4>
                        <h5>Prix : 459 000 €</h5>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="slide-img immocom-2">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Commercial 809</h3>
                        <h4>Localisation : Roubaix</h4>
                        <h5>Prix : 169 000 €</h5>
                    </div>
                </div>
            
                <div class="slide">
                    <div class="slide-img immocom-3">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Commercial 371</h3>
                        <h4>Localisation : Montreuil</h4>
                        <h5>Prix : 103 000 €</h5>
                    </div>
                </div>
                <br>
            
                <div class="slide">
                    <div class="slide-img immocom-4">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Commercial 541</h3>
                        <h4>Localisation : Paris 13</h4>
                        <h5>Prix : 270 000 €</h5>
                    </div>
                </div>
            
                <div class="slide">
                    <div class="slide-img immocom-5">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Immobilier Commercial 922</h3>
                        <h4>Localisation : Nanterre</h4>
                        <h5>Prix : 657 000 €</h5>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img appart-1">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Appartement 378</h3>
                        <h4>Localisation : Paris 12</h4>
                        <h5>Prix : 576 000 €</h5>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="slide-img appart-2">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Appartement 930</h3>
                        <h4>Localisation : Paris 5</h4>
                        <h5>Prix 870 000 €</h5>
                    </div>
                </div>
            
                <div class="slide">
                    <div class="slide-img appart-3">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Appartement 23</h3>
                        <h4>Localisation : Vincennes</h4>
                        <h5>Prix 480 000 €</h5>
                    </div>
                </div>
                <br>
            
                <div class="slide">
                    <div class="slide-img appart-4">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Appartement 487</h3>
                        <h4>Localisation : Barbès</h4>
                        <h5>Prix : 258 000 €</h5>
                    </div>
                </div>
            
                <div class="slide">
                    <div class="slide-img appart-5">
                        <a href="Detail_batiment.php">Voir plus</a>
                    </div>
                    <br>
                    <div>
                        <h3>Appartement 252</h3>
                        <h4>Localisation : Dreux</h4>
                        <h5>Prix 190 000 €</h5>
                    </div>
                </div>
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