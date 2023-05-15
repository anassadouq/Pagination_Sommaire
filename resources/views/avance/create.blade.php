@auth

<html>
<head>
	<title>Create Caissons</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<style>
		label{
			font-weight:bold;
		}
	</style>
    <form method="post" action="{{ route('avance.store') }}">
		<center> 
			<table>
				@csrf
				<tr>
					<input type="hidden" name="id_client" value="{{ $client->id }}">
				</tr>
				<tr>
					<td><label for="lieu">date : </label></td>
					<td><input type="date" name="date" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppMat">prix : </label></td>
					<td><input type="text" name="prix" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppDer">type : </label></td>
					<td><input type="text" name="type" class="my-4" required></td>
				</tr>
				<tr>
					<td>
						<button type="submit" class="btn btn-success mx-2">Créer Avance</button>
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>
@endauth