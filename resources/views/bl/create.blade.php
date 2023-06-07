<html>
<head>
	<title>Create Designation</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<style>
		label{
			font-weight:bold;
		}
	</style>
    <form method="post" action="{{ route('bl.store') }}">
		<center> 
			<table>
				@csrf
				<tr>
					<input type="hidden" name="id_fournisseur" value="{{ $fournisseur->id }}">
				</tr>
				<tr>
					<td><label>Date : </label></td>
					<td><input type="date" name="date" class="my-4"></td>
				</tr>
				<tr>
					<td><label for="num">Numéro : </label></td>
					<td>
						<input type="text" name="num" class="my-4">
					</td>
				</tr>
				<tr>
					<td><label for="eppDer">Type : </label></td>
					<td>
						<input type="radio" name="type" value="BL" class="my-4 mx-1">BL 
						<input type="radio" name="type" value="Facture" class="mx-1">Facture  
					</td>
				</tr>
				<tr>
					<td><label for="tva">TVA : </label></td>
					<td>
						<input type="text" name="tva" class="my-4">
					</td>
				</tr>
				<tr>
					<td><label for="eppMat">Régler : </label></td>
					<td>
						<input type="radio" name="regler" value="Oui" class="my-4 mx-2">Oui
						<input type="radio" name="regler" value="Non" class="my-4 mx-2">Non
						<button type="submit" class="btn btn-primary mx-2">Créer</button>
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>