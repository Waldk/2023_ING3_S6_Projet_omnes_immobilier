<?php
$identifiant = isset($_POST["identifiant"]) ? $_POST["identifiant"] : "";
$motdepasse = isset($_POST["mot_de_passe"]) ? $_POST["mot_de_passe"] : "";
$erreur = "";
$str_resultat="";

if ($identifiant == "") {
    $erreur .= "Le champ identifiant est vide. <br>";
}
if ($motdepasse == "") {
    $erreur .= "Le champ mot de passe est vide. <br>";
}

if ($erreur == "") {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'test_projet_1';
    $sessionsql = mysqli_connect($host, $user, $password, $database);

    if (!$sessionsql) {
        die("Erreur de connexion : " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM Users WHERE identifiant = '$identifiant' AND mot_de_passe = '$motdepasse'";
    $resultat = mysqli_query($sessionsql, $sql);

    if (mysqli_num_rows($resultat) == 1) {
        echo "Bienvenue, $identifiant !";
        session_start();
        $_SESSION['Omnes']['user_id'] = $identifiant;

        $sql = "SELECT type_de_compte FROM Users WHERE identifiant = '$identifiant' ";
        $resultat = mysqli_query($sessionsql, $sql);
        
        while($row = mysqli_fetch_assoc($resultat)) {
            $str_resultat .=$row['type_de_compte'];
        }

        $_SESSION['Omnes']['type_account'] = $str_resultat;
        echo "test : $str_resultat";
        header('Location: ../accueil.php');
        exit;
    } else {
        echo "Identifiants ou mot de passe incorrects.";
    }
    mysqli_close($sessionsql);
    header('Location: ../formulaire/formulaire_connexion.php');
    exit;

} else {
    echo "Erreur : <br>" . $erreur;
}
?>