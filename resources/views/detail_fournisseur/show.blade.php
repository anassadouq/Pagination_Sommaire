@extends('layouts.app')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>
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
        <a href="{{ route('detail_fournisseur.create', ['fournisseurId' => $fournisseur->id]) }}" class="btn btn-primary mx-2">
            <span class="material-symbols-outlined">add_circle</span>    
        Désignation</a>

        <a href="{{ route('designation.pdf', ['fournisseurId' => $fournisseur->id]) }}" class="btn btn-warning">
            <span class="material-symbols-outlined">download</span> 
        Télécharger</a>

        <h1 class="my-2">{{ $fournisseur->nom }}</h1>
        <h1>{{ $fournisseur->adresse }}</h1>
        <div class="container">
            <table class="text-center my-3" id="designations">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Code</th>
                        <th>Désignation</th>
                        <th>Qte</th>
                        <th>Prix Unitaire HT</th>
                        <th>Prix Total HT</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @php
                    $total = 0;
                @endphp
                <tbody>
                    @foreach ($detail_fournisseurs as $detail_fournisseur)
                        @php
                            $prix = $detail_fournisseur->qte * $detail_fournisseur->pu;
                            $total += $prix;
                        @endphp
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($detail_fournisseur->date)->format('d/m/Y') }}</td>
                            <td>{{ $detail_fournisseur->code }}</td>
                            <td>{{ $detail_fournisseur->designation }}</td>
                            <td>{{ $detail_fournisseur->qte }}</td>
                            <td>{{ $detail_fournisseur->pu }}</td>
                            <td>{{ $detail_fournisseur->pu * $detail_fournisseur->qte }}</td>
                            <td>
                                <form action="{{ route('detail_fournisseur.destroy', $detail_fournisseur['id']) }}" method="POST" id="deleteForm{{ $detail_fournisseur['id'] }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('detail_fournisseur.edit', $detail_fournisseur['id']) }}" class="btn btn-secondary">Modifier</a>
                                    <button type="button" class="btn btn-danger mx-3" onclick="confirmDelete('{{ $detail_fournisseur['id'] }}')">Supprimer</button> 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
            <table width="90%" class="text-center">
                <tr>
                    <th>Montant Total : HT</th>
                    <th>Taux : TVA</th>
                    <th>Montant : TVA</th>
                    <th>Montant Total : TTC</th>
                </tr>
                <tr>
                    <td>{{ $total }}</td>
                    <td>20%</td>
                    <td>{{ $total * 0.2}}</td>
                    <td>{{ $total + ($total * 0.2)}}</td>
                </tr>
            </table>
        </div>
    </center> 

    <script>
        function confirmDelete(detailDevisId) {
            if (confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) {
                document.getElementById('deleteForm' + detailDevisId).submit();
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#designations').DataTable( {
                dom: 'Blfrtip',
                lengthChange: false, // disable length change dropdown
                paging: false, // disable pagination
                buttons: [],
                language: {
                    info: "", // hide "Showing" text
                    infoEmpty: "" // hide "Showing 0 to 0 of 0 entries" text
                }
            });
        });
    </script>
</body>
</html>
@endsection
@endauth