@auth
<html>
<head>
	<title>Create Salarier</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<style>
		label{
			font-weight:bold;
		}
	</style>
    <form method="POST" action="{{ route('salarier.store') }}">
	 	<center>
			<table>
				@csrf
				<tr>
					<td><label for="sexe">Sexe : </label></td>
					<td>
						<input type="radio" name="sexe" value="Monsieur" class="my-3">M
						<input type="radio" name="sexe" value="Madame">Mme 
					</td>
				</tr>
				<tr>
					<td><label for="nom">Nom : </label></td>
					<td><input type="text" placeholder="Nom Salarié" id="nom" name="nom" required class="my-3"></td>
				</tr>
				<tr>
					<td><label for="prenom">Prenom : </label></td>
					<td><input type="text" placeholder="Prenom Salarié" id="prenom" name="prenom" required class="my-3"></td>
				</tr>
				<tr>
					<td><label for="cin">CIN : </label></td>
					<td><input type="text" placeholder="CIN Salarié" id="cin" name="cin" required class="my-3"></td>
				</tr>
				<tr>
					<td><label for="tel">Tel : </label></td>
					<td><input type="text" placeholder="Télephone Salarié" id="tel" name="tel" required class="my-3"></td>
				</tr>
				<tr>
					<td><label for="adresse">Adresse : </label></td>
					<td><input type="text" placeholder="Adresse Salarié" id="adresse" name="adresse" required class="my-3"></td>
				</tr>
				<tr>
					<td><label for="salaire">Salaire : </label></td>
					<td><input type="text" placeholder="Salaire en DH" id="salaire" name="salaire" required class="my-3"></td>
				</tr>
				<tr>
					<td><label for="dateEntree">Date Entrée : </label></td>
					<td>
						<input type="date" id="dateEntree" name="dateEntree" required class="my-3">
					</td>
				</tr>
				<tr>
					<td><label for="active">active</label></td>
					<td>
						<input type="radio" name="active" value="Oui" class="my-4">Oui
						<input type="radio" name="active" value="Non" class="my-4">Non
						<button type="submit" class="btn btn-primary mx-2">Créer Salarié</button>
					</td>
				</tr>
			</table>
		</center>		
	</form>
</body>
</html>
@endauth