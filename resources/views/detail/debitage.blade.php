<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<style>
    table, th, td {
        border: 1px solid black;
        text-align:center;
    }
</style>
<center><h1 class="my-2">{{ $client->nom }} {{ $client->lieu }}</h1></center>

@foreach($details as $detail)
@if($detail->image == "caisson1.png")

<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
                <td colspan=4><b>{{$detail->position}}</b></td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV bas</td>
                <td>{{$detail->largeur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr>
                <td>REGLA</td>
                <td>{{$detail->largeur - $client->eppMat - $client->eppMat}}</td>
                <td>*</td>
                <td>8</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5" width="60%" height="80%">
    </div>
</div>
@endif
@endforeach


@foreach($details as $detail)
@if($detail->image == "caisson2.png")

<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
                <td colspan=4><b>{{$detail->position}}</b></td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur - $client->eppMat - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV</td>
                <td>{{$detail->largeur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>ETAGER</td>
                <td>{{$detail->largeur - $client->eppMat - $client->eppMat - 0.1}}</td>
                <td>*</td>
                <td>{{$detail->profondeur - 2 -  $client->eppDer - 0.5}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr>
                <td>DERRIERE</td>
                <td>{{$detail->hauteur - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->largeur - $client->eppMat}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5" width="60%" height="80%">
    </div>
</div>
@endif
@endforeach


@foreach($details as $detail)
@if($detail->image == "caisson3.png")
<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
                <td colspan=4><b>{{$detail->position}}</b></td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur - $client->eppMat - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV</td>
                <td>{{$detail->largeur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>DERRIERE</td>
                <td>{{$detail->hauteur - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->largeur - $client->eppMat}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5" width="60%" height="80%">
    </div>
</div>
@endif
@endforeach


@foreach($details as $detail)
@if($detail->image == "caisson4.png")
<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
                <td colspan=4><b>{{$detail->position}}</b></td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV</td>
                <td>{{$detail->largeur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr>
                <td>REGLA</td>
                <td>{{$detail->largeur - ($client->eppMat)}}</td>
                <td>*</td>
                <td>8</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>DERRIER</td>
                <td>{{$detail->hauteur - ($client->eppMat)}}</td>
                <td>*</td>
                <td>{{$detail->largeur - ($client->eppMat)}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5" width="60%" height="80%">
    </div>
</div>
@endif
@endforeach


@foreach($details as $detail)
@if($detail->image == "caisson5.png")
<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
                <td colspan=4><b>{{$detail->position}}</b></td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV</td>
                <td>{{$detail->largeur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte * 2}}</td>
            </tr>
            <tr>
                <td>ETAGERS</td>
                <td>{{$detail->largeur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur-2-$client->eppDer-0.5}}</td>
                <td>=</td>
                <td>{{$detail->qte * 2}}</td>
            </tr>
            <tr>
                <td>DERRIERE</td>
                <td>{{$detail->hauteur - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->largeur - $client->eppMat}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5" width="60%" height="80%">
    </div>
</div>
@endif
@endforeach


@foreach($details as $detail)
@if($detail->image == "caisson6(Haut).png")
<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
                <td colspan=4><b>{{$detail->position}}</b></td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV</td>
                <td>{{$detail->largeur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte * 2}}</td>
            </tr>
            <tr>
                <td>ETAGERS</td>
                <td>{{$detail->largeur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur-2-$client->eppDer-0.5}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr>
                <td>DERRIERE</td>
                <td>{{$detail->hauteur - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->largeur - $client->eppMat}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5" width="60%" height="80%">
    </div>
</div>
@endif
@endforeach


@foreach($details as $detail)
@if($detail->image == "caisson7(Haut).png")
<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
                <td colspan=4><b>{{$detail->position}}</b></td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV</td>
                <td>{{$detail->largeur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte * 2}}</td>
            </tr>
            <tr>
                <td>DERRIERE</td>
                <td>{{$detail->hauteur - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->largeur - $client->eppMat}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5" width="60%" height="80%">
    </div>
</div>
@endif
@endforeach


@foreach($details as $detail)
@if($detail->image == "caisson8(Haut).png")
<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
                <td colspan=4><b>{{$detail->position}}</b></td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV</td>
                <td>{{$detail->largeur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte * 2}}</td>
            </tr>
            <tr>
                <td>ETAGERS</td>
                <td>{{$detail->largeur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur-2-$client->eppDer-0.5}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>DERRIERE</td>
                <td>{{$detail->hauteur - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->largeur - $client->eppMat}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5" width="60%" height="80%">
    </div>
</div>
@endif
@endforeach


@foreach($details as $detail)
@if($detail->image == "colonne1.png")
<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV</td>
                <td>{{$detail->largeur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte * 2}}</td>
            </tr>
            <tr>
                <td>ETAGERS FIX</td>
                <td>{{$detail->largeur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>ETAGERS</td>
                <td>{{$detail->largeur - ($client->eppMat *2) -0.1}}</td>
                <td>*</td>
                <td>{{$detail->profondeur -3}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>DERRIERE bas </td>
                <td>{{65 - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->largeur - $client->eppMat}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5">
    </div>
</div>
@endif
@endforeach


@foreach($details as $detail)
@if($detail->image == "colonne2.png")
<div class="row my-4 mx-3">
    <div class="col-8">
        <table style="width:100%">
            <tr>
                <td>EPP PLACAG</td>
                <td>0,08</td>
            </tr>
            <tr>
                <td class="bg-warning">EPP MATIER</td>
                <td class="bg-warning">{{$client->eppMat}}</td>
            </tr>
            <tr>
                <td class="bg-success text-light">EPP DOS</td>
                <td class="bg-success text-light">{{$client->eppDer}}</td>
                <td>H</td>
                <td>L</td>
                <td>P</td>
                <td>QTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>{{$detail->hauteur}}</td>
                <td>{{$detail->largeur}}</td>
                <td>{{$detail->profondeur}}</td>
                <td>{{$detail->qte}}</td>
            </tr>
            <tr></tr>
            <tr>
                <td>MNT</td>
                <td>{{$detail->hauteur - $client->eppMat *2}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte *2}}</td>
            </tr>
            <tr>
                <td>TRAV</td>
                <td>{{$detail->largeur}}</td>
                <td>*</td>
                <td>{{$detail->profondeur}}</td>
                <td>=</td>
                <td>{{$detail->qte * 2}}</td>
            </tr>
            <tr>
                <td>ETAGERS</td>
                <td>{{$detail->largeur - ($client->eppMat *2) -0.1}}</td>
                <td>*</td>
                <td>{{$detail->largeur -2 - $client->eppDer -0.5}}</td>
                <td>=</td>
                <td>{{$detail->qte *3}}</td>
            </tr>
            <tr>
                <td>DERRIERE</td>
                <td>{{$detail->hauteur - $client->eppMat}}</td>
                <td>*</td>
                <td>{{$detail->largeur - $client->eppMat}}</td>
                <td>=</td>
                <td>{{$detail->qte}}</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <img src="/images/{{$detail->image}}" class="mx-5">
    </div>
</div>
@endif
@endforeach

<h4><a href="{{ route('client.index') }}" class="mx-3">
    <span class="material-symbols-outlined">undo</span><span>Go Back</span>
</a><br><br></h4>