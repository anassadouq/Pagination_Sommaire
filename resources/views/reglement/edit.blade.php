@auth
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<form action="{{ route('reglement.update',$reglement) }}" class="container" method="post">
    <center> 
        <table>
            @csrf
            @method('PUT')
            <tr>
                <td><input type="hidden" name="id_fournisseur" value="{{ $reglement->id_fournisseur }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Num</b></td>
                <td> : <input type="text" name="num" value="{{ $reglement->num }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Montant</b></td>
                <td> : <input type="text" name="montant" value="{{ $reglement->montant }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Date</b></td>
                <td> : 
                    <input type="date" name="date" value="{{ $reglement->date }}" class="my-4">
                </td>
            </tr>
            <tr>
                <td><b>Type</b></td>
                <td> : 
                    <input type="type" name="type" value="{{ $reglement->type }}" class="my-4">
                </td>
            </tr>
            <tr>
                <td><b>Régler</b></td>
                <td> : 
                    <input type="checkbox" name="reglement" value="Oui" class="my-4">Oui
                    <input type="checkbox" name="reglement" value="Non" class="my-4">Non
                    <input type="submit" class="btn btn-secondary mx-2" value="Modifier Réglement" href="{{ route('reglement.index') }}">
                </td>
            </tr>
        </table>  
    </center>      
</form>
@endauth