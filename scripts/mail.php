error_reporting(E_ALL);
<?php
$destinataire = isset($_POST['e-mail'])? $_POST['e-mail'] : "";
$sujet = 'Merci de nous rejoindre !';
$message = 'Nous sommes très heureux de vous voir parmis nous !';
$headers = 'From: info.omnes.immobilier@gmail.com';
           

if(mail($destinataire, $sujet, $message, $headers)) {
  echo "Le message a bien été envoyé.";
} else {
  echo "Une erreur est survenue lors de l'envoi du message.";
}
?>