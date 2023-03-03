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
                <h2 class="titre">Les Appartements à vendre</h2>  
                <br>
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
            </div>
        </section>



       <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>