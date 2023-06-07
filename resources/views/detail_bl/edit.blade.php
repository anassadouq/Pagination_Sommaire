<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<form action="{{ route('detail_bl.update', $detail_bl->id) }}" method="POST">
    <center>
        <table>
            @csrf
            @method('PUT')
            <tr>
                <td><b>code</b></td>
                <td> : <input type="text" name="code" value="{{ $detail_bl->code }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>designation</b></td>
                <input type="hidden" name="id_bl" value="{{ $bl->id_bl }}">
                <input type="hidden" name="id_fournisseur" value="{{ $bl->id_fournisseur }}">

                <td><textarea name="designation" cols="60" rows="3" class="my-3">{{ $detail_bl->designation }}</textarea></td>
            </tr>
            <tr>
                <td><label>Unite</label></td>
                <td>
                    <input type="radio" name="unite" value="Unité" class="my-4 mx-1">Unité 
                    <input type="radio" name="unite" value="m2" class="mx-1">m2  
                    <input type="radio" name="unite" value="ml" class="mx-1">ml 
                    <input type="radio" name="unite" value="m3" class="mx-1">m3
                    <input type="radio" name="unite" value="Forfait" class="mx-1">Forfait
                </td>
            </tr>
            <tr>
                <td><label>Qte</label></td>
                <td><input type="text" name="qte" value="{{ $detail_bl->qte }}" class="my-3"></td>
            </tr>
            <tr>
                <td><label>PU</label></td>
                <td>
                    <input type="text" name="pu" value="{{ $detail_bl->pu }}" class="my-3">
                    <input type="submit" class="btn btn-secondary mx-2" value="Modifier Désignation" href="{{ route('fournisseur.index') }}">
                </td>
            </tr>
        </table>
    </center>         
</form>