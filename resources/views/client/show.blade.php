@auth

<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>{{ $client->nom }}</title>
</head>
<body>
    <style>
        b{
            font-size : 30px;
        }
        span{
            font-size : 20px;
        }
    </style>
    <center>
        <h1>{{ $client->nom }}</h1> 
    </center>
    <ul type="none">
        <li><b>Nom : </b> 
            <span>{{ $client->nom }}</span> 
        </li><br>
        <li><b>Lieu : </b> 
            <span>{{ $client->lieu }}</span> 
        </li><br>
        <li><b>Eppesseur Matiere : </b> 
            <span>{{ $client->eppMat }}cm</span> 
        </li><br>
        <li><b>Eppesseur Derriere : </b> 
            <span>{{ $client->eppDer }}cm</span> 
        </li>
    </ul>
</body>
</html>