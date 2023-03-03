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


        <form class="p-3">
            <div class="col-12 col-md-8 container"><br><br><br>
                <input id="recherche">
                <button class="fas fa-search btn" id="search-btn"></button>
                <br><br><br><br><br><br>
            </div>
        </form>

        <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>