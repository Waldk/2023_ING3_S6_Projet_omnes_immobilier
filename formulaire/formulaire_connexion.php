<!DOCTYPE html>
<html>
<head>
	<title>Connexion à votre compte</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../connexion.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="../image/OMNES.ico">
</head>
<body>
	<div id="wrapper">
        <div id="container">
			<form action="../scripts/connexion.php" method="post">

				<div class="logo">
					<img src="../image/OMNES.ico" style="width: 40%; height: auto;">
					<h1>Connexion</h1>
				</div>
				
				<br><hr>

				<label><b>Nom d'utilisateur</b></label>
				<input type="text" placeholder="Entrer le nom d'utilisateur" name="identifiant" required>

				<label><b>Mot de passe</b></label>
				<input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>

				<input type="submit" id='submit' value='valider' >
			</form>
 		</div>
    </div>
</body>
</html>