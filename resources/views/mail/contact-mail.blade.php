<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Grazie per averci contattato!</h1>
    <h2>Risponderemo il prima possibile.</h2>
    
    <h3>Ecco un riepilogo dei tuoi dati:</h3>
    <ul>
        <li>Nome e Cognome: {{$user_data['name']}}</li>
        <li>Email: {{$user_data['email']}}</li>
        <li>Messaggio {{$user_data['user_message']}}:</li>
    </ul>
    
    <p>Se non hai fatto mai richiesta, ignora questa mail.</p>

    
</body>
</html>