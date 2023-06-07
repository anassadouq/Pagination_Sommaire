@auth
<html>
<head>
	<title>Create reglement</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<style>
		label{
			font-weight:bold;
		}
		#text{
			width:350px;
		}
	</style>
    <form method="POST" action="{{ route('reglement.store') }}">
	 	<center>
			<table>
				@csrf
				<tr>
					<td><label for="num">Numéro : </label></td>
					<td><input type="text" placeholder="Numéro De Reglement" name="num" required class="my-4" id="text"></td>
				</tr>
				<tr>
					<td><label for="montant">Montant : </label></td>
					<td><input type="text" placeholder="Montant De Reglement" name="montant" required class="my-4" id="text"></td>
				</tr>
				<tr>
					<td><label for="date">Date : </label></td>
					<td>
						<input type="date" placeholder="Date De Reglement" name="date" required class="my-4" id="text">
					</td>
				</tr>
				<tr>
					<td><label for="type">Type : </label></td>
					<td>
						<input type="radio" name="type" value="Chèque" required class="my-4"> Chèque
						<input type="radio" name="type" value="Effet" required class="my-4"> Effet
					</td>
				</tr>
				<tr>
					<td><label for="id_fournisseur">Fournisseur :</label></td>
					<td>
						<select name="id_fournisseur" required class="my-4" id="text">
							@foreach($fournisseurs as $fournisseur)
								<option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="reglement">Régler : </label></td>
					<td>
						<input type="checkbox" name="reglement" value="Oui" class="my-4"> Oui
						<input type="checkbox" name="reglement" value="Non" class="my-4"> Non
						<button type="submit" class="btn btn-primary mx-2">Créer Réglement</button>
					</td>
				</tr>
			</table>
		</center>		
	</form>
</body>
</html>
@endauth