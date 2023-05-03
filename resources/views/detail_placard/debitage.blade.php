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
<center><h1 class="my-2">{{ $placard->nom }} {{ $placard->lieu }}</h1></center>

@foreach($detail_placards as $detail_placard)
    @if($detail_placard->image == "coulisse1.png")
        <div class="row my-4 mx-3">
            <div class="col-8">
                <table style="width:100%">
                    <tr>
                        <th colspan=4>{{$detail_placard->appartement}}</th>
                    </tr>
                    <tr>
                        <th>H</th>
                        <th>L</th>
                        <th>P</th>
                        <th>QTE</th>
                    </tr>
                    <tr>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur}}</td>
                        <td class="bg-success text-light">{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MNT COLIS</td>
                        <td>{{$detail_placard->hauteur - $placard->eppMat - $placard->eppMat}}</td>
                        <td>{{$detail_placard->profondeur -1}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>TRV</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur - 1}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>SPR VIR</td>
                        <td>{{$detail_placard->hauteur - 45}}</td>
                        <td>{{$detail_placard->profondeur - 10}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>SPR HOR</td>
                        <td>{{$detail_placard->largeur - $placard->eppMat - $placard->eppMat}}</td>
                        <td>{{$detail_placard->profondeur - 10}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>ETAGER</td>
                        <td>{{(($detail_placard->largeur - $placard->eppMat - $placard->eppMat - 1.9) /2) - 0.1}}</td>
                        <td>{{$detail_placard->profondeur - 10-0.5}}</td>
                        <td>{{$detail_placard->qte *4}}</td>
                    </tr>
                    <tr>
                        <td>PORTE COLIS</td>
                        <td>{{$detail_placard->hauteur - 3.8 - 4}}</td>
                        <td>{{($detail_placard->largeur - 3.8 - 6) /2}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA MNT</td>
                        <td>{{$detail_placard->hauteur + 13}}</td>
                        <td>8</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV HAUT</td>
                        <td>12</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV BAS</td>
                        <td>8</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="bg-warning">DERRIER</td>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <img src="/images/{{$detail_placard->image}}" class="mx-5" width="60%" height="80%">
            </div>
        </div><br>
    @endif
@endforeach


@foreach($detail_placards as $detail_placard)
    @if($detail_placard->image == "coulisse2.png")
        <div class="row my-4 mx-3">
            <div class="col-8">
                <table style="width:100%">
                    <tr>
                        <th colspan=4>ETAGE 2</th>
                    </tr>
                    <tr>
                        <th>H</th>
                        <th>L</th>
                        <th>P</th>
                        <th>QTE</th>
                    </tr>
                    <tr>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur}}</td>
                        <td class="bg-success text-light">{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MNT</td>
                        <td>{{$detail_placard->hauteur - $placard->eppMat - $placard->eppMat}}</td>
                        <td>{{$detail_placard->profondeur -1}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>MNT BANDA</td>
                        <td>{{$detail_placard->hauteur - $placard->eppMat - $placard->eppMat}}</td>
                        <td>{{$detail_placard->profondeur -1}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>TRV</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur - 1}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>SPR VIR</td>
                        <td>{{$detail_placard->hauteur - 45}}</td>
                        <td>{{$detail_placard->profondeur - 10}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>SPR HOR</td>
                        <td>{{$detail_placard->largeur - $placard->eppMat - $placard->eppMat}}</td>
                        <td>{{$detail_placard->profondeur - 10}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>ETAGER</td>
                        <td>{{(($detail_placard->largeur - $placard->eppMat - $placard->eppMat - 1.9) /2) - 0.1}}</td>
                        <td>{{$detail_placard->profondeur - 10-0.5}}</td>
                        <td>{{$detail_placard->qte *4}}</td>
                    </tr>
                    <tr>
                        <td>PORTE COLIS</td>
                        <td>{{$detail_placard->hauteur - 3.8 - 4}}</td>
                        <td>{{($detail_placard->largeur - 3.8 - 6) /2}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA MNT</td>
                        <td>{{$detail_placard->hauteur + 13}}</td>
                        <td>8</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV HAUT</td>
                        <td>12</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV BAS</td>
                        <td>8</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td class="bg-warning">DERRIER</td>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <img src="/images/{{$detail_placard->image}}" class="mx-5" width="60%" height="80%">
            </div>
        </div><br>
    @endif
@endforeach


@foreach($detail_placards as $detail_placard)
    @if($detail_placard->image == "pl_colis_2_porte.png")
        <div class="row my-4 mx-3">
            <div class="col-8">
                <table style="width:100%">
                    <tr>
                        <th colspan=4>{{$detail_placard->appartement}}</th>
                    </tr>
                    <tr>
                        <th>H</th>
                        <th>L</th>
                        <th>P</th>
                        <th>QTE</th>
                    </tr>
                    <tr>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur}}</td>
                        <td class="bg-success text-light">{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MNT</td>
                        <td>{{$detail_placard->hauteur - 3.6}}</td>
                        <td>{{$detail_placard->profondeur -1}}</td>
                        <td>{{$detail_placard->qte*2}}</td>
                    </tr>
                    <tr>
                        <td>TRV</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur - 1}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>SEP</td>
                        <td>{{$detail_placard->hauteur - 3.6}}</td>
                        <td>{{$detail_placard->profondeur - 10}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>ETAGER</td>
                        <td>{{(($detail_placard->largeur - 3.6 - 1.8 - 0.2) /2)}}</td>
                        <td>{{$detail_placard->profondeur - 10 - 0.5}}</td>
                        <td>{{$detail_placard->qte *5}}</td>
                    </tr>
                    <tr>
                        <td>PORTE</td>
                        <td>{{($detail_placard->largeur -3.6-6)/2}}</td>
                        <td>{{$detail_placard->hauteur - 3.6 - 4}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA MNT</td>
                        <td>8</td>
                        <td>{{$detail_placard->hauteur +17}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV HAUT</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>12</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV BAS</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>8</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td class="bg-warning">DERRIER 8mm</td>
                        <td>{{($detail_placard->largeur) /2}}</td>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <img src="/images/{{$detail_placard->image}}" class="mx-5" width="60%" height="80%">
            </div>
        </div><br>
    @endif
@endforeach


@foreach($detail_placards as $detail_placard)
    @if($detail_placard->image == "pl_colis_4_porte.png")
        <div class="row my-4 mx-3">
            <div class="col-8">
                <table style="width:100%">
                    <tr>
                        <th colspan=4>{{$detail_placard->appartement}}</th>
                    </tr>
                    <tr>
                        <th>H</th>
                        <th>L</th>
                        <th>P</th>
                        <th>QTE</th>
                    </tr>
                    <tr>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur}}</td>
                        <td class="bg-success text-light">{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MNT</td>
                        <td>{{$detail_placard->hauteur - 1.8 - 1.8}}</td>
                        <td>{{$detail_placard->profondeur -1}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>MNT BANDA</td>
                        <td>{{$detail_placard->hauteur - 1.8 - 1.8}}</td>
                        <td>{{$detail_placard->profondeur -1}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>TRV</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur - 1}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>SPR VIR</td>
                        <td>{{$detail_placard->hauteur - 1.8 - 1.8}}</td>
                        <td>{{$detail_placard->profondeur - 10}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>ETAGER</td>
                        <td>{{((($detail_placard->largeur - 1.8 - 1.8 - 1.8) /2) -0.1)}}</td>
                        <td>{{((($detail_placard->profondeur - 1.8 - 1.8 - 1.8) /2) -0.1)}}</td>
                        <td>{{$detail_placard->qte *5}}</td>
                    </tr>
                    <tr>
                        <td>PORTE</td>
                        <td>{{($detail_placard->largeur - 3.8 - 5.5)/2}}</td>
                        <td>{{$detail_placard->hauteur - 3.6 - 4}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA MNT</td>
                        <td>8</td>
                        <td>209,5</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV HAUT</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>12</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV BAS</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>8</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td class="bg-warning">DERRIER 8mm</td>
                        <td>{{($detail_placard->largeur) /2}}</td>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <img src="/images/{{$detail_placard->image}}" class="mx-5" width="60%" height="80%">
            </div>
        </div><br>
    @endif
@endforeach


@foreach($detail_placards as $detail_placard)
    @if($detail_placard->image == "pl_ouvr_1_p.png")
        <div class="row my-4 mx-3">
            <div class="col-8">
                <table style="width:100%">
                    <tr>
                        <th colspan=4>{{$detail_placard->appartement}}</th>
                    </tr>
                    <tr>
                        <th>H</th>
                        <th>L</th>
                        <th>P</th>
                        <th>QTE</th>
                    </tr>
                    <tr>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur}}</td>
                        <td class="bg-success text-light">{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MNT OUVR</td>
                        <td>{{$detail_placard->hauteur - 3.6}}</td>
                        <td>{{$detail_placard->profondeur -1}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>TRV OUVR</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur - 1}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>ETAGER</td>
                        <td>{{$detail_placard->largeur - 3.6 - 0.1}}</td>
                        <td>{{$detail_placard->profondeur - 1 - 0.5}}</td>
                        <td>{{$detail_placard->qte *4}}</td>
                    </tr>
                    <tr>
                        <td>PORTE OUVR</td>
                        <td>{{$detail_placard->largeur - 0.8}}</td>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA MNT</td>
                        <td>8</td>
                        <td>{{$detail_placard->hauteur +18}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>8</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td class="bg-warning">DERRIER 8mm</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <img src="/images/{{$detail_placard->image}}" class="mx-5" width="60%" height="80%">
            </div>
        </div><br>
    @endif
@endforeach


@foreach($detail_placards as $detail_placard)
    @if($detail_placard->image == "pl_ouvr_2_p.png")
        <div class="row my-4 mx-3">
            <div class="col-8">
                <table style="width:100%">
                    <tr>
                        <th colspan=4>{{$detail_placard->appartement}}</th>
                    </tr>
                    <tr>
                        <th>H</th>
                        <th>L</th>
                        <th>P</th>
                        <th>QTE</th>
                    </tr>
                    <tr>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur}}</td>
                        <td class="bg-success text-light">{{$detail_placard->qte}}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MNT OUVR</td>
                        <td>{{$detail_placard->hauteur - 3.6}}</td>
                        <td>{{$detail_placard->profondeur -1}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>TRV OUVR</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->profondeur - 1}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>ETAGER</td>
                        <td>{{$detail_placard->largeur - 3.6 - 0.1}}</td>
                        <td>{{$detail_placard->profondeur - 1 - 0.5}}</td>
                        <td>{{$detail_placard->qte *4}}</td>
                    </tr>
                    <tr>
                        <td>PORTE OUVR</td>
                        <td>{{($detail_placard->largeur - 0.8) /2}}</td>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA MNT</td>
                        <td>8</td>
                        <td>{{$detail_placard->hauteur +18}}</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td>CHAMBRA TRV</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>8</td>
                        <td>{{$detail_placard->qte *2}}</td>
                    </tr>
                    <tr>
                        <td class="bg-warning">DERRIER 8mm</td>
                        <td>{{$detail_placard->largeur}}</td>
                        <td>{{$detail_placard->hauteur}}</td>
                        <td>{{$detail_placard->qte}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <img src="/images/{{$detail_placard->image}}" class="mx-5" width="60%" height="80%">
            </div>
        </div><br>
    @endif
@endforeach

<h4><a href="{{ route('placard.index') }}" class="mx-3">
    <span class="material-symbols-outlined">undo</span><span>Go Back</span>
</a><br><br></h4>
@endsection
@endauth