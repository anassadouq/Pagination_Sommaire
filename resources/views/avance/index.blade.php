<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Detail Devis</title>
</head>
<body>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <center>
        <table width="90%" class="text-center my-3">
            <tr>
                <th>date</th>
                <th>prix</th>
                <th>type</th>
                <th>Actions</th>
            </tr>
            @foreach ($avances as $avance)        
                <tr>
                    <td>{{ $avance->date }}</td>
                    <td>{{ $avance->prix }}</td>
                    <td>{{ $avance->type }}</td>
                    <td>
                        <form action="{{ route('avance.destroy', $avance['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('avance.edit', $avance['id']) }}" class="btn btn-secondary">Modifier</a>
                            <button type="submit" class="btn btn-danger mx-3">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('avance.create', ['clientId' => $client->id]) }}" class="btn btn-primary mx-3">ajouter avance</a>
    </center>
</body>
</html>