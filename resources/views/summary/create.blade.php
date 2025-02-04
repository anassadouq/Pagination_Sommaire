<html>
<head>
	<title>Create</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="{{ route('summary.store') }}">
	 	<center>
			<table>
				@csrf
				<tr>
					<td><label for="title">Title</label></td>
					<td><input type="text" placeholder="Title" name="title" class="my-4" required></td>
				</tr>
				<tr>
					<td><label for="description">Description</label></td>
					<td><textarea name="description" rows="10" cols="100" placeholder="Description"></textarea></td>
				</tr>
				<tr>
					<td>
						<button type="submit" class="btn btn-primary mx-2">Create</button>
					</td>
				</tr>
			</table>
		</center>		
	</form>
</body>
</html>