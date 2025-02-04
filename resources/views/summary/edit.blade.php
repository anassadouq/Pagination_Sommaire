<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<form action="{{ route('summary.update',$summary) }}" class="container" method="post">
    <center> 
        <table>
            @csrf
            @method('PUT')
            <tr>
                <td><b>Title</b></td>
                <td><input type="text" name="title" value="{{ $summary->title }}" class="my-4"></td>
            </tr>
            <tr>
                <td><b>Description</b></td>
                <td><textarea name="description" rows="10" cols="100">{{ $summary->description }}</textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-secondary mx-2 my-4" value="Update" href="{{ route('summary.index') }}"></td>
            </tr>
        </table>  
    </center>      
</form>