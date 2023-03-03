<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Formulaire</title>
</head>
<body>
	<h3>Formulaire d'ajout de biens</h3>
	<form action="script_ajout_bien.php" method="post">
		<table border="1">
			<tr>
				<td>Nom:</td>
				<td><input type="text" name="nom"></td>
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
				<td>Catégorie de bien:</td>
				<td>
					<select name="type_bien">
						<option selected="selected">Sélectionner la catégorie du bien</option>
						<option value="Appartement">Appartement à louer</option>
						<option value="Terrain">Terrain</option>
						<option value="Immobilier commercial">Immobilier commercial</option>
					</select>
				</td>
			</tr>

            <tr>
				<td>Description:</td>
                <td><textarea name="description" rows="5" cols="21">Entrez votre description du bien...</textarea></td>
			</tr>
            <tr>
				<td>Prix:</td>
                <td><input type="text" name="prix"></td>
            <tr>
				<td>Video:</td>
				<td><input type="text" name="video"></td>
			</tr>
            <tr>
				<td>Photo:</td>
				<td><input type="text" name="photo"></td>
			</tr>
            <tr>
				<td>Agent Immobilier:</td>
				<td><input type="text" name="agent"></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="valider"></td>
			</tr>
		</table>
	</form>
</body> 
</html>