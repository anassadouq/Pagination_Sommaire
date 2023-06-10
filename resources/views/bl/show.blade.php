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
    <title>Bl</title>
</head>
<body>
@if (Auth::user()->email == "younes@gmail.com")
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <center>
        <a href="{{ route('bl.create', ['fournisseurId' => $fournisseur->id]) }}" class="btn btn-primary mx-2">
            <span class="material-symbols-outlined">add_circle</span>    
        BL / Article</a>
    </center>
    <div class="container">
    <h2 style="font-weight:bold">Facture</h2>
        <table class="text-center my-3" id="designations2">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Num</th>
                    <th>Type</th>
                    <th>TVA</th>
                    <th>Régler</th>
                    <th>Show</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bls as $bl)
                    @if($bl->type == "Facture" && $bl->regler == "Non")
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($bl->date)->format('d/m/Y') }}</td>
                            <td>{{ $bl->num }}</td>
                            <td>{{ $bl->type }}</td>
                            <td>{{ $bl->tva }}%</td>
                            <td>{{ $bl->regler }}</td>
                            <td>
                                <a href="{{ route('detail_bl.show', $bl->id) }}">
                                    <span class="material-symbols-outlined">ads_click</span>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('bl.destroy', $bl['id']) }}" method="POST" id="deleteForm{{ $bl['id'] }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('bl.edit', $bl['id']) }}" class="btn btn-secondary">Modifier</a>
                                    <button type="button" class="btn btn-danger mx-3" onclick="confirmDelete('{{ $bl['id'] }}')">Supprimer</button> 
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        
        <h2 style="font-weight:bold">BL</h2>
        <table class="text-center my-3" id="designations">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Num</th>
                    <th>Type</th>
                    <th>TVA</th>
                    <th>Régler</th>
                    <th>Show</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bls as $bl)
                    @if($bl->type == "BL" && $bl->regler == "Non")
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($bl->date)->format('d/m/Y') }}</td>
                            <td>{{ $bl->num }}</td>
                            <td>{{ $bl->type }}</td>
                            <td>{{ $bl->tva }}%</td>
                            <td>{{ $bl->regler }}</td>
                            <td>
                                <a href="{{ route('detail_bl.show', $bl->id) }}">
                                    <span class="material-symbols-outlined">ads_click</span>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('bl.destroy', $bl['id']) }}" method="POST" id="deleteForm{{ $bl['id'] }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('bl.edit', $bl['id']) }}" class="btn btn-secondary">Modifier</a>                                        <button type="button" class="btn btn-danger mx-3" onclick="confirmDelete('{{ $bl['id'] }}')">Supprimer</button> 
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <h2 style="font-weight:bold">Facture & BL Régler</h2>
        <table class="text-center my-3" id="regler">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Num</th>
                    <th>Type</th>
                    <th>TVA</th>
                    <th>Régler</th>
                    <th>Show</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bls as $bl)
                    @if($bl->regler == "Oui")
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($bl->date)->format('d/m/Y') }}</td>
                            <td>{{ $bl->num }}</td>
                            <td>{{ $bl->type }}</td>
                            <td>{{ $bl->tva }}%</td>
                            <td>{{ $bl->regler }}</td>
                            <td>
                                <a href="{{ route('detail_bl.show', $bl->id) }}">
                                    <span class="material-symbols-outlined">ads_click</span>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('bl.destroy', $bl['id']) }}" method="POST" id="deleteForm{{ $bl['id'] }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('bl.edit', $bl['id']) }}" class="btn btn-secondary">Modifier</a>                                        <button type="button" class="btn btn-danger mx-3" onclick="confirmDelete('{{ $bl['id'] }}')">Supprimer</button> 
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        
    </div>

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
    <script>
        $(document).ready(function() {
            $('#designations2').DataTable( {
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
    <script>
        $(document).ready(function() {
            $('#regler').DataTable( {
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