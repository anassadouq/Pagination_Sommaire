@auth

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<form action="{{ route('detail_fournisseur.update', $detail_fournisseur->id) }}" method="POST">
    <center>
        <table>
            @csrf
            @method('PUT')
            <tr>
                <td><b>code</b></td>
                <td> : <input type="text" name="code" value="{{ $detail_fournisseur->code }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>designation</b></td>
                <input type="hidden" name="id_fournisseur" value="{{ $detail_fournisseur->id_fournisseur }}">
                <td><textarea name="designation" cols="60" rows="3" class="my-3">{{ $detail_fournisseur->designation }}</textarea></td>
            </tr>
            <tr>
                <td><b>qte</b></td>
                <td> : <input type="text" name="qte" value="{{ $detail_fournisseur->qte }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>pu</b></td>
                <td> : <input type="text" name="pu" value="{{ $detail_fournisseur->pu }}" class="my-3"></td> 
            </tr>
            <tr>
                <td><b>date</b></td>
                <td> : 
                    <input type="date" name="date" value="{{ $detail_fournisseur->date }}" class="my-3">
                    <input type="submit" class="btn btn-secondary mx-2" value="Modifier Article" href="{{ route('detail_fournisseur.index') }}">
                </td> 
            </tr>
        </table>
    </center>         
</form>
@endauth