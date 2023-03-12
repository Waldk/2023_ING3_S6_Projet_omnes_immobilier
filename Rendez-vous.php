<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link href="formulaire_compte.css" rel="stylesheet" type="text/css" />
    <link href="compte.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="image/OMNES.ico">
    <link rel="stylesheet" type="text/css" href="Rendez-vous.css">
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

        <div class="user-rdv">

            <h2 align="center">Rendez-vous à venir</h2>
            <?php
            if (isset($_SESSION['Omnes']['type_account'])) {
                if ($_SESSION['Omnes']['type_account'] == 'Client') {
                    include("scripts/affichage_detail_rdv.php");
                } else if ($_SESSION['Omnes']['type_account'] == 'Agent immobilier') {
                    include("scripts/affichage_detail_rdv_agent.php");
                } else {
                    include("scripts/compte_inscription.php");
                }
            }
            ?>
        </div>

        <div class="user-rdv">

            <h2 align="center">Rendez-vous passés</h2>
            <?php
            if (isset($_SESSION['Omnes']['type_account'])) {
                if ($_SESSION['Omnes']['type_account'] == 'Client') {
                    include("scripts/affichage_detail_rdv_passe.php");
                } else if ($_SESSION['Omnes']['type_account'] == 'Agent immobilier') {
                    include("scripts/affichage_detail_rdv_agent_passe.php");
                } else {
                    include("scripts/compte_inscription.php");
                }
            }
            ?>
        </div>


        <?php
        include("scripts/footer.php");
        ?>
    </div>
</body>

</html>