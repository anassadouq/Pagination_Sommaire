<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <style>
        body{
            max-width: 1200px; /* ou toute autre valeur souhaitée */
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
            font-size: 18px;
        }
    </style>
    <center><h1>Reçu pour solde de tout compte</h1></center> 
    <p>Je soussigné(e) {{$salarier->sexe }} <b>{{$salarier->nom }} {{$salarier->prenom}}</b>, titulaire de la carte d'identité nationale : <b>{{$salarier->cin}}</b>, demeurant <b>{{$salarier->adresse}}</b>, 
        employé(e) par <b>ste {{$contrat->nomSociéte}}</b> situé à <b>{{$contrat->adresseSociéte}}.</b> 
    </p>
    <p>Reconnais avoir reçu de mon employeur, la Société <b>{{$contrat->nomSociéte}}</b>, pour solde de tout compte la somme nette de …………………………………..</p>
    <p>Cette somme m'est versée, pour solde de tout compte, en paiement des éléments suivants :</p>
    <p>Salaire du mois ....................................</p>
    <p>Congés annuels .....................................</p>
    <p>Autres .............................................</p>
    <p>Ces sommes représentent tout ce qui m'est dû à quelque titre que ce soit, en paiement des salaires, accessoires de salaires et 
        indemnités diverses, quel qu'en soit le montant et la nature, au titre de l'exécution et de la cessation de mon contrat de travail.
    </p>
    <p>Je reconnais que, du fait de ces versements, tout compte entre mon employeur et moi-même se trouve entièrement et définitivement 
        apuré et réglé.
    </p>
    <p>Selon le code du travail, je peux dénoncer le présent reçu dans les 60 jours à compter de ce jour.</p>
    <p>Le présent reçu pour solde de tout compte a été établi en deux exemplaires dont un m'a été remis.</p>
    <p>Fait à ……………………………..  , le ………………………………………….. </p>
    <p>{{$salarier->sexe }} <b>{{$salarier->nom }} {{$salarier->prenom}}</b>, titulaire de la carte d'identité nationale : <b>{{$salarier->cin}}</b>,</p>
    <p>« Bon pour solde de tout compte » </p>
    <center><p>Signature</p></center>
</body>
</html>