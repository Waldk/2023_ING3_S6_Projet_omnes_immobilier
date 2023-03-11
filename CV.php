<!DOCTYPE html>
<head>
    <title>Prime Properties</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css"/>
    <link href="CV.css" rel="stylesheet" type="text/css"/>
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

        <div id="boite">
            <div id="boxi">
                <form style="width:100%;padding: 30px;border: 1px solid #f1f1f1;background: #fff;margin-bottom: 120px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
                    <div class="logo">
                        <h1 style="margin-left:40px; height: 100%;width: 40%;text-align:center;font-size: 30px;color: #000000;text-decoration: underline black;">Téo Pennecot</h1>
                        <img style="border-radius: 20px;" class="image_info" src="image/photo_Téo">
                    </div> 
                    <br><br><br><br><br><br><br><br><br>
                    <h4 style="text-align: center;font-size: 20px;color: #000000;">Agent Immobilier agréé<br></h4>
                    <h4 style="text-align: center;font-size: 20px;color: #000000;">Téléphone : +33 7 81 44 42 57<br></h4>
                    <h4 style="text-align: center;font-size: 20px;color: #000000;   ">Email : teo.pennecot@edu.ece.fr<br></h4>
                    <center><h2 style="height: 100%;width: 40%;text-align:center;font-size: 25px;color: red;">Spécialité :</h2></center>
                    <h4 style="text-align: center;font-size: 20px;color: #000000;">Appartements<br></h4>
                    <center><h2 style="height: 100%;width: 40%;text-align:center;font-size: 25px;color: red;">Formations :</h2></center>
                    <h4 style="text-align: center;font-size: 20px;color: #000000;">
                        Bac +3 Maison, Formation meubles IKEA, Master sur LOL
                    </h4>
                </form>
            </div>
        </div>

        <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>