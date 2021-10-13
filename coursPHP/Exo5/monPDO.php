<?php

class monPDO{
    private const HOST_NAME = "localhost";
    private const DB_NAME = "db_panierfruit";
    private const USER_NAME = "root";
    private const PWD = "";

    private static $monPDOinstance = null;

    public static function getPDO(){
        if(is_null(self::$monPDOinstance)){
            try {
                $connexion = 'mysql:host='.HOST_NAME.';dbname='.DB_NAME;
                self::$monPDOinstance = new PDO($connexion,USER_NAME,PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch(PDOException $e){
                $message = "erreur de connexion à la DB". $e->getMessage();
                die($message);
            }
            self::$monPDOinstance->exec("SET CHARACTER SET UTF8");
        }
        return self::$monPDOinstance;
    }
}






?>