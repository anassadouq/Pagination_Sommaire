@auth

<html>
<head>
	<title>Details</title>
</head>
<body>
<style>
    table{
        text-align:center
    }
    .header {
    overflow: hidden;
    background-color: #f1f1f1;
    padding: 6px 10px;
    }
    .header a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
    }
    .header a.logo {
    font-size: 25px;
    font-weight: bold;
    }
    .header a:hover {
    background-color: #ddd;
    color: black;
    }
    .header a.active {
    background-color: dodgerblue;
    color: white;
    }
    .header-right {
    float: right;
    }
    @media screen and (max-width: 500px) {
    .header a {
        float: none;
        display: block;
        text-align: left;
    }
    .header-right {
        float: none;
    }
    }
</style>

<div class="header">
    <a href="{{ route('client.index')}}" class="logo">🆉🅲🅼🅶</a>
    <div class="header-right">
        <a href="{{ route('client.index')}}">Clients</a>
        <a href="#contact">Details</a>
        <a href="#about">About</a>
    </div>
</div> 
    <center>
        <table style="width:90%;text-align:center" border=1>
            <tr>
                <th>Id_Client</th>
                <th>Type</th>
                <th>Position</th>
                <th>Hauteur</th>
                <th>Largeur</th>
                <th>Profondeur</th>
                <th>Qte</th>
            </tr>
            @foreach ($details->groupBy('id_client') as $id => $groupedDetails)
            <tr>
                <td> 
                    <a href="{{ route('client.show', $id) }}">
                        {{ $id }}
                    </a>
                </td>
                <td>
                    <table style="width:100%" border="1">
                        @foreach ($groupedDetails as $detail)
                            <tr>
                                <td>{{ $detail->type }}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td>
                    <table style="width:100%" border="1">
                        @foreach ($groupedDetails as $detail)
                            <tr>
                                <td>{{ $detail->position }}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td>
                    <table style="width:100%" border="1">
                        @foreach ($groupedDetails as $detail)
                            <tr>
                                <td>{{ $detail->hauteur }}cm</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td>
                    <table style="width:100%" border="1">
                        @foreach ($groupedDetails as $detail)
                            <tr>
                                <td>{{ $detail->largeur }}cm</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td>
                    <table style="width:100%" border="1">
                        @foreach ($groupedDetails as $detail)
                            <tr>
                                <td>{{ $detail->profondeur }}cm</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td>
                    <table style="width:100%" border="1">
                        @foreach ($groupedDetails as $detail)
                            <tr>
                                <td>{{ $detail->qte }}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            @endforeach
        </table>    
    </center>
</body>
</html>
@endauth