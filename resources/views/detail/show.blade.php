@auth
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<Link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
<style>
    table, th, td {
        border: 1px solid black;  
    }
</style>
<center><h1>{{ $client->nom }} {{ $client->lieu }}</h1></center>

<div class="container">
    <table class="text-center" id="myTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Position</th>
                <th>Hauteur</th>
                <th>Largeur</th>
                <th>Profondeur</th>
                <th>Qte</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($details as $detail)
                <tr>
                    <td><img src="/images/{{$detail['image']}}" width="100px" ></td>
                    <td>{{ $detail['position'] }}</td>
                    <td>{{ $detail['hauteur'] }}cm</td>
                    <td>{{ $detail['largeur'] }}cm</td>
                    <td>{{ $detail['profondeur'] }}cm</td>
                    <td>{{ $detail['qte'] }}</td>
                    <td>
                        <form action="{{ route('detail.destroy', $detail['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('detail.edit' ,$detail['id']) }}" class="btn btn-secondary">Modifier</a>
                            <button type="submit" class="btn btn-danger mx-3">Supprimer</button> 
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('client.index') }}" class="btn btn-dark text-light m-3 ">
        <span class="material-symbols-outlined">undo</span>
    Retour</a>
    <a href="{{ route('detail.create', ['clientId' => $client->id]) }}" class="btn btn-primary mx-3">
    <span class="material-symbols-outlined">
add_circle
</span>    
     Caisson</a>
    <a href="{{ url('/debitage/'.$client->id) }}" class="btn btn-success mx-3">Débutage</a>
    <a href="{{ url('/allDebitage/'.$client->id) }}" class="btn btn-warning mx-3">Débutage Totale</a>
</div>
<br>


<br><br>


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
            searching: false,
            lengthChange: false, // disable length change dropdown
            buttons: [{
                extend: 'collection',
                text: 'Export',
                buttons: [{
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0,1,2,3,4,5 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0,1,2,3,4,5 ]
                    }
                },
                {
                    extend: 'csvHtml5',
                    exportOptions: {
                        columns: [ 0,1,2,3,4,5 ]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [ 0,1,2,3,4,5 ]
                    }
                }],
            }]
        });
    });
</script>
@endsection
@endauth