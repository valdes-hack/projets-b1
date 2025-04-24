<?php
$host = "localhost";//localhost pour dire que la base de donnee est sur mon ordi
$dbname = 'Gestion_notes';
$username = 'root';
$password = '';
// try permet de gerer les erreurs
//PDO permet de communiquer avec la base de donnee
try{
    $eror new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
// Active le mode exception pour détecter les erreurs
$eror->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connexion réussie à la base de données.";
//avec catch on gerer l'erreur non prise en charge par try
}catch(PDOEXCEPTION $e){
    echo "Erreur de connexion :".$e->getMessage();
    die();
}


?>