@auth
@extends('layouts.app')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>
    table, th, td {
        border: 1px solid black;
        text-align:center;
    }
</style>
<h1 class="text-center">{{ $placard->nom }} {{ $placard->lieu }}</h1>

<center>
    <table style="width:50%" id="myTable" class="m-4">
        <tr>
            <th>Type</th>
            <th>H</th>
            <th>L</th>
            <th>QTE</th>
        </tr>
        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-dark text-light">MNT</td>
                @if($detail_placard->image == "coulisse2.png")
                    <td>{{$detail_placard->hauteur - $placard->eppMat - $placard->eppMat}}</td>
                    <td>{{$detail_placard->profondeur -1}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_2_porte.png")
                    <td>{{$detail_placard->hauteur - 3.6}}</td>
                    <td>{{$detail_placard->profondeur -1}}</td>
                    <td>{{$detail_placard->qte*2}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_4_porte.png")
                    <td>{{$detail_placard->hauteur - 1.8 - 1.8}}</td>
                    <td>{{$detail_placard->profondeur -1}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
            </tr>
        @endforeach

        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-primary">MNT COLIS</td>
                @if($detail_placard->image == "coulisse1.png")
                    <td>{{$detail_placard->hauteur - $placard->eppMat - $placard->eppMat}}</td>
                    <td>{{$detail_placard->profondeur -1}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
            </tr>
        @endforeach
        
        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-warning">MNT BANDA</td>
                @if($detail_placard->image == "coulisse2.png")
                    <td>{{$detail_placard->hauteur - $placard->eppMat - $placard->eppMat}}</td>
                    <td>{{$detail_placard->profondeur -1}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_4_porte.png")
                    <td>{{$detail_placard->hauteur - 1.8 - 1.8}}</td>
                    <td>{{$detail_placard->profondeur -1}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
            </tr>
        @endforeach

        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-light">TRV</td>
                @if($detail_placard->image == "coulisse1.png")
                    <td>{{$detail_placard->largeur}}</td>
                    <td>{{$detail_placard->profondeur - 1}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
                @if($detail_placard->image == "coulisse2.png")
                    <td>{{$detail_placard->largeur}}</td>
                    <td>{{$detail_placard->profondeur - 1}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_2_porte.png")
                    <td>{{$detail_placard->largeur}}</td>
                    <td>{{$detail_placard->profondeur - 1}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_4_porte.png")
                    <td>{{$detail_placard->largeur}}</td>
                    <td>{{$detail_placard->profondeur - 1}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
            </tr>
        @endforeach

        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-danger">SPR VIR</td>
                @if($detail_placard->image == "coulisse1.png")
                    <td>{{$detail_placard->hauteur - 45}}</td>
                    <td>{{$detail_placard->profondeur - 10}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "coulisse2.png")
                    <td>{{$detail_placard->hauteur - 45}}</td>
                    <td>{{$detail_placard->profondeur - 10}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_4_porte.png")
                    <td>{{$detail_placard->hauteur - 1.8 - 1.8}}</td>
                    <td>{{$detail_placard->profondeur - 10}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
            </tr>
        @endforeach

        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-success text-light">SPR HOR</td>
                @if($detail_placard->image == "coulisse1.png")
                    <td>{{$detail_placard->largeur - $placard->eppMat - $placard->eppMat}}</td>
                    <td>{{$detail_placard->profondeur - 10}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "coulisse2.png")
                    <td>{{$detail_placard->largeur - $placard->eppMat - $placard->eppMat}}</td>
                    <td>{{$detail_placard->profondeur - 10}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
            </tr>
        @endforeach

        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-dark text-light">ETAGER</td>
                @if($detail_placard->image == "coulisse1.png")
                    <td>{{(($detail_placard->largeur - $placard->eppMat - $placard->eppMat - 1.9) /2) - 0.1}}</td>
                    <td>{{$detail_placard->profondeur - 10-0.5}}</td>
                    <td>{{$detail_placard->qte *4}}</td>
                @endif
                @if($detail_placard->image == "coulisse2.png")
                    <td>{{(($detail_placard->largeur - $placard->eppMat - $placard->eppMat - 1.9) /2) - 0.1}}</td>
                    <td>{{$detail_placard->profondeur - 10-0.5}}</td>
                    <td>{{$detail_placard->qte *4}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_2_porte.png")
                    <td>{{(($detail_placard->largeur - 3.6 - 1.8 - 0.2) /2)}}</td>
                    <td>{{$detail_placard->profondeur - 10 - 0.5}}</td>
                    <td>{{$detail_placard->qte *5}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_4_porte.png")
                    <td>{{((($detail_placard->largeur - 1.8 - 1.8 - 1.8) /2) -0.1)}}</td>
                    <td>{{((($detail_placard->profondeur - 1.8 - 1.8 - 1.8) /2) -0.1)}}</td>
                    <td>{{$detail_placard->qte *5}}</td>
                @endif
                @if($detail_placard->image == "pl_ouvr_1_p.png")
                    <td>{{$detail_placard->largeur - 3.6 - 0.1}}</td>
                    <td>{{$detail_placard->profondeur - 1 - 0.5}}</td>
                    <td>{{$detail_placard->qte *4}}</td>
                @endif
                @if($detail_placard->image == "pl_ouvr_2_p.png")
                    <td>{{$detail_placard->largeur - 3.6 - 0.1}}</td>
                    <td>{{$detail_placard->profondeur - 1 - 0.5}}</td>
                    <td>{{$detail_placard->qte *4}}</td>
                @endif
            </tr>
        @endforeach

        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-primary">PORTE COLIS</td>
                @if($detail_placard->image == "coulisse1.png")
                    <td>{{$detail_placard->hauteur - 3.8 - 4}}</td>
                    <td>{{($detail_placard->largeur - 3.8 - 6) /2}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
                @if($detail_placard->image == "coulisse2.png")
                    <td>{{$detail_placard->hauteur - 3.8 - 4}}</td>
                    <td>{{($detail_placard->largeur - 3.8 - 6) /2}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
            </tr>
        @endforeach

        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-warning">CHAMBRA MNT</td>
                @if($detail_placard->image == "coulisse1.png")
                    <td>{{$detail_placard->hauteur + 13}}</td>
                    <td>8</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
                @if($detail_placard->image == "coulisse2.png")
                    <td>{{$detail_placard->hauteur + 13}}</td>
                    <td>8</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_2_porte.png")
                    <td>8</td>
                    <td>{{$detail_placard->hauteur +17}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_4_porte.png")
                    <td>8</td>
                    <td>209,5</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "pl_ouvr_1_p.png")
                    <td>8</td>
                    <td>{{$detail_placard->hauteur +18}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
                @if($detail_placard->image == "pl_ouvr_2_p.png")
                    <td>8</td>
                    <td>{{$detail_placard->hauteur +18}}</td>
                    <td>{{$detail_placard->qte *2}}</td>
                @endif
            </tr>
        @endforeach

        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-danger">CHAMBRA TRV HAUT</td>
                @if($detail_placard->image == "coulisse1.png")
                    <td>12</td>
                    <td>{{$detail_placard->largeur}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "coulisse2.png")
                    <td>12</td>
                    <td>{{$detail_placard->largeur}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_2_porte.png")
                    <td>{{$detail_placard->largeur}}</td>
                    <td>12</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_4_porte.png")
                    <td>{{$detail_placard->largeur}}</td>
                    <td>12</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
            </tr>
        @endforeach

        @foreach($detail_placards as $detail_placard)
            <tr>
                <td class="bg-success">CHAMBRA TRV BAS</td>
                @if($detail_placard->image == "coulisse1.png")
                    <td>8</td>
                    <td>{{$detail_placard->largeur}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "coulisse2.png")
                    <td>8</td>
                    <td>{{$detail_placard->largeur}}</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_2_porte.png")
                    <td>{{$detail_placard->largeur}}</td>
                    <td>8</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
                @if($detail_placard->image == "pl_colis_4_porte.png")
                    <td>{{$detail_placard->largeur}}</td>
                    <td>8</td>
                    <td>{{$detail_placard->qte}}</td>
                @endif
            </tr>
        @endforeach
    </table>
</center>
<h4><a href="{{ route('placard.index') }}" class="mx-5">
    <span class="material-symbols-outlined">undo</span><span>Go Back</span>
</a></h4><br><br>
@endsection
@endauth