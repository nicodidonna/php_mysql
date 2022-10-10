<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci dati da form</title>
</head>
<body>
    <form action="code.php" method="POST">
        <p>
            <label for="nome" id="nome">Nome</label>
            <input type="text" name="nome" id="nome"></input>
        </p>
        <p>
            <label for="cognome" id="cognome">Cognome</label>
            <input type="text" name="cognome" id="cognome"></input>
        </p>
        <p>
            <label for="email" id="email">Email</label>
            <input type="email" name="email" id="email"></input>
        </p>
        <input type="submit" value="Invia">
    </form>
</body>
</html>