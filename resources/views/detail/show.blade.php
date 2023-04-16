<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    table, th, td {
  border: 1px solid black;
}
</style>
<center><h1>{{ $client->nom }} {{ $client->lieu }}</h1></center>
<table style="width:100%;text-align:center;">
    <tr>
        <th>Image</th>
        <th>position</th>
        <th>hauteur</th>
        <th>largeur</th>
        <th>profondeur</th>
        <th>qte</th>
        <th>action</th>
    </tr>
    @foreach ($details as $detail)
    <tr>
            <td><img src="/images/{{$detail->image}}" width="100px" ></td>
            <td>{{ $detail->position }}</td>
            <td>{{ $detail->hauteur }}cm</td>
            <td>{{ $detail->largeur }}cm</td>
            <td>{{ $detail->profondeur }}cm</td>
            <td>{{ $detail->qte }}</td>
            <td>
                <form action="{{ route('detail.destroy', $detail->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('detail.edit' ,$detail->id) }}" class="btn btn-secondary">update</a>
                    <button type="submit" class="btn btn-danger mx-3">delete</button> 
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br>
<a href="{{ url('/debitage/'.$client->id) }}" class="btn btn-warning mx-3">Débutage</a>
<a href="{{ url('/allDebitage/'.$client->id) }}" class="btn btn-success mx-3">Débutage Totale</a>

<br><br>

<a href="{{ route('detail.create', ['clientId' => $client->id]) }}">
    <span class="material-symbols-outlined">add_circle</span><span>Add Caisson</span>
</a><br><br>
<a href="{{ route('client.index') }}">
    <span class="material-symbols-outlined">undo</span><span>Go Back</span><br><br>
</a>