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
            <h1 class="my-2">{{ $fournisseur->nom }}</h1>
            <h1>{{ $fournisseur->adresse }}</h1>
            <div class="container">
                <table style="width:100%;text-align:center;">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Code</th>
                            <th>Designation</th>
                            <th>Qte</th>
                            <th>Prix Unitaire HT</th>
                            <th>Prix Total HT</th>
                        </tr>
                    </thead>
                    @php
                        $total = 0;
                    @endphp
                    <tbody>
                        @foreach ($detail_fournisseurs as $detail_fournisseur)
                            @php
                                $prix = $detail_fournisseur->qte * $detail_fournisseur->pu;
                                $total += $prix;
                            @endphp
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($detail_fournisseur->date)->format('d/m/Y') }}</td>
                                <td>{{ $detail_fournisseur->code }}</td>
                                <td>{{ $detail_fournisseur->designation }}</td>
                                <td>{{ $detail_fournisseur->qte }}</td>
                                <td>{{ $detail_fournisseur->pu }}</td>
                                <td>{{ $detail_fournisseur->pu * $detail_fournisseur->qte }}</td>
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
                        <td>20%</td>
                        <td>{{ $total * 0.2}}</td>
                        <td>{{ $total + ($total * 0.2)}}</td>
                    </tr>
                </table>
            </div>
        </center>
    </body>
</html>