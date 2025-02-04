<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global</title>
</head>
<body>
    <style>
        .page-break {
            page-break-before: always;
        }
    </style>

    <h1>Summary</h1>

    @foreach ($summaries as $index => $summary)
        <div class="summary">
            <a href="#titre-{{ $summary->id }}">{{ $summary->title }}</a>
        </div>
    @endforeach
    <div class="page-break"></div>

    @foreach ($summaries as $index => $summary)
        <div id="titre-{{ $summary->id }}">
            <h3>{{ $summary->title }}</h3>
            <p>{{ $summary->description }}</p>
            @if ($index < count($summaries) - 1)
                <div class="page-break"></div>
            @endif
        </div>
    @endforeach

    <script type="text/php">
        if(isset($pdf)) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(300, 800, "$PAGE_NUM / $PAGE_COUNT", $font, 10);
            ');
        }
    </script>
</body>
</html>