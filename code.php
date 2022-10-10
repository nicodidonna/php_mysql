<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "test";

$connessione = new mysqli($host,$user,$password, $database);

if($connessione === false){
    die("La connessiona al db non è riuscita");
}

echo "Connessione avvenuta con successo ".$connessione->host_info ."<br>";

/*

//CRAZIONE DI UN DATABASE MYSQL TRAMITE PHP

$query_creazione_db ="CREATE DATABASE db_creato";
if($connessione->query($query_creazione) == true){
    echo "Database creato con successo";
}else{
    echo "Errore creazione database: ".$connessione->error;
}

*/

/*

//CREAZIONE DI UNA NUOVA TABELLA IN UN DATABASE MYSQL TRAMITE PHP

$query_creazione_tabella = "CREATE TABLE persone(
    id_persona INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
    )";

if($connessione->query($query_creazione_tabella) == true){
    echo "Tabella creata con successo!";
}else{
    echo "Errore durante creazione tabella: ".$connessione->error;
}

*/

/*

//INSERT DI UNA RIGA IN UNA TABELLA TRAMIT PHP

$query_insert = "INSERT INTO persone (nome, cognome, email)
 VALUES 
 ('Luca','Rossi','luca.rossi@gmail.com'), 
 ('Marco','Neri','marco.neri@gmail.com'), 
 ('Anna','Verdi','anna.verdi@gmail.com'),
 ('Paolo','Gialli','paolo.gialli@gmail.com'), 
 ('Susanna','Bianchi','susanna.bianchi@gmail.com')";

if($connessione->query($query_insert) == true){
    echo "Persona/e inserita/e con successo";
}else{
    echo "Errore durante l'inserimento ".$connessione->error;
}

*/

/*

//INSERIRE DATI IN TABELLA TRAMITE FORM HTML

$nome = $connessione->real_escape_string($_POST['nome']);
$cognome = $connessione->real_escape_string($_POST['cognome']);
$email = $connessione->real_escape_string($_POST['email']);

$query_insert2 = "INSERT INTO persone (nome, cognome, email)
 VALUES 
 ('$nome','$cognome','$email')";

 if($connessione->query($query_insert2) == true){
    $ultimo_elemento = $connessione->insert_id;
    echo "Persona/e inserita/e con successo, il suo ID è: ". $ultimo_elemento;
}else{
    echo "Errore durante l'inserimento".$connessione->error;
}

*/

/*

//PREPARED:
//2 FASI: PREPARE E EXECUTE
//PREPARE: lo statement viene mandato al server che fa controllo sintassi e ottimizzazione query salvandola per dopo
//EXECUTE: vengono mandati i valori, ripreso lo statement ed eseguito
//Vantaggi: per lo statement eseguito ripetute volte con valori differenti. E' più veloce perche è parsato una volta sola, ottimo contro sql injection perhè i valori sono inviati direttamente al db con un protocollo diverso e sicuro.

$sql_query = "INSERT INTO persone (nome, cognome, email) VALUES (? , ?, ?)";

if($statement = $connessione->prepare($sql_query)){
    $statement->bind_param("sss", $nome, $cognome, $email);

    $nome = "Leopoldo";
    $cognome = "Mare";
    $email = "leopoldo.mare@gmail.com";
    $statement->execute();

    $nome = "Leonardo";
    $cognome = "Moni";
    $email = "leonardo.moni@gmail.com";
    $statement->execute();

    echo "Record inseriti con successo!";
}else{
    echo "Errore: non è possibile eseguire la query: $sql ".  $connessione->error;
}

$statement->close();

*/

/*

//SELEZIONARE DATI CON SELECT - CONDIZIONI OR / AND , LIMIT, ORDER BY - (SQL)

$query_select = "SELECT * FROM persone ORDER BY id_persona ASC";

if($risultato = $connessione->query($query_select)){
    if($risultato->num_rows > 0){
        echo "<table>
        <tr>
        <th>Id_persona</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Email</th>
        </tr>
        ";
        while($row = $risultato->fetch_array()){
            echo "
            <tr>
            <td>" . $row['id_persona'] . "</td>
            <td>" . $row['nome'] . "</td>
            <td>" . $row['cognome'] . "</td>
            <td>" . $row['email'] . "</td>
            </tr>
            ";
        }
        echo "</table>";
    }else{
        echo "Non ci sono righe per questa query";
    }
}else{
    echo "Errore: impossibile eseguire la query $query_select ".$connessione->error;
}

*/


$connessione->close();

?>