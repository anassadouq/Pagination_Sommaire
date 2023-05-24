<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Detail Devis</title>
</head>
<body>
    <style>
        table, th, td{
            border: 1px solid;
            text-align: center;
        }
        #tab1{
            width: 60%;
            float:left;
        }
        #tab2{
            width: 30%;
            float:left;
            margin-left: 5%
        }
    </style>
    <center>
        <table width="100%">
            <tr style="background-color:black">
                <th colspan=2>c</th>
            </tr>
            <tr>
                <td height="5%" colspan=2>
                    <h2>DEVIS</h2>
                </td>
            </tr>
            <tr>
                @foreach ($detail_deviss as $detail_devis)
                    @if ($loop->first)
                        <td><b>{{ \Carbon\Carbon::parse($detail_devis->date_devis)->format('d/m/Y') }}</b></td>
                    @endif
                @endforeach
                <td><b>N{{ $client->num }}</b></td>
            </tr>
        </table><br>
        <table width="100%">
            <tr>
                <th style="background-color : #F0F0F0">Client</th>
            </tr>
            <tr>
                <td height="5%">
                    <b>{{ $client->nom }} {{ $client->lieu }}</b>
                </td>
            </tr>
        </table><br>
        <table width="100%" class="text-center my-3">
            <tr>
                <th width="50%">Article</th>
                <th width="10%">Qte</th>
                <th width="10%">Unite</th>
                <th width="10%">PU</th>
                <th width="20%">Prix</th>
            </tr>
            @php
                $total = 0;
            @endphp
            @foreach ($detail_deviss as $detail_devis)
                @php
                    $prix = $detail_devis->qte * $detail_devis->pu;
                    $total += $prix;
                @endphp
                <tr>
                    <td>{{ $detail_devis->article }}</td>
                    <td>{{ $detail_devis->qte }}</td>
                    <td>{{ $detail_devis->unite }}</td>
                    <td>{{ $detail_devis->pu }}</td>
                    <td>{{ $prix }}</td>
                </tr>
            @endforeach
        </table>

        <table width="100%" class="text-center my-3">
            <tr style="background-color : #F0F0F0">
                <th width="80%">TOTAL</th>
                <th>{{ $total }} DH</th>
            </tr>
        </table>
    
        <div class="row">
            <table class="col-6 text-center my-3" id="tab1">
                <tr>
                    <th>Date</th>
                    <th>Prix</th>
                    <th>Type</th>
                </tr>
                @foreach ($avances as $avance)        
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($avance->date)->format('d/m/Y') }}</td>
                        <td>{{ $avance->prix }}</td>
                        <td>{{ $avance->type }}</td>
                    </tr>
                @endforeach
            </table><br>
            
            <table class="col-2 text-center my-3 bg-info" id="tab2">
                <tr style="background-color: #ADD8E6">
                    <th>RESTE</th>
                    <th>{{ $total - $avances->sum('prix') }} DH</th>
                </tr>
            </table>
        </div>
    </center>
</body>
</html>