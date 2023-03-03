<?php
session_start();
if (isset($_SESSION['Omnes']['user_id'])) {
    $_SESSION['Omnes']['user_id'] = null; 
}
header('Location: ../accueil.php');
exit;
?>