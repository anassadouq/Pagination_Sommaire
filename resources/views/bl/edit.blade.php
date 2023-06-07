<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<form action="{{ route('bl.update', $bl->id) }}" method="POST">
    <center>
        <table>
            @csrf
            @method('PUT')
            <tr>
                <td><b>Date</b></td>
                <td> : <input type="date" name="date" value="{{ $bl->date }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Numéro</b></td>
                <input type="hidden" name="id_fournisseur" value="{{ $bl->id_fournisseur }}">
                <td> : <input type="text" name="num" value="{{ $bl->num }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Type</b></td>
                <td> : 
                    <input type="radio" name="type" value="BL" class="my-4"> BL 
                    <input type="radio" name="type" value="Facture" class="my-4">Facture
                </td>
            </tr>
            <tr>
                <td><b>TVA</b></td>
                <td> : <input type="text" name="tva" value="{{ $bl->tva }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Régler</b></td>
                <td> : 
                    <input type="radio" name="regler" value="Oui" class="my-4 mx-2">Oui
                    <input type="radio" name="regler" value="Non" class="my-4 mx-2">Non

                    <input type="submit" class="btn btn-secondary mx-2" value="Modifier" href="{{ route('bl.index') }}">
                </td>
            </tr>
        </table>
    </center>         
</form>