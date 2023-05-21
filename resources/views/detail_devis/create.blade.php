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
					<td><label for="lieu">Article : </label></td>
					<td>
						<textarea name="article" cols="60" rows="3" class="my-4"></textarea>
					</td>
				</tr>
				<tr>
					<td><label for="eppMat">Qte : </label></td>
					<td><input type="text" name="qte" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppDer">Unite : </label></td>
					<td>
						<input type="radio" name="unite" value="unité " class="my-4 mx-1">Unité 
						<input type="radio" name="unite" value="m2" class="mx-1">m2  
						<input type="radio" name="unite" value="ml" class="mx-1">ml 
						<input type="radio" name="unite" value="m3" class="mx-1">m3  
						<input type="radio" name="unite" value="Forfait" class="mx-1">Forfait 
					</td>
				</tr>
				<tr>
					<td><label for="eppDer">Pu : </label></td>
					<td><input type="text" name="pu" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="eppDer">Date Devis : </label></td>
					<td><input type="date" name="date_devis" class="my-4"></td>
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