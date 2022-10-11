<!DOCTYPE html>

<html lang="it">

<head>
    <link rel="stylesheet" href="./bootstrap-italia/css/bootstrap-italia.min.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci dati da form</title>
</head>

<body>
    
<div class="container">
    
<h3>FORM DI INSERIMENTO RIGA NEL DATABASE</h3>


<form action="code.php" method="post">
    
<p>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" name="nome"></input>
        </div>
    </div>
</p>

<p>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="cognome">Cognome</label>
            <input type="text" name="cognome"></input>
        </div>
    </div>
</p>

<p>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" name="email"></input>
        </div>
    </div>
</p>

<button type="submit" class="btn btn-primary">Inserisci riga nella tabella 'persone' del database</button>

</form>

</div>

<script>
window.__PUBLIC_PATH__ = './bootstrap-italia/fonts';
</script>
<script src="./bootstrap-italia/js/bootstrap-italia.bundle.min.js"></script>

</body>
</html>