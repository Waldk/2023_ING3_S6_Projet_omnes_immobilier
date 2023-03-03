<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link href="compte.css" rel="stylesheet" type="text/css" />
    <link href="chatroom.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="image/OMNES.ico">
    <script src="https://kit.fontawesome.com/92cddb0a79.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Initialisation de l'API WebRTC pour la vidéoconférence
            const peer = new Peer();

            // Connexion au serveur de signalisation
            peer.on('open', function (id) {
                console.log('Mon ID Peer est : ' + id);
            });

            // Création de la connexion avec le client
            $('#start-chat-btn').on('click', function () {
                const client_id = $('#client-id-input').val();
                const conn = peer.connect(client_id);

                // Ouverture de la fenêtre de chat
                $('#chat-container').fadeIn();

                // Envoi d'un message au client pour annoncer la connexion
                conn.on('open', function () {
                    const message = {
                        type: 'connexion',
                        content: 'Agent immobilier connecté'
                    };
                    conn.send(message);
                });

                // Réception des messages du client
                conn.on('data', function (data) {
                    displayMessage(data.content, 'client');
                });

                // Envoi d'un message au client
                $('#send-message-btn').on('click', function () {
                    const message = {
                        type: 'message',:}
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