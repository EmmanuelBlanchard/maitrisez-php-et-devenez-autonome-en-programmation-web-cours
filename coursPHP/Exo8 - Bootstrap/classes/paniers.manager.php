<?php

require_once("classes/panier.class.php");
require_once("classes/monPDO.class.php");
class panierManager{
    public static function setPaniersFromDB(){
        $pdo = monPDO::getPDO();
        $stmt = $pdo->prepare("SELECT identifiant, NomClient FROM panier");
        $stmt->execute();
        $paniers = $stmt->fetchAll();
        foreach ($paniers as $panier){
            Panier::$paniers[] = new Panier($panier['identifiant'], $panier['NomClient']);
        }
    }

    public static function getFruitPanier($identifiant){
        $pdo = monPDO::getPDO();
        $req = "SELECT f.Nom AS fruit, f.Poids AS poids, f.Prix AS prix FROM panier p INNER JOIN fruit f ON f.identifiant = p.identifiant WHERE p.identifiant = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id", $identifiant, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getNombrePaniersInDB() {
        $pdo = monPDO::getPDO();
        $req = "SELECT count(*) AS nombrePaniers FROM panier";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $resultat = $stmt->fetch();
        return $resultat['nombrePaniers'];
    }

    public static function insertIntoDB($identifiant,$nomClient){
        $pdo = monPDO::getPDO();
        $req = "INSERT INTO panier (identifiant, NomClient) VALUES (:identifiant,:nomClient)";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":identifiant", $identifiant, PDO::PARAM_INT);
        $stmt->bindValue(":nomClient", $nomClient, PDO::PARAM_STR);
        try{
            return $stmt->execute();
        } catch (PDOException $e){
            echo "Erreur : ". $e->getMessage();
            return false;
        }
    }

    public static function getPaniers(){
        $pdo = monPDO::getPDO();
        $req = "SELECT identifiant, NomClient FROM panier";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>