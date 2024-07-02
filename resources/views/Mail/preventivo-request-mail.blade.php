<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo Messaggio Ricevuto!</title>
</head>
<body>
    <h1 style="color: red; font-weight:800;">Attenzione se la mail non ha questo carattere "*" <br> nell'ultima stringa si tratta di una mail truffa</h1>
    <h1>Nuovo Preventivo Ricevuto!</h1>
    <p>Da parte di: {{ $info['nomec'] }} </p>
    <p>Telefono: {{ $info['telefono'] }} </p>
    <p>Email: {{ $info['email'] }} </p>
    <p>Auto: {{ $info['auto'] }} </p>
    <p>Targa: {{ $info['targa'] }} </p>
    <h1>Messaggio: {{ $info['corpo'] }} </h1>
    <h1 style="color: green; font-weight: bold;">*</h1>
</body>
</html>