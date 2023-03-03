<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Formulaire</title>
</head>
<body>
	<h3>Formulaire d'abonnement</h3>
	<form action="../scripts/inscription.php" method="post">
		<table border="1">
			<tr>
				<td>Nom:</td>
				<td><input type="text" name="nom"></td>
			</tr>
            <tr>
				<td>Prenom:</td>
				<td><input type="text" name="prenom"></td>
			</tr>
			<tr>
				<td>Adresse:</td>
				<td><input type="text" name="Adresse_1"></td>
			</tr>
            <tr>
				<td>Complément d'adresse:</td>
				<td><input type="text" name="Adresse_2"></td>
			</tr>
			<tr>
				<td>Ville:</td>
				<td><input type="text" name="ville"></td>
			</tr>
			<tr>
				<td>Code Postal:</td>
				<td><input type="number" name="codepostal"></td>
			</tr>
			<tr>
				<td>Pays:</td>
				<td><input type="text" name="pays"></td>
			</tr>
            <tr>
				<td>telephone:</td>
				<td><input type="tel" name="telephone"></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="email" name="mail"></td>
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
            <!-- <tr>
				<td>Numéro de carte:</td>
				<td><input type="text" name="numero_carte" pattern="[4]{1}[0-9]{12}(?:[0-9]{3})?" required></td>
			</tr> -->
            <tr>
				<td>Numéro de carte:</td>
				<td><input type="number" name="numero_carte"></td>
			</tr>
            <tr>
				<td>Date d'expiration:</td>
				<td><input type="date" name="date_expiration"></td>
			</tr>
            <tr>
				<td>code de sécurité:</td>
				<td><input type="text" name="code_securite"></td>
			</tr>

            <tr>
				<td>Type de compte:</td>
				<td><input type="checkbox" name="type_de_compte" value="Client">
					<label for = "magazine">Client</label><br>
					<input type="checkbox" name="type_de_compte" value="Agent immobilier">
					<label for = "magazine">Agents immobilier</label><br>
				</td>
			</tr>

            <tr>
				<td>Identifiant:</td>
				<td><input type="text" name="identifiant"></td>
			</tr>

            <tr>
				<td>Mot de passe:</td>
				<td><input type="password" name="mot_de_passe"></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="valider"></td>
			</tr>
		</table>
	</form>
</body> 
</html>