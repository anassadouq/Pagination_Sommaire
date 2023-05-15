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
    <form method="post" action="{{ route('detail_devis.store') }}">
		<center> 
			<table>
				@csrf
				<tr>
					<input type="hidden" name="id_client" value="{{ $client->id }}">
				</tr>
				<tr>
					<td><label for="lieu">article : </label></td>
					<td><input type="text" name="article" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppMat">qte : </label></td>
					<td><input type="text" name="qte" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppDer">unite : </label></td>
					<td><input type="text" name="unite" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppDer">pu : </label></td>
					<td><input type="text" name="pu" class="my-4" required></td>
				</tr>
				<tr>
					<td>
						<button type="submit" class="btn btn-primary mx-2">Créer Article</button>
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>
@endauth