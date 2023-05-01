<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center; text-decoration: underline;">Contrat de travail à durée déterminée</h2><br>
    <div style="font-size: 13px; padding-right: 1(3)px;">
        <p>
            Conformément aux dispositions de l'article 16 du Code du travail, le présent contrat est conclu et signé par les parties ci-dessous :
            <br><br> 
            La société  <b>{{$contrat->nomSociéte}}</b> , dont le siège social est situé à <b>{{$contrat->adresseSociéte}}</b>,
            <br><br> 
            Et {{$salarier->sexe }}.<b>{{$salarier->nom }} {{$salarier->prenom}}</b>  titulaire de la carte d'identité nationale n°<b>{{$salarier->cin}}</b>  résidant à <b>{{$salarier->adresse}}</b> 
            
            <br> 
            <h4 style="text-decoration: underline">Il a été convenu de ce qui suit :</h4> 
            {{$salarier->sexe }}.<b>{{$salarier->nom }} {{$salarier->prenom}}</b>  travaille pour la société 
            
                <b>{{$contrat->nomSociéte}}</b> 
                dont le siège social est situé à <b>{{$contrat->adresseSociéte}}</b>,
                <br><br>
                - Ce contrat a été conclu et exécuté en raison de l'augmentation de l'activité de la société.
                <br><br>- La durée de ce contrat s'étend sur une période allant du <b>{{ \Carbon\Carbon::parse($contrat->dateDepart)->format('d/m/Y') }}</b>
                 au <b>{{ \Carbon\Carbon::parse($contrat->dateFinale)->format('d/m/Y') }}</b> 
                 <br><br>   y compris une période d'essai de ............. jours.
            <br><br>- La tâche de l'employé(e) consiste à réaliser les tâches suivantes :<br><br>
            ..................................................................................................................<br><br>
            - Le salaire mensuel de l'employé(e) pendant la durée du contrat est de ................. dirhams.
            <br><br>- À la fin de la durée du contrat, l'employé(e) bénéficiera d'un congé annuel conformément aux dispositions du Code du travail.
            <h4 style="text-decoration: underline">Ce contrat sera résilié dans les cas suivants :</h4>
            - A l'expiration de son terme.
            <br><br>- En cas de non-respect par l'employé(e) des tâches qui lui sont assignées .
            <br><br>- En cas de commission par l'employé(e) d'une faute grave telle que spécifiée dans le Code du travail.
            <br><br>- Dans ces cas, l'employé(e) ne pourra prétendre à aucune indemnité de quelque nature que ce soit.
            <br><br>- L'une ou l'autre des parties peut mettre fin à ce contrat à tout moment, moyennant le respect d'un préavis tel que prévu par le Code du travail.
            <br><br> 
            <p style="text-align: center;">Fait à .......................... le ...............................</p>
            <br><br> 
            <p style="text-align: center;"> L'employeur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; l'employé(e) </p>  
        </p>
    </div>
</body>
</html>