<!DOCTYPE html>
<html>

<head>
    <title>Calendrier Hebdomadaire</title>
    <link href="calendrier.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    $user = $_SESSION['Omnes']['user_id'];
    $mysqli = new mysqli("localhost", "root", "", "test_projet_1");

    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base de données: " . $mysqli->connect_error);
    }

    $booked_dates = array();
    $result = $mysqli->query("SELECT date FROM rdv WHERE Agent_immo = '" . $identifiant_agent . "'");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $booked_dates[] = $row["date"];
        }
    }

    $booked_dates_user = array();
    $result2 = $mysqli->query("SELECT date FROM rdv WHERE Client = '" . $user . "'");
    if ($result2->num_rows > 0) {
        while ($row = $result2->fetch_assoc()) {
            $booked_dates_user[] = $row["date"];
        }
    }
    ?>

    <table class="calendrier">
        <tr>
            <th>Heure</th>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>
        </tr>

        <?php for ($i = 8; $i < 20; $i++){
            echo "<tr>
                <td>";
                echo sprintf("%02d", $i) . "h-" . sprintf("%02d", $i + 1) . "h";
                echo "</td>";
                for ($j = 0; $j < 7; $j++){
                     $date = date("Y-m-d H:i:s", strtotime("next Monday") + ($j * 24 * 3600) + ($i * 3600));
                     if (in_array($date, $booked_dates_user)){
                        echo "<td class=\"booked_user\"></td>";
                     } else if (in_array($date, $booked_dates)){
                        echo "<td class=\"booked\"></td>";
                     } else {
                        echo "<td style=\"color : white;\"><a href=\"prise_rdv.php?date=".$date."&identifiant_agent=". $identifiant_agent."&nom_lieu=". $nom_lieu."&id_bien=". $id_bien."\">rdvaaaaaaaaaaaaaaa</a></td>";
                    }
                } 
            echo"</tr>";
        }?>
    </table>

    <?php
    if (isset($_POST["date"])) {
        $date = $_POST["date"];

        $result = $mysqli->query("SELECT date FROM rdv WHERE date = '" . $date . "'");
        if ($result->num_rows > 0) {
            echo "Cette date est déjà prise.";
        } else {
            $insert = "INSERT INTO rdv (date) VALUES ('" . $date . "')";
            if ($mysqli->query($insert) === TRUE) {
                echo "La date a été ajoutée avec succès.";
            } else {
                echo "Une erreur est survenue : " . $mysqli->error;
            }
        }
    }

    $mysqli->close();
    ?>
</body>

</html>