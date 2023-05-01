<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche2</title>
</head>
<body>
    <h1 style="text-align: center; text-decoration: underline">Remise d'un document de règlement de compte</h1><br>
    <div style="font-size: 20px; padding-right: 15px;">
        <p>
            Refaites cette remise pour les articles 74 et 75 du Code du travail.<br>
            En vertu de la fin du contrat de travail conclu entre :<br>
            L'employeur 
            
                <b>{{$contrat->nomSociéte}}</b>
                Adresse <b>{{$contrat->adresseSociéte}}</b><br>
            
            Carte d'identité nationale <b>{{$salarier->cin}}</b> ou son représentant .............<br>
            Et le travailleur <b>{{$salarier->nom }} {{$salarier->prenom}}</b>
            Adresse <b>{{$salarier->adresse}}</b><br>
            Carte d'identité nationale : <b>{{$salarier->cin}}</b><br>

                Date d'embauche : <b>{{ \Carbon\Carbon::parse($contrat->dateDepart)->format('d/m/Y') }}</b> <br>
                Date de départ : <b>{{ \Carbon\Carbon::parse($contrat->dateFinale)->format('d/m/Y') }}</b> <br>
            
            Le travailleur remet à son employeur ce document en vue de régler toutes les prestations et obligations qui lui sont dues.<br> 
            Ce document de règlement comprend un montant de ..................... réparti selon les éléments suivants :<br>
                    - Salaire journalier ..............<br>
            - Congés annuels ............<br>
            Ce document a été établi en deux exemplaires, l'un remis au travailleur.<br>
            <h4 style="padding-right: 15%;">Signatures</h4> 
            <p style="padding-right: 35px;">  Le travailleur ou son représentant &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            L'employeur</p>
            <br><br><br><br><br><br><br><br>
            <h5 style="margin-top: 70px;">Selon la loi, le délai de prescription est de soixante jours.</h5>
        </p>
    </div>
</body>
</html>