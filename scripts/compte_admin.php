<?php
    include("scripts/affichage_info.php");
    echo'
    <center><button class="bouton_footer" id="button_bien">Cliquez pour ajouter un bien</button>
    <button class="bouton_footer" id="button_users">Cliquez pour supprimer un compte</button></center>
    ';
    include("formulaire/formulaire_ajout_bien.php");
    include("scripts/affichage_delete_user.php");
?>