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
        .page-number::after {
            content: counter(page);
        }
    </style>

    <h1>Summary</h1>

    {{-- Placeholder for Page Numbers --}}
    @foreach ($summaries as $summary)
        <div class="summary">
            <a href="#titre-{{ $summary->id }}" class="page-link" data-id="{{ $summary->id }}">
                {{ $summary->title }} (Page ?)
            </a>
        </div>
    @endforeach

    <div class="page-break"></div>

    {{-- Content --}}
    @foreach ($summaries as $summary)
        <div id="titre-{{ $summary->id }}" class="page-section">
            <h3>{{ $summary->title }} <span class="page-number"></span></h3>
            <p>{{ $summary->description }}</p>
            <div class="page-break"></div>
        </div>
    @endforeach

    {{-- Page Numbering in PDF --}}
    <script type="text/php">
        if(isset($pdf)) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(500, 800, "Page $PAGE_NUM of $PAGE_COUNT", $font, 10);
            ');
        }
    </script>

    {{-- JavaScript to Fix Page Numbers (Only Works in Browser Preview) --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let sections = document.querySelectorAll('.page-section');
            let links = document.querySelectorAll('.page-link');

            let pageCounter = 1; // Start from page 1
            sections.forEach((section, index) => {
                let id = section.getAttribute("id").split('-')[1]; // Extract summary ID
                let link = document.querySelector(`.page-link[data-id='${id}']`);
                
                // Assign the page number dynamically
                link.innerHTML = link.innerHTML.replace("Page ?", "Page " + pageCounter);
                section.querySelector(".page-number").innerText = " (Page " + pageCounter + ")";

                // Simulate a page break to approximate real page numbers
                if (index < sections.length - 1) {
                    pageCounter++;
                }
            });
        });
    </script>

</body>
</html>