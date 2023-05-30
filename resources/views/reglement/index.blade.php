@auth
@extends('layouts.app')
@section('content')
<html>
<head>
	<title>Règlements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
@if (Auth::user()->email == "younes@gmail.com")
    <style>
        #table{
            border: 1px solid black;  
        }
    </style>

    <div class="container">
        <h1 class="text-center">Règlements</h1>
        <a href="{{route('reglement.create')}}" >
            <button class="btn btn-primary my-2 mx-3" style="width:85px">
                <span class="material-symbols-outlined">add</span>
            </button>
        </a>
        <div class="row">
            <table class="col-7">
                <tr>
                    <td>Solde</td>
                    <td><input type="text" name="solde" id="soldeInput"></td>
                </tr>
                <tr>
                    <td>Montant à Encaisser</td>
                    <td><input type="text" name="montantEncaisser" id="montantEncaisserInput"></td>
                </tr>
                <tr>
                    <td>Autre Charge</td>
                    <td>
                        <input type="text" name="autreCharge" id="autreChargeInput">
                    </td>
                </tr>
                <tr>
                    <td>Date Debut</td>
                    <td><input type="date" name="filterDateD" id="filterDateDInput"></td>
                </tr>
                <tr>
                    <td>Date Fin</td>
                    <td>
                        <input type="date" name="filterDateF" id="filterDateFInput">
                        <button onclick="calculateReste()" class="btn btn-success mx-2">Clicker</button>
                    </td>
                </tr>
            </table>

            <table class="text-center col-3" style="width:30%">
                <tr>
                    <th class="text-danger">Prevision</th>
                </tr>
                <tr id="table" class="bg-danger text-light">
                    <td id="resteOutput" id="table"></td>
                </tr>
                <tr>
                    <th class="text-light"><br></th>
                </tr>
                <tr>
                    <td class="text-light"><br></td>
                </tr>
            </table>
        </div>
        
        <br>

        @php
            $totalCheque = 0;
            $totalEffet = 0;
        @endphp

        <table width="100%" class="text-center my-2" id="tableCheque">
            <tr>
                <th class="text-light bg-dark" id="table">Chèque</th>
            </tr>
            <tr id="table">
                <th id="table">N° chèque</th>
                <th id="table">Montant</th>
                <th id="table">Date</th>
                <th id="table">Type</th>
                <th id="table">Fournisseur</th>
                <th id="table">Actions</th>
            </tr>
            @foreach ($reglements as $reglement)
                @if ($reglement->type === 'Chèque')
                    <tr id="tableChequeRow" data-date="{{ $reglement->date }}">
                        <td id="table">{{ $reglement->num }}</td>
                        <td id="table">{{ $reglement->montant }}</td>
                        <td id="table">{{ \Carbon\Carbon::parse($reglement->date)->format('d/m/Y') }}</td>
                        <td id="table">{{ $reglement->type }}</td>
                        <td id="table">{{ $reglement->fournisseur->nom }}</td>
                        <td id="table">
                            <form action="{{ route('reglement.destroy', $reglement->id) }}" method="POST" id="deleteForm{{ $reglement->id }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('reglement.edit', $reglement->id) }}" class="btn btn-secondary" id="btn">Modifier</a>
                                <button type="button" class="btn btn-danger mx-3" onclick="confirmDelete('{{ $reglement->id }}')" id="btn">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $totalCheque += $reglement->montant;
                    @endphp
                @endif
            @endforeach
        </table>

        <table width="25%" class="text-center" id="table">
            <tr id="table">
                <th id="table">Totale</th>
            </tr>
            <tr id="table">
                <td id="totalCheque" id="table">{{ $totalCheque }}</td>
            </tr>
        </table><br>

        <table width="100%" class="text-center my-2" id="tableEffet">
            <tr>
                <th class="text-light bg-dark" id="table">Effet</th>
            </tr>
            <tr id="table">
                <th id="table">N° Effet</th>
                <th id="table">Montant</th>
                <th id="table">Date</th>
                <th id="table">Type</th>
                <th id="table">Fournisseur</th>
                <th id="table">Actions</th>
            </tr>
            @foreach ($reglements as $reglement)
                @if ($reglement->type === 'Effet')
                    <tr id="tableEffetRow" data-date="{{ $reglement->date }}">
                        <td id="table">{{ $reglement->num }}</td>
                        <td id="table">{{ $reglement->montant }}</td>
                        <td id="table">{{ \Carbon\Carbon::parse($reglement->date)->format('d/m/Y') }}</td>
                        <td id="table">{{ $reglement->type }}</td>
                        <td id="table">{{ $reglement->fournisseur->nom }}</td>
                        <td id="table">
                            <form action="{{ route('reglement.destroy', $reglement->id) }}" method="POST" id="deleteForm{{ $reglement->id }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('reglement.edit', $reglement->id) }}" class="btn btn-secondary" id="btn">Modifier</a>
                                <button type="button" class="btn btn-danger mx-3" onclick="confirmDelete('{{ $reglement->id }}')" id="btn">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $totalEffet += $reglement->montant;
                    @endphp
                @endif
            @endforeach
        </table>

        <table width="25%" class="text-center" id="table">
            <tr id="table">
                <th id="table">Totale</th>
            </tr>
            <tr id="table">
                <td id="totalEffet" id="table">{{ $totalEffet }}</td> 
            </tr>
        </table>
    </div>
    
    <script>
        function calculateReste() {
            var solde = parseFloat(document.getElementById('soldeInput').value) || 0;
            var montantEncaisser = parseFloat(document.getElementById('montantEncaisserInput').value) || 0;
            var autreCharge = parseFloat(document.getElementById('autreChargeInput').value) || 0;
            var totalCheque = 0;
            var totalEffet = 0;
            var filterDateD = new Date(document.getElementById('filterDateDInput').value);
            var filterDateF = new Date(document.getElementById('filterDateFInput').value);
            var filteredCheques = document.querySelectorAll('#tableChequeRow[data-date]');
            var filteredEffets = document.querySelectorAll('#tableEffetRow[data-date]');

            filteredCheques.forEach(function (cheque) {
                var chequeDate = new Date(cheque.getAttribute('data-date'));
                if (chequeDate >= filterDateD && chequeDate <= filterDateF) {
                    cheque.style.display = 'table-row';
                    totalCheque += parseFloat(cheque.querySelector('td:nth-child(2)').textContent);
                } else {
                    cheque.style.display = 'none';
                }
            });

            filteredEffets.forEach(function (effet) {
                var effetDate = new Date(effet.getAttribute('data-date'));
                if (effetDate >= filterDateD && effetDate <= filterDateF) {
                    effet.style.display = 'table-row';
                    totalEffet += parseFloat(effet.querySelector('td:nth-child(2)').textContent);
                } else {
                    effet.style.display = 'none';
                }
            });

            var reste = (montantEncaisser + solde) - (totalCheque + totalEffet + autreCharge);
            document.getElementById('resteOutput').textContent = reste.toFixed(2);

            document.getElementById('totalCheque').textContent = totalCheque.toFixed(2);
            document.getElementById('totalEffet').textContent = totalEffet.toFixed(2);
        }
        function confirmDelete(reglementId) {
            if (confirm('Are you sure you want to delete this item?')) {
                document.getElementById('deleteForm' + reglementId).submit();
            }
        }
    </script>


</body>
</html>
@endif
@endsection
@endauth