<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test_projet_1';
$sessionsql = mysqli_connect($host, $user, $password, $database);
$ite = 0;
$id = "";

while(!isset($_POST["user_submit$ite"])){
                                                                                                                                          
    $ite=$ite+1;
}

$sql1 = "SELECT identifiant FROM users WHERE id_user = \"$ite\"";
$resultat1 = mysqli_query($sessionsql, $sql1);

while ($row = mysqli_fetch_assoc($resultat1)) {
    $id .=$row['identifiant'];
}

echo $id;

$sql = "DELETE FROM users WHERE identifiant = \"$id\"";
$sql2 = "DELETE FROM rdv WHERE client = \"$id\" or agent_immo = \"$id\"";
$resultat = mysqli_query($sessionsql, $sql);
$resultat2 = mysqli_query($sessionsql, $sql2);

if (mysqli_query($sessionsql, $sql) && mysqli_query($sessionsql, $sql2)) {
    echo "agent supprimé";
    //exit;
} else {
    echo "Une erreur est survenue lors de la suppresion de l'agent immobilier : " . mysqli_error($sessionsql);
    //exit;
}
?>