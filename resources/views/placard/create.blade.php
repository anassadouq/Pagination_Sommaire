@auth
<html>
<head>
	<title>Create Client</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<style>
		label{
			font-weight:bold;
		}
		input{
			width:350px;
		}
	</style>
    <form method="POST" action="{{ route('placard.store') }}">
	 	<center>
			<table>
				@csrf
				<tr>
					<td><label for="nom">Nom : </label></td>
					<td><input type="text" placeholder="Nom Client" name="nom" required class="my-4"></td>
				</tr>
				<tr>
					<td><label for="lieu">Lieu : </label></td>
					<td><input type="text" placeholder="Lieu Client" name="lieu" required class="my-4"></td>
				</tr>
				<tr>
					<td><label for="eppMat">EPP Matiére : </label></td>
					<td><input type="text" placeholder="Eppesseur Matiére" name="eppMat" required class="my-4"></td>
				</tr>
				<tr>
					<td><label for="eppDer">Eppesseur Derriére : </label></td>
					<td>
						<input type="text" placeholder="Eppesseur Derriére" id="eppDer" name="eppDer" required class="my-4">
						<button type="submit" class="btn btn-primary mx-2">Créer Client</button>
					</td>
				</tr>
			</table>
		</center>		
	</form>
</body>
</html>
@endauth