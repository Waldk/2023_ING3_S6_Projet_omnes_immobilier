<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../connexion.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="../image/OMNES.ico">
	<title>Formulaire d'inscription</title>
</head>
<body>
	<div id="wrapper">
        <div id="container">
			<form action="../scripts/inscription.php" method="post">
				<div class="logo">
					<img src="../image/OMNES.ico" style="width: 40%; height: auto;">
					<h1>Inscription</h1>
				</div>
				<table border="0">
					<tr>
						<td>Nom:</td>
						<td><input type="text" name="nom" required></td>
					</tr>
		            <tr>
						<td>Prenom:</td>
						<td><input type="text" name="prenom" required></td>
					</tr>
					<tr>
						<td>Adresse:</td>
						<td><input type="text" name="Adresse_1" required></td>
					</tr>
		            <tr>
						<td>Complément d'adresse:</td>
						<td><input type="text" name="Adresse_2" required></td>
					</tr>
					<tr>
						<td>Ville:</td>
						<td><input type="text" name="ville" required></td>
					</tr>
					<tr>
						<td>Code Postal:</td>
						<td><input type="number" name="codepostal" required></td>
					</tr>
					<tr>
						<td>Pays:</td>
						<td><input type="text" name="pays" required></td>
					</tr>
		            <tr>
						<td>Téléphone:</td>
						<td><input type="tel" name="telephone" required></td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td><input type="email" name="mail" required></td>
					</tr>
					<tr>
						<td>Carte de paiement:</td>
						<td>
							<select name="moyen de paiement" name="type_carte">
								<option selected="selected">Sélectionner votre carte</option>
								<option value="MasterCard">MasterCard</option>
								<option value="Visa">Visa</option>
								<option value="American Express">Americain Express</option>
								<option value="Paypal">Paypal</option>
							</select>
						</td>
					</tr>
		            <tr>
						<td>Numéro de carte:</td>
						<td><input type="number" name="numero_carte" required></td>
					</tr>
		            <tr>
						<td>Date d'expiration:</td>
						<td><input type="date" name="date_expiration" required></td>
					</tr>
		            <tr>
						<td>Code de sécurité:</td>
						<td><input type="text" name="code_securite" required></td>
					</tr>

		            <tr>
						<td>Type de compte:</td>
						<td>
							<select name="type_de_compte">
								<option selected="selected">Sélectionner votre type de compte</option>
								<option value="MasterCard">Client</option>
								<option value="Visa">Agents immobilier</option>
							</select>
						</td>
					</tr>

		            <tr>
						<td>Identifiant:</td>
						<td><input type="text" name="identifiant" required></td>
					</tr>

		            <tr>
						<td>Mot de passe:</td>
						<td><input type="password" name="mot_de_passe" required></td>
					</tr>

					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" value="valider"></td>
					</tr>
				</table>
			</form>
 		</div>
    </div>
</body> 
</html>