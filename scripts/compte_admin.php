<?php
    echo'
    <center><div class="enveloppe">
    <center><button class="bouton_admin" id="button_bien">Ajouter un bien</button>
    <button class="bouton_admin" id="button_users">Supprimer un compte</button>
    <button class="bouton_admin" id="button_bien_supp">Supprimer un bien</button></center>
    </div></center>
    ';
    include("formulaire/formulaire_ajout_bien.php");
    include("scripts/affichage_delete_user.php");
    include("scripts/affichage_delete_bien.php");
?>