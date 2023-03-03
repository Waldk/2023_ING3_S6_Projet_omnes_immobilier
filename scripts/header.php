<?php
    echo '
    <div id="header">
        <div id="connexion">
            <p>';
    session_start();
    if (isset($_SESSION['Omnes']['user_id'])) {
        echo 'Bienvenue, ';
        echo $_SESSION['Omnes']['user_id'];
        echo '<br>';
        echo '<form method="post" action="scripts/reset_session.php">
                <input type="hidden" name="reset_session" value="1">
                <button class="bouton_footer" type="submit"id="connexion_btn">Deconnexion</button>
            </form>';
    } else {
        echo '<button class="bouton_footer" class="btn" id="connexion_btn"><a href="formulaire/formulaire_connexion.php">Connexion</a></button>
        <br>
            <button class="bouton_footer" class="btn" id="connexion_btn"><a href="formulaire/formulaire_inscription.php">Inscription</a></button>';
    }
    echo '
            </p>
        </div>
        <br>
        <h1><img class="logo" src="image/OMNES.png" alt="Logo"></h1>
    </div>';
?>