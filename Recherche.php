<!DOCTYPE html>
<head>
    <title>Prime Properties</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="image/OMNES.ico">
    <link rel="stylesheet" type="text/css" href="Recherche.css">
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


        <div class="wrap"><br><br><br>
            <div class="search">
                
                <input  type="text" class="searchTerm" placeholder="Que voulez-vous rechercher?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
                <br><br><br>
            </div>
        </div>

        <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>