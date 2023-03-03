<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <meta charset="utf-8" />
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link href="compte.css" rel="stylesheet" type="text/css" />
    <link href="chatroom.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="OMNES.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/92cddb0a79.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#button_modif').click(function () {
                $('.user-info').css('display', 'none');
                $('.modif-info').css('display', '');
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

        <section>
            <!--
            <?php
            include("scripts/compte_client.php");
            ?> -->
    
            <?php
            include("scripts/compte_agent.php");
            ?>
            
        </section>


        <?php
        include("scripts/footer.php");
        ?>
    </div>
</body>

</html>