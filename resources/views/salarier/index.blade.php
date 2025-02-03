@auth
@extends('layouts.app')
@section('content')
<html>
<head>
	<title>Salarier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    
    <div class="container">
        <h1 class="text-center">Salariés</h1>
        <a href="{{route('salarier.create')}}" >
            <button class="btn btn-primary my-4" style="width:85px">
                <span class="material-symbols-outlined">add</span>
            </button>
        </a>
        <table class="text-center" width="100%">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>CIN</th>
                    <th>Tel</th>
                    <th>Salaire</th>
                    <th>Date Entrée</th>
                    <th>Active</th>
                    <th>Show</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salariers as $salarier)
                    <tr>
                        <td>{{ $salarier->nom }}</td>
                        <td>{{ $salarier->prenom }}</td>
                        <td>{{ $salarier->cin }}</td>
                        <td>{{ $salarier->tel }}</td>
                        <td>{{ $salarier->salaire }}DH</td>
                        <td>{{ \Carbon\Carbon::parse($salarier->dateEntree)->format('d/m/Y') }}</td>
                        <td>{{ $salarier->active }}</td>
                        <td>
                            <a href="{{ route('contrat.show', $salarier->id) }}">
                                <span class="material-symbols-outlined">ads_click</span>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('salarier.destroy', $salarier->id) }}" method="POST" id="deleteSalarierForm{{ $salarier->id }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('salarier.edit' ,$salarier->id) }}" class="btn btn-secondary">Modifier</a>
                                <button type="button" class="btn btn-danger mx-3" onclick="confirmDeleteSalarier('{{ $salarier->id }}')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </div>

    <script>
        function confirmDeleteSalarier(salarierId) {
            if (confirm('Êtes-vous sûr de vouloir supprimer ce salarié ?')) {
                document.getElementById('deleteSalarierForm' + salarierId).submit();
            }
        }
    </script>
</body>
</html>
@endsection
@endauth