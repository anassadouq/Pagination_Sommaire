@auth
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
    <form method="post" action="{{ route('detail_fournisseur.store') }}">
		<center> 
			<table>
				@csrf
				<tr>
					<input type="hidden" name="id_fournisseur" value="{{ $fournisseur->id }}">
				</tr>
				<tr>
					<td><label>Code : </label></td>
					<td><input type="text" name="code" class="my-3"></td>
				</tr>
				<tr>
					<td><label for="designation">designation : </label></td>
					<td>
						<textarea name="designation" cols="60" rows="3" class="my-3"></textarea>
					</td>
				</tr>
				<tr>
					<td><label for="eppMat">Qte : </label></td>
					<td><input type="text" name="qte" class="my-3" required></td>
				</tr>
				<tr>
					<td><label for="eppDer">Pu : </label></td>
					<td><input type="text" name="pu" class="my-3" required></td>
				</tr>
				<tr>
					<td><label for="eppDer">Date : </label></td>
					<td>
						<input type="date" name="date" class="my-3">
						<button type="submit" class="btn btn-primary mx-2">Créer Article</button>
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>
@endauth