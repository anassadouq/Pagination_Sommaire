@auth
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
    #t{
        width:350px;
    }
</style>
<form action="{{ route('salarier.update',$salarier) }}" class="container" method="post">
    <center> 
        <table>
            @csrf
            @method('PUT')
            <tr>
                <td><b>Sexe</b></td>
                <td> : <input type="text" id="t" name="sexe" value="{{ $salarier->sexe }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>Nom</b></td>
                <td> : <input type="text" id="t" name="nom" value="{{ $salarier->nom }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>Prenom</b></td>
                <td> : <input type="text" id="t" name="prenom" value="{{ $salarier->prenom }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>CIN</b></td>
                <td> : <input type="text" id="t" name="cin" value="{{ $salarier->cin }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>Tel</b></td>
                <td> : <input type="text" id="t" name="tel" value="{{ $salarier->tel }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>Salaire</b></td>
                <td> : <input type="text" id="t" name="salaire" value="{{ $salarier->salaire }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>Adresse</b></td>
                <td> : <input type="text" id="t" name="adresse" value="{{ $salarier->adresse }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>Date Entrée</b></td>
                <td> : <input type="date" id="t" name="dateEntree" value="{{ $salarier->dateEntree }}" class="my-3"></td> 
            </tr>
            <tr>
                <td><b>Active</b></td>
                <td>
                    : <input type="radio" name="active" value="Oui"> Oui
                    : <input type="radio" name="active" value="Non"> Non
                    <input type="submit" class="btn btn-secondary mx-2" value="Modifier Salarié" href="{{ route('salarier.index') }}">
                </td>
            </tr>
        </table> 
    </center>
</form>
@endauth