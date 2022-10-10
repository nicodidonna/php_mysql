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

$connessione->close();

?>