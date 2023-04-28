@auth
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<html>
<head>
	<title>Create Contrat</title>
</head>
<body>
	<style>
		label{
			font-weight: bold;
		}
		input{
			width: 350px;
		}
	</style>
    <center>
		<form method="post" action="{{ route('contrat.store') }}">
			<table>
				@csrf
				<input type="hidden" name="id_salarier" value="{{ $salarier->id }}">
				<tr>
					<td><label for="nomSociéte">Nom Sociéte : </label></td>
					<td><input type="text" name="nomSociéte" required class="my-4"></td>
				</tr>
				<tr>
					<td><label for="eppMat">Adresse Sociéte : </label></td>
					<td><input type="text" name="adresseSociéte" required class="my-4"></td>
				</tr>
				<tr>
					<td><label for="eppDer">Date Départ : </label></td>
					<td><input type="date" name="dateDepart" required class="my-4"></td>
				</tr>
				<tr>
					<td><label for="eppDer">Date Finale : </label></td>
					<td>
						<input type="date" name="dateFinale" required class="my-4">
						<button type="submit" class="btn btn-primary mx-2">Create Contrat</button>
					</td>
				</tr>
			</table>
		</form>
	</center> 
</body>
</html>
@endauth