<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="image/OMNES.ico">
    <link rel="stylesheet" type="text/css" href="Recherche.css">
    <script src="https://kit.fontawesome.com/92cddb0a79.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.searchButton').click(function () {
                $('#result_search').css('display', '');
            });
        });
    </script>
</head>

<body>
    <div id="wrapper">
        <?php
        include("scripts/header.php");
        ?>
        <?php
        include("scripts/deroulant.php");
        ?>

        <form action="scripts/rechercher.php" method="post">
            <div class="wrap"><br><br><br>
                <div class="search">

                    <input type="text" class="searchTerm" name="search" placeholder="Que voulez-vous rechercher?"
                        required>
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                    <br><br><br>
                </div>
            </div>
        </form>

        <section class="slider" id="result_search">
            <div class="container">
                <?php
                    include("scripts/affichage_recherche.php");
                ?>
            </div>
        </section>

        <?php
        include("scripts/footer.php");
        ?>
    </div>
</body>

</html>