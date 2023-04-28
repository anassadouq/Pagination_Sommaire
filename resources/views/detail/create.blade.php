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
    <form method="post" action="{{ route('detail.store') }}" enctype="multipart/form-data">
		<center> 
			<table>
				@csrf
				<tr>
					<input type="hidden" name="id_client" value="{{ $client->id }}">
					<td><label for="image">Image :</label></td>
					<td><input type="file" name="image" class="my-4"></td>
				</tr>
				<tr>
					<td><label for="position">Position : </label></td>
					<td>
						<input type="radio" name="position" value="haut" class="my-4" >Haut
						<input type="radio" name="position" value="bas">Bas 
					</td>
				</tr>
				<tr>
					<td><label for="lieu">Hauteur : </label></td>
					<td><input type="text" name="hauteur" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppMat">Largeur : </label></td>
					<td><input type="text" name="largeur" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppDer">Profondeur : </label></td>
					<td><input type="text" name="profondeur" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppDer">Qte : </label></td>
					<td>
						<input type="text" name="qte" class="my-4" required>
						<button type="submit" class="btn btn-primary mx-2">Create Caisson</button>
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>
@endauth