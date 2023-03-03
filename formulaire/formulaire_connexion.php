<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../prime.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../image/OMNES.ico">
	<title>Verification mot de passe et login</title>
</head>
<body>
	<form action="../scripts/connexion.php" method="post">
		<table border="2">
			<tr>
				<td>Identifiant</td>
				<td><input type="text" name="identifiant"></td>
			</tr>
			<tr>
				<td>Mot de passe</td>
				<td><input type="password" name="mot_de_passe"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="valider"></td>
			</tr>
		</table>
	</form>
</body>
</html>