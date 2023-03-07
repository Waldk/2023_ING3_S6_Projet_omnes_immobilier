<?php
session_start();
if (isset($_SESSION['Omnes']['user_id'])) {
    $_SESSION['Omnes']['user_id'] = null;
}
if (isset($_SESSION['Omnes']['type_account'])) {
    $_SESSION['Omnes']['type_account'] = null;
}
header('Location: ../accueil.php');
exit;
?>