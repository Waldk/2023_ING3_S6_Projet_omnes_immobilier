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
            include("scripts/affichage_immocom.php");
            ?><!--
                <h2 class="titre">Les Immobiliers Commerciaux à vendre</h2>  
                <br>
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
    -->
        </section>



       <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>