<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    #t{
        width: 350px;
    }
</style>
<h1 class="text-center">Update</h1>
<form action="{{ route('contrat.update',$contrat) }}" class="container" method="post">
    <center>
        <table>
            @csrf
            @method('PUT')
            <tr>
                <td><b>Nom</b></td>
                <td> : <input type="text" id="t" name="nomSociéte" value="{{ $contrat->nomSociéte }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Adresse Sociéte</b></td>
                <td> : <input type="text" id="t" name="adresseSociéte" value="{{ $contrat->adresseSociéte }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>CIN</b></td>
                <td> : <input type="date" id="t" name="dateDepart" value="{{ $contrat->dateDepart }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Tel</b></td>
                <td> : <input type="date" id="t" name="dateFinale" value="{{ $contrat->dateFinale }}" class="my-4">
                    <input type="submit" class="btn btn-secondary mx-2" value="Update" href="{{ route('contrat.index') }}">
                </td>
            </tr>
        </table>      
    </center>   
</form>