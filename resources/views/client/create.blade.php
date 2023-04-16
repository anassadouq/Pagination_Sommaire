<html>
<head>
	<title>Create Client</title>
</head>
<body>
	<h1>Create Client</h1>
    <form method="POST" action="{{ route('client.store') }}">
        @csrf
		<label for="nom">Nom : </label>
		<input type="text" id="nom" name="nom" required>
		<label for="lieu">Lieu : </label>
		<input type="text" id="lieu" name="lieu" required>
		<label for="eppMat">EPP Mat : </label>
		<input type="text" id="eppMat" name="eppMat" required>
		<label for="eppDer">EPP Der : </label>
		<input type="text" id="eppDer" name="eppDer" required>
		<button type="submit">Create Client</button>
	</form>
</body>
</html>