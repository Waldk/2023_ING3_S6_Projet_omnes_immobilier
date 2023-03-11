<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$ite = 0;

while(!isset($_POST["bien_submit$ite"])){
    echo "pas le compte numéro : $ite <br>";                                                                                                                                      
    $ite=$ite+1;
}
echo $ite;

$sql = "DELETE FROM biens WHERE id_bien = \"$ite\"";
$resultat = mysqli_query($sessionsql, $sql);

if (mysqli_query($sessionsql, $sql)) {
    echo "bien supprimé";
    header('Location: ../compte.php');
    //exit;
} else {
    echo "Une erreur est survenue lors de la suppresion du bien immobilier : " . mysqli_error($session);
    header('Location: ../compte.php');
    //exit;
}
?>