<?php

const HOST_NAME = "localhost";
const DB_NAME = "db_panierfruit";
const USER_NAME = "root";
const PWD = "";

try {
    $connexion = 'mysql:host='.HOST_NAME.';dbname='.DB_NAME;
    $monPDO = new PDO($connexion,USER_NAME,PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(PDOException $e){
    $message = "erreur de connexion à la DB". $e->getMessage();
    die($message);
}

if($monPDO){
    $limitation = 130;
    $req = "SELECT * FROM fruit WHERE Poids > :valeur";
    $stmt = $monPDO->prepare($req);
    $stmt->bindValue(':valeur', $limitation, PDO::PARAM_INT);
    $stmt->execute();
    $res1 = $stmt->fetchAll();
    echo "<pre>";
    print_r($res1);
}


?>