<html>
<head>
	<title>Create Caissons</title>
</head>
<body>
	<h1>Create Caissons</h1>
    <form method="post" action="{{ route('detail.store') }}" enctype="multipart/form-data">
		@csrf
		<label for="image">Image :</label>
		<input type="file" name="image" id="image"><br><br>
		<label for="position">Position : </label>
		<input type="radio" name="position" value="haut">Haut
		<input type="radio" name="position" value="bas">Bas <br><br>
		<input type="hidden" name="id_client" value="{{ $client->id }}">
		<label for="lieu">Hauteur : </label>
		<input type="text" id="hauteur" name="hauteur" required><br><br>
		<label for="eppMat">Largeur : </label>
		<input type="text" id="eppMat" name="largeur" required><br><br>
		<label for="eppDer">Profondeur : </label>
		<input type="text" id="eppDer" name="profondeur" required><br><br>
        <label for="eppDer">Qte : </label>
		<input type="text" id="eppDer" name="qte" required>
		<button type="submit">Create caisson</button>
	</form>
</body>
</html>