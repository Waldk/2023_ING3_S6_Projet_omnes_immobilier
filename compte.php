<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <meta charset="utf-8" />
    <link href="compte.css" rel="stylesheet" type="text/css" />
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link href="chatroom.css" rel="stylesheet" type="text/css" />
    <link href="formulaire_compte.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="image/OMNES.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/92cddb0a79.js" crossorigin="anonymous"></script>
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

        <div id="chat-container">
            <div id="chat-header">
                <h2>Chatbox</h2>
            </div>
            <div id="chatbox">
             <?php
             if(file_exists("log.html") && filesize("log.html") > 0){
                 $contents = file_get_contents("log.html");
                 echo $contents;
             }
             ?>
         </div>
         <form class="centre" name="message" action="">
             <input name="usermsg" type="text" id="usermsg" />
             <input name="submitmsg" type="submit" id="submitmsg" value="Envoyer" />
         </form>
        </div>

     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php  
        if (isset($_SESSION['Omnes']['user_id'])){
            echo '
            <script type="text/javascript">
            let d1 = document.getElementById("chat-container");
            d1.style.display = "inline";  
            </script>
            ';
        } else {
            echo '
            <script type="text/javascript">
            let d1 = document.getElementById("chat-container");
            d1.style.display = "none";  
            </script>
            ';
        }
    ?>
     
     

    <script type="text/javascript">
     // jQuery Document
     $(document).ready(function () {
         $("#submitmsg").click(function () {
             var clientmsg = $("#usermsg").val();
             $.post("post.php", { text: clientmsg });
             $("#usermsg").val("");
             return false;
         });

         function loadLog() {
            var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Hauteur de défilement avant la requête
             $.ajax({
                 url: "log.html",
                 cache: false,
                 success: function (html) {
                     $("#chatbox").html(html); //Insérez le log de chat dans la #chatbox div
                     //Auto-scroll
                     var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Hauteur de défilement apres la requête
                     if(newscrollHeight > oldscrollHeight){
                         $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Défilement automatique
                     }
                 }
            });
    }
    setInterval (loadLog, 2500);
    
    });
    </script>




<?php
include("scripts/footer.php");
?>
</div>
</body>
</html>