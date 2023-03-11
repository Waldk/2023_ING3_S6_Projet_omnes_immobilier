<?php
    $retour="";
    if(isset($_POST["message"])){
    $message = "Bonjour, votre réservation a bien été prise en compte, voici les informations du rendez-vous : 
    Date de réservation : " . $_POST["date-rdv"] . "
    Agent immobilier choisi : " . $_POST["Nom_agent"] . "
    Vous avez été débité de 30€ pour les taxes de réservation";

    $retour = mail('teo.pennecot93@gmail.com','Rendez-vous chez Omnes Immobilier du' . $_POST["date-rdv"],$message,"From:no-respond@omnesimmobilier.fr");
    }
    if($retour){
        echo "<p>L'email a bien été envoyé</p>";
    }

?>