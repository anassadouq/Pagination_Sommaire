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
<h1 class="text-center">{{ $client->nom }} {{ $client->lieu }}</h1>

<center>
    <table style="width:50%" id="myTable" class="m-4">
        <tr>
            <th>Type</th>
            <th>H</th>
            <th>L</th>
            <th>QTE</th>
        </tr>
        @foreach($details as $detail)
            <tr>
                <td class="bg-primary">MNT</td>
                @if($detail->image == "caisson1.png" || $detail->image == "caisson4.png")
                    <td>{{$detail->hauteur - $client->eppMat}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
                @if($detail->image == "caisson2.png" || $detail->image == "caisson3.png" || $detail->image == "caisson5.png" || $detail->image == "colonne1.png" || $detail->image == "colonne2.png")
                    <td>{{$detail->hauteur - $client->eppMat *2}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
                @if($detail->image == "caisson6(Haut).png" || $detail->image == "caisson7(Haut).png" || $detail->image == "caisson8(Haut).png" )
                    <td>{{$detail->hauteur}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
            </tr>
        @endforeach
        @foreach($details as $detail)
            <tr>
                <td class="bg-secondary">TRAV</td>
                @if($detail->image == "caisson2.png" || $detail->image == "caisson3.png")
                    <td>{{$detail->largeur}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
                @if($detail->image == "caisson4.png")
                    <td>{{$detail->hauteur - $client->eppMat}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
                @if($detail->image == "caisson5.png" || $detail->image == "colonne1.png" || $detail->image == "colonne2.png")
                    <td>{{$detail->hauteur - $client->eppMat *2}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
                @if($detail->image == "caisson6(Haut).png" || $detail->image == "caisson8(Haut).png")
                    <td>{{$detail->largeur - $client->eppMat *2}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte * 2}}</td>
                @endif
                @if($detail->image == "caisson7(Haut).png")
                    <td>{{$detail->largeur - $client->eppMat *2}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte * 2}}</td>
                @endif
            </tr>
        @endforeach
        @foreach ($details as $detail)
            <tr>
                <td class="bg-success">REGLA</td>
                @if($detail->image == "caisson1.png")
                    <td>{{$detail->largeur - $client->eppMat - $client->eppMat}}</td>
                    <td>8</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
                @if($detail->image == "caisson4.png")
                    <td>{{$detail->largeur - ($client->eppMat)}}</td>
                    <td>8</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
            </tr>
        @endforeach
        @foreach ($details as $detail)
            <tr>
                <td class="bg-danger">ETAGERS</td>
                @if($detail->image == "caisson2.png")
                    <td>{{$detail->largeur - $client->eppMat - $client->eppMat - 0.1}}</td>
                    <td>{{$detail->profondeur - 2 -  $client->eppDer - 0.5}}</td>
                    <td>{{$detail->qte}}</td>
                @endif
                @if($detail->image == "caisson5.png" || $detail->image == "caisson8(Haut).png")
                    <td>{{$detail->largeur - $client->eppMat *2}}</td>
                    <td>{{$detail->profondeur-2-$client->eppDer-0.5}}</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
                @if($detail->image == "caisson6(Haut).png")
                    <td>{{$detail->largeur - $client->eppMat *2}}</td>
                    <td>{{$detail->profondeur-2-$client->eppDer-0.5}}</td>
                    <td>{{$detail->qte}}</td>
                @endif
                @if($detail->image == "colonne1.png")
                    <td>{{$detail->largeur - ($client->eppMat *2) -0.1}}</td>
                    <td>{{$detail->profondeur -3}}</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
                @if($detail->image == "colonne2.png")
                    <td>{{$detail->largeur - ($client->eppMat *2) -0.1}}</td>
                    <td>{{$detail->largeur -2 - $client->eppDer -0.5}}</td>
                    <td>{{$detail->qte *3}}</td>
                @endif
            </tr>
        @endforeach    
        @foreach($details as $detail)
            <tr>
                <td class="bg-warning">TRAV bas</td>
                @if($detail->image == "caisson1.png")
                    <td>{{$detail->largeur}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte}}</td>
                @endif
            </tr>
        @endforeach
        @foreach($details as $detail)
            <tr>
                <td class="bg-info">ETAGERS FIX</td>
                @if($detail->image == "colonne1.png")
                    <td>{{$detail->largeur - $client->eppMat *2}}</td>
                    <td>{{$detail->profondeur}}</td>
                    <td>{{$detail->qte *2}}</td>
                @endif
            </tr>
        @endforeach
    </table>

    <table style="width:50%" class="my-5"> 
        <tr>
            <th>Type</th>
            <th>H</th>
            <th>L</th>
            <th>QTE</th>
        </tr>
        @foreach ($details as $detail)
            <tr>
                <td class="bg-secondary">DERRIERE</td>
                @if($detail->image == "caisson2.png" || $detail->image == "caisson3.png"|| $detail->image == "caisson4.png"|| $detail->image == "caisson5.png"|| $detail->image == "caisson6(Haut).png"|| $detail->image == "caisson7(Haut).png"|| $detail->image == "caisson8(Haut).png"|| $detail->image == "colonne1.png"|| $detail->image == "colonne2.png")
                    <td>{{$detail->hauteur - $client->eppMat}}</td>
                    <td>{{$detail->largeur - $client->eppMat}}</td>
                    <td>{{$detail->qte}}</td>
                @endif
            </tr>
        @endforeach
        @foreach($details as $detail)
            <tr>
                <td class="bg-success">DERRIERE bas</td>
                @if($detail->image == "colonne1.png")
                    <td>{{65 - $client->eppMat}}</td>
                    <td>{{$detail->largeur - $client->eppMat}}</td>
                    <td>{{$detail->qte}}</td>
                @endif
            </tr>
        @endforeach
    </table>
</center>
<h4><a href="{{ route('client.index') }}" class="mx-5">
    <span class="material-symbols-outlined">undo</span><span>Go Back</span>
</a></h4><br><br>
@endsection
@endauth