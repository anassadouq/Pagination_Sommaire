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
<center><h1 class="my-2">MR {{ $client->nom }} {{ $client->lieu }}</h1></center>

    <center>
        <table width="90%" class="text-center my-3">
            <tr>
                <th>Article</th>
                <th>Qte</th>
                <th>Unite</th>
                <th>PU</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
                @php
                    $total = 0;
                @endphp
                @foreach ($detail_deviss as $detail_devis)
                    @php
                        $prix = $detail_devis->qte * $detail_devis->pu;
                        $total += $prix;
                    @endphp
                    <tr>
                        <td>{{ $detail_devis->article }}</td>
                        <td>{{ $detail_devis->qte }}</td>
                        <td>{{ $detail_devis->unite }}</td>
                        <td>{{ $detail_devis->pu }}</td>
                        <td>{{ $prix }}</td>
                        <td>
                            <form action="{{ route('detail_devis.destroy', $detail_devis['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('detail_devis.edit', $detail_devis['id']) }}" class="btn btn-secondary">Modifier</a>
                                <button type="submit" class="btn btn-danger mx-3">Supprimer</button> 
                            </form>
                        </td>
                    </tr>
                @endforeach
        </table>

        <table width="90%" class="text-center my-3">
            <tr style="background-color : #F0F0F0">
                <th>TOTAL</th>
                <th>{{ $total }}</th>
            </tr>
        </table>
        <a href="{{ route('detail_devis.create', ['clientId' => $client->id]) }}" class="btn btn-primary mx-3">
        <span class="material-symbols-outlined">
            add_circle
        </span>    
    Articles</a>
    </center>
</body>
</html>