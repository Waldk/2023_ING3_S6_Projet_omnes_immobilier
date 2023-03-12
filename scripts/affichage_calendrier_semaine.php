<head>
    <title>Calendrier Hebdomadaire</title>
    <link href="calendrier_compte.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
        $user = $_SESSION['Omnes']['user_id'];
        $mysqli = new mysqli("localhost", "root", "", "test_projet_1");

        if ($mysqli->connect_error) {
            die("Erreur de connexion à la base de données: " . $mysqli->connect_error);
        }

        $booked_dates_user = array();
        $result2 = $mysqli->query("SELECT date FROM rdv WHERE Agent_immo = '" . $user . "'");
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
                     } else {
                        echo "<td style=\"color : white;\"></td>";
                    }
                } 
            echo"</tr>";
        }?>
    </table>
</body>