@auth
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<form action="{{ route('fournisseur.update',$fournisseur) }}" class="container" method="post">
    <center> 
        <table>
            @csrf
            @method('PUT')
            <tr>
                <td><b>Nom</b></td>
                <td> : <input type="text" name="nom" value="{{ $fournisseur->nom }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Adresse</b></td>
                <td> : <input type="text" name="adresse" value="{{ $fournisseur->adresse }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Telephone</b></td>
                <td> : 
                    <input type="text" name="tel" value="{{ $fournisseur->tel }}" class="my-4">
                    <input type="submit" class="btn btn-secondary mx-2" value="Modifier fournisseur" href="{{ route('fournisseur.index') }}">
                </td>
            </tr>
        </table>  
    </center>      
</form>
@endauth