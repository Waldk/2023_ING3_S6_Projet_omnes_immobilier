<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$ite = 0;

while(!isset($_POST["user_submit$ite"])){
    echo "pas le compte numéro : $ite <br>";                                                                                                                                      
    $ite=$ite+1;
}
echo $ite;

$sql = "DELETE FROM users WHERE id_user = \"$ite\"";
$resultat = mysqli_query($sessionsql, $sql);

if (mysqli_query($sessionsql, $sql)) {
    echo "agent supprimé";
    header('Location: ../compte.php');
    //exit;
} else {
    echo "Une erreur est survenue lors de la suppresion de l'agent immobilier : " . mysqli_error($session);
    header('Location: ../compte.php');
    //exit;
}
?>