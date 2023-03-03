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
        <div class="user-rdv">
                <h2>Rendez-vous à venir</h2>
                <table id="consultation">
                    <thead>
                        <tr>
                            <th>Date/Heure</th>
                            <th>Agent immobilier</th>
                            <th>Biens</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/02/2022 14:30</td>
                            <td>Dio Brando</td>
                            <td>34 quai de grenelle, 75015 Paris(un lien vers le bien)</td>
                            <td colspan="2" align="center">
                                <form method="post" action="">
                                    <input type="hidden" name="champ-caché" value="1">
                                    <input class="bouton_rdv" type="submit" name="submit" value="Annuler ce RDV">
                            </td>
                        </tr>
                        <tr>
                            <td>10/03/2022 10:15</td>
                            <td>Jane Smith</td>
                            <td>34 quai de grenelle, 75015 Paris</td>
                            <td colspan="2" align="center">
                                <form method="post" action="">
                                    <input type="hidden" name="champ-caché" value="1">
                                    <input class="bouton_rdv" type="submit" name="submit" value="Annuler ce RDV">
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td>20/04/2022 16:45</td>
                            <td>Tep Penneçot</td>
                            <td>34 quai de grenelle, 75015 Paris</td>
                            <td colspan="2" align="center">
                                <form method="post" action="">
                                    <input type="hidden" name="champ-caché" value="1">
                                    <input class="bouton_rdv" type="submit" name="submit" value="Annuler ce RDV">
                            </td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="user-consultation">
                <h2>Historique de consultations immobilières</h2>
                <table id="consultation">
                    <thead>
                        <tr>
                            <th>Date/Heure</th>
                            <th>Agent immobilier</th>
                            <th>Biens</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/02/2022 14:30</td>
                            <td>Dio Brando</td>
                            <td>34 quai de grenelle, 75015 Paris(un lien vers le bien)</td>
                        </tr>
                        <tr>
                            <td>10/03/2022 10:15</td>
                            <td>Jane Smith</td>
                            <td>34 quai de grenelle, 75015 Paris</td>
                        </tr>
                        <tr>
                            <td>20/04/2022 16:45</td>
                            <td>Tep Penneçot</td>
                            <td>34 quai de grenelle, 75015 Paris</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="chat-container">
                <div id="chat-header">
                    <h2>Chat avec le client</h2>
                    <button id="close-chat-btn">X</button>
                </div>
                <div id="chat-messages"></div>
                <div id="chat-input">
                    <textarea id="message-input" placeholder="Saisissez votre message"></textarea>
                    <button id="send-message-btn">Envoyer</button>
                </div>
        </div>
        </section>
        

        <?php
        include("scripts/footer.php");
        ?>
    </div>
</body>

</html>