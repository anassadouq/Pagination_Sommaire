@auth
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<form action="{{ route('avance.update',$avance) }}" class="container" method="post">
    <center>
        <table>
            @csrf
            @method('PUT')
            <tr>
                <td><b>date</b></td>
                <td> : <input type="date" name="date" value="{{ $avance->date }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>prix</b></td>
                <td> : <input type="text" name="prix" value="{{ $avance->prix }}" class="my-3"></td>
            </tr>
            <tr>
                <td><b>type</b></td>
                <td> : <input type="text" name="type" value="{{ $avance->type }}" class="my-3"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="btn btn-secondary mx-2" value="Modifier Avance" href="{{ route('avance.index') }}">
                </td> 
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </center>         
</form>
@endauth