@auth
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<Link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
<style>
    table, th, td {
        border: 1px solid black;  
    }
</style>
<a href="{{ route('contrat.create', ['salarierId' => $salarier->id]) }}" class="btn btn-primary mx-3">Create</a>

<div class="container">
    <table class="text-center" width="100%">
        <thead>
            <tr>
                <th>Nom Salarier</th>
                <th>Nom Sociéte</th>
                <th>Adresse Sociéte</th>
                <th>Date Départ</th>
                <th>Date Finale</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contrats as $contrat)
                <tr>
                    <td>{{ $salarier->prenom }} {{ $salarier->nom }}</td>
                    <td>{{ $contrat->nomSociéte }}</td>
                    <td>{{ $contrat->adresseSociéte }}</td>
                    <td>{{ $contrat->dateDepart }}</td>
                    <td>{{ $contrat->dateFinale }}</td>
                    <td>
                        <form action="{{ route('contrat.destroy', $contrat['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('contrat.edit' ,$contrat['id']) }}" class="btn btn-secondary">Modifier</a>
                            <button type="submit" class="btn btn-danger mx-3">Supprimer</button> 
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success my-3 mx-3" href="{{ route('attestation', ['salarierId' => $salarier->id]) }}" style="text-decoration: none">
        <span class="material-symbols-outlined">
            download
        </span> Contrat
    </a>
    
    <a class="btn btn-secondary" href="{{ route('attestationtt', ['salarierId' => $salarier->id]) }}" style="text-decoration: none">
        <span class="material-symbols-outlined">
            download
        </span> Solde de tt compte
    </a>

</div>
<br>
@endsection
@endauth