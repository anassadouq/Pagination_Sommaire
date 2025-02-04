<html>
<head>
	<title>Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

    <div class="mx-2">
        <a href="{{route('summary.create')}}" >
            <button class="btn btn-primary my-4" style="width:85px">
                <span class="material-symbols-outlined">add</span>
            </button>
        </a>

        <a href="/generate-pdf" class="btn btn-warning mx-3">PDF</a>
        @foreach ($summaries as $summary)
            <ul>
                <li>{{ $summary->title }}</li>
                <li>{{ $summary->description }}
                    <form action="{{ route('summary.destroy', $summary->id) }}" method="POST" id="deleteForm{{ $summary->id }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('summary.edit', $summary->id) }}" class="btn btn-secondary" id="btn">Modifier</a>
                        <button type="button" class="btn btn-danger mx-3" onclick="confirmDelete('{{ $summary->id }}')" id="btn">Supprimer</button>
                    </form>
                </li>  
            </ul>
        @endforeach
    </div>
    
    <script>
        function confirmDelete(summaryId) {
            if (confirm('Êtes-vous sûr de vouloir supprimer ce summary ?')) {
                document.getElementById('deleteForm' + summaryId).submit();
            }
        }
    </script>
</body>
</html>