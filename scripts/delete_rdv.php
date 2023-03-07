<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$ite = 0;

while(!isset($_POST["submit$ite"])){
    echo "pas le bien numéro : $ite <br>";                                                                                                                                      
    $ite=$ite+1;
}
echo $ite;

$sql = "DELETE FROM rdv WHERE id_rdv = \"$ite\"";
$resultat = mysqli_query($sessionsql, $sql);

if (mysqli_query($sessionsql, $sql)) {
    echo "rdv supprimé";
    header('Location: ../compte.php');
    //exit;
} else {
    echo "Une erreur est survenue lors de la création suppresion du rdv : " . mysqli_error($session);
    header('Location: ../compte.php');
    //exit;
}
?>