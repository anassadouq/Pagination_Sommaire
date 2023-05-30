@auth
@extends('layouts.app')
@section('content')
<html>
<head>
	<title>Fournisseur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
    <h1 class="text-center">Fournisseurs</h1>

    <a href="{{route('fournisseur.create')}}" >
        <button class="btn btn-primary my-4" style="width:85px">
            <span class="material-symbols-outlined">add</span>
        </button>
    </a>
        <table id="myTable">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($fournisseurs as $fournisseur)
                <tr>
                    <td>{{ $fournisseur->nom }}</td>
                    <td>{{ $fournisseur->adresse }}</td>
                    <td>{{ $fournisseur->tel }}</td>
                    <td>
                        <form action="{{ route('fournisseur.destroy', $fournisseur->id) }}" method="POST" id="deleteForm{{ $fournisseur->id }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('fournisseur.edit', $fournisseur->id) }}" class="btn btn-secondary" id="btn">Modifier</a>
                            <button type="button" class="btn btn-danger mx-3" onclick="confirmDelete('{{ $fournisseur->id }}')" id="btn">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>    
    </div>
    
    <script>
        function confirmDelete(fournisseurId) {
            if (confirm('Êtes-vous sûr de vouloir supprimer ce fournisseur ?')) {
                document.getElementById('deleteForm' + fournisseurId).submit();
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
            $('#myTable').DataTable( {
                dom: 'Blfrtip',
                lengthChange: false, // disable length change dropdown
                paging: false, // disable pagination
                buttons: [{
                    extend: 'collection',
                    text: 'Export',
                    buttons: [{
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [ 0,1,2,3,4 ]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [ 0,1,2,3,4 ]
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: [ 0,1,2,3,4 ]
                        },
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [ 0,1,2,3,4 ]
                        }
                    }],
                }]
            });
        });
    </script>
</body>
</html>
@endsection
@endauth