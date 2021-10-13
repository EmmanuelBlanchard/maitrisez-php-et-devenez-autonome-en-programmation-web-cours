<?php

const HOST_NAME = "localhost";
const DB_NAME = "db_panierfruit";
const USER_NAME = "root";
const PWD = "";

try {
    $connexion = 'mysql:host='.HOST_NAME.'; dbname = '.DB_NAME;
    $monPDO = new PDO($connexion,USER_NAME,PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(PDOException $e){
    $message = "erreur de connexion à la DB". $e->getMessage();
    die($message);
}



?>