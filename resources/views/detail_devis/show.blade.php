@extends('layouts.app')
@section('content')
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
@if (Auth::user()->email == "younes@gmail.com")
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <center> 
        <a href="{{ route('detail_devis.create', ['clientId' => $client->id]) }}" class="btn btn-primary mx-2">
            <span class="material-symbols-outlined">
                add_circle
            </span>    
        Article</a>
        <a href="{{ route('avance.create', ['clientId' => $client->id]) }}" class="btn btn-success mx-3">
            <span class="material-symbols-outlined">
                add_circle
            </span>
        Avance</a>
        <a href="{{ route('devis.pdf', ['clientId' => $client->id]) }}" class="btn btn-warning">
            <span class="material-symbols-outlined">
                download
            </span> 
        Télécharger le devis</a>
        <h1 class="my-2">{{ $client->nom }} {{ $client->lieu }}</h1>
    </center>
    <center>
        <table width="90%" class="text-center my-3">
            <tr>
                <th>Article</th>
                <th>Qte</th>
                <th>Unite</th>
                <th>PU</th>
                <th>Prix</th>
                <th>Date</th>
                <th>Suppression</th>
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
                    <td>{{ \Carbon\Carbon::parse($detail_devis->date_devis)->format('d/m/Y') }}</td>
                    <td>
                        <form action="{{ route('detail_devis.destroy', $detail_devis['id']) }}" method="POST" id="deleteForm{{ $detail_devis['id'] }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('detail_devis.edit', $detail_devis['id']) }}" class="btn btn-secondary">Modifier</a>
                            <button type="button" class="btn btn-danger mx-3" onclick="confirmDelete('{{ $detail_devis['id'] }}')">Supprimer</button> 
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <table width="90%" class="text-center my-3">
            <tr style="background-color : #F0F0F0">
                <th>TOTAL</th>
                <th>{{ $total }} DH</th>
            </tr>
        </table>
        
    </center> 
    <div class="row">
        <table width="50%" class="col-6 text-center mx-5 my-3">
            <tr>
                <th>Date</th>
                <th>Prix</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
            @foreach ($avances as $avance)        
                <tr>
                    <td>{{ \Carbon\Carbon::parse($avance->date)->format('d/m/Y') }}</td>
                    <td>{{ $avance->prix }}</td>
                    <td>{{ $avance->type }}</td>
                    <td>
                        <form action="{{ route('avance.destroy', $avance['id']) }}" method="POST" id="deleteAvanceForm{{ $avance['id'] }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('avance.edit', $avance['id']) }}" class="btn btn-secondary">Modifier</a>
                            <button type="button" class="btn btn-danger mx-3" onclick="confirmDeleteAvance('{{ $avance['id'] }}')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <table class="col-2 text-center my-3 bg-info" height="100px">
            <tr>
                <th>RESTE</th>
                <th>{{ $total - $avances->sum('prix') }} DH</th>
            </tr>
        </table>
    </div>

    <script>
        function confirmDelete(detailDevisId) {
            if (confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) {
                document.getElementById('deleteForm' + detailDevisId).submit();
            }
        }
    function confirmDeleteAvance(avanceId) {
        if (confirm('Êtes-vous sûr de vouloir supprimer cette avance ?')) {
            document.getElementById('deleteAvanceForm' + avanceId).submit();
        }
    }
</script>
</body>
</html>
@endsection
@endauth