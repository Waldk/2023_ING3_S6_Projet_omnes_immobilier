<?php


$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$adresse1 = isset($_POST["Adresse_1"]) ? $_POST["Adresse_1"] : "";
$adresse2 = isset($_POST["Adresse_2"]) ? $_POST["Adresse_2"] : "";
$ville = isset($_POST["ville"]) ? $_POST["ville"] : "";
$codepostal = isset($_POST["codepostal"]) ? $_POST["codepostal"] : "";
$pays = isset($_POST["pays"]) ? $_POST["pays"] : "";
$telephone = isset($_POST["telephone"]) ? $_POST["telephone"] : "";
$mail = isset($_POST["mail"]) ? $_POST["mail"] : "";
$cartepaiement = isset($_POST["moyen_de_paiement"]) ? $_POST["moyen_de_paiement"] : "";
$nbcarte = isset($_POST["numero_carte"]) ? $_POST["numero_carte"] : "";
$dateexpiration = isset($_POST["date_expiration"]) ? $_POST["date_expiration"] : "";
$codesecurite = isset($_POST["code_securite"]) ? $_POST["code_securite"] : "";
$typecompte = isset($_POST["type_de_compte"]) ? $_POST["type_de_compte"] : "";
$identifiant = isset($_POST["identifiant"]) ? $_POST["identifiant"] : "";
$motdepasse = isset($_POST["mot_de_passe"]) ? $_POST["mot_de_passe"] : "";

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'test_projet_1';
    $session = mysqli_connect($host, $user, $password, $database);

    if (!$session) {
        die('La connexion à la base de données a échoué : ' . mysqli_connect_error());
    }

    $sql = "SELECT * FROM Users WHERE identifiant = '$identifiant'";
    $result = mysqli_query($session, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "Cet utilisateur existe déjà.";
    } else {
        $sql = "INSERT INTO Users (nom, prenom, Adresse_1, Adresse_2, ville, code_postal, pays, telephone, type_carte, numero_carte, date_expiration, code_securite, type_de_compte, identifiant, mot_de_passe) 
                          VALUES ('$nom', '$prenom', '$adresse1', '$adresse2', '$ville', '$codepostal', '$pays', '$telephone', '$cartepaiement', '$nbcarte', '$dateexpiration', '$codesecurite', '$typecompte', '$identifiant', '$motdepasse')";
        if (mysqli_query($session, $sql)) {
            echo "Nouvel utilisateur créé avec succès.";
            session_start();
            $_SESSION['Omnes']['user_id'] = $identifiant;
            $_SESSION['Omnes']['type_account'] = $typecompte;
            header('Location: ../accueil.php');
            exit;
        } else {
            echo "Une erreur est survenue lors de la création de l'utilisateur : " . mysqli_error($session);
            header('Location: ../formulaire/formulaire_inscription.php');
            exit;
        }
    }

    mysqli_close($session);

?>