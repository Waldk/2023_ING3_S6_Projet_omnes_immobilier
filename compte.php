<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <style type="text/css">
        .overlay {
            display: none;
        }
        .overlay-content {
            position: fixed;
            height: 250px;
            width: 200px;
            right: 15px;
            bottom: 75px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #000;;
        }
        .btn-overlay {
            display: inline;
            right: 30px;
            bottom: 30px;
            width: 8%;
            height: 8%;
            position: fixed;
            border: 1px solid #fff;
            background-color: #007bff;
            color: #fff;
            border-radius: 30px;
            cursor: pointer;
        }
    </style>
    <meta charset="utf-8" />
    <link href="compte.css" rel="stylesheet" type="text/css" />
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link href="chatroom.css" rel="stylesheet" type="text/css" />
    <link href="formulaire_compte.css" rel="stylesheet" type="text/css" />
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
            $('#button_users').click(function () {
                $('.user-list').css('display', '');
            });
            $('#button_bien').click(function () {
                $('.ajout-bien').css('display', '');
            });
        });
    </script>
</head>

<body>
    <div id="wrapper">
        <?php
        include("scripts/header.php");
        include("scripts/deroulant.php");
        ?>

        <section>
            <?php
            if (isset($_SESSION['Omnes']['type_account'])) {
                if ($_SESSION['Omnes']['type_account'] == 'Client') {
                    include("scripts/compte_client.php");
                } else if ($_SESSION['Omnes']['type_account'] == 'Agent immobilier') {
                    include("scripts/compte_agent.php");
                } else if ($_SESSION['Omnes']['type_account'] == 'Admin') {
                    include("scripts/compte_admin.php");
                } else {
                    include("scripts/compte_inscription.php");
                }
            } else {
                include("scripts/compte_inscription.php");
            }
            ?>
        </section>
        <button id="togg1" class="btn-overlay">Chat</button>
        <div class="overlay">
            <div id="d1" class="overlay-content">
                <h2>Chat en direct</h2>
                <p>Ceci est un exemple de boîte en superposition.</p>
            </div>
        </div>
        <script type="text/javascript">
            let togg1 = document.getElementById("togg1");
            let d1 = document.getElementById("d1");
            togg1.addEventListener("click", () => {
              if(getComputedStyle(d1).display != "none"){
                d1.style.display = "none";
            } else {
                d1.style.display = "inline";
            }
        })

            function togg(){
              if(getComputedStyle(d1).display != "none"){
                d1.style.display = "none";
            } else {
                d1.style.display = "block";
            }
        };
        togg1.onclick = togg;
    </script>

    <?php
    include("scripts/footer.php");
    ?>
</div>
</body>
</html>