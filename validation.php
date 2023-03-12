<!DOCTYPE html>

<head>
    <title>Prime Properties</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="image/OMNES.ico">
    <style>
		h1 {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 30px;
		}

		.validation {
			width: 400px;
			margin: 0 auto;
			margin-bottom: 40px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="text"], input[type="email"], input[type="password"], select {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 3px;
			box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
			font-size: 16px;
			line-height: 1.5;
			box-sizing: border-box;
		}

		input[type="submit"] {
			display: block;
			width: 100%;
			padding: 10px;
			background-color: #008CCE;
			color: #fff;
			border: none;
			border-radius: 3px;
			font-size: 16px;
			line-height: 1.5;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: red;
		}

		.error {
			color: red;
			margin-bottom: 10px;
		}
	</style>

</head>

<body>
    <div id="wrapper">
        <?php
        include("scripts/header.php");
        ?>

        <?php
        include("scripts/deroulant.php");
        ?>

        <section>
        <h1>Paiement Validé !</h1>
		<form class="validation">
			<center>
				<img src="image/OMNES.ico" style="width: 40%; height: auto;">
				<h1>
				<?php
			        echo 'Merci pour votre réservation ';
			        echo $_SESSION['Omnes']['user_id'];
			        echo ' !';
				?>
				</h1>
				<label for="expiry_date">Nous reviendrons vers vous lorsque le paiement sera validé.</label><br>
				<input type="submit" value="Revenir à la page d'accueil">
			</center>
		</form>
        </section>

        <?php
        include("scripts/footer.php");
        ?>
    </div>
</body>

</html>