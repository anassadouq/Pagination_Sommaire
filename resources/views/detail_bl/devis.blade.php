<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Detail Devis</title>
    </head>
    <body>
        <style>
            table, th, td {
                border: 1px solid;
            }
        </style>
        <center> 
            <h2>Date : {{ \Carbon\Carbon::parse($bl->date)->format('d/m/Y') }}</h2>
            <h2>Num : {{ $bl->num }}</h2>
            <div class="container">
                <table style="width:100%;text-align:center;">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Désignation</th>
                            <th>Qte</th>
                            <th>Prix Unitaire HT</th>
                            <th>Prix Total HT</th>
                        </tr>
                    </thead>
                    @php
                        $total = 0;
                    @endphp
                    <tbody>
                        @foreach ($detail_bls as $detail_bl)
                            @php
                                $prix = $detail_bl->qte * $detail_bl->pu;
                                $total += $prix;
                            @endphp
                            <tr>
                                <td>{{ $detail_bl->code }}</td>
                                <td>{{ $detail_bl->designation }}</td>
                                <td>{{ $detail_bl->qte }}</td>
                                <td>{{ $detail_bl->pu }}</td>
                                <td>{{ $detail_bl->pu * $detail_bl->qte }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table><br>
            
                <table style="width:100%;text-align:center;">
                    <tr>
                        <th>Montant Total : HT</th>
                        <th>Taux : TVA</th>
                        <th>Montant : TVA</th>
                        <th>Montant Total : TTC</th>
                    </tr>
                    <tr>
                        <td>{{ $total }}</td>
                        <td>{{ $bl->tva }}%</td>
                        <td>{{ ($total * $bl->tva)/100}}</td>
                        <td>{{ $total +(($total * $bl->tva)/100) }}</td>
                    </tr>
                </table>
            </div>
        </center>
    </body>
</html>