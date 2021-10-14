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
        $req = "SELECT f.nom AS fruit, f.poids AS poids, f.prix AS prix FROM panier p INNER JOIN fruit f ON f.identifiant = p.identifiant WHERE p.identifiant = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id", $identifiant, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getNombrePanierInDB() {
        $pdo = monPDO::getPDO();
        $req = "SELECT COUNT(*) AS nombrePanier FROM panier";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $resultat = $stmt->fetch();
        return $resultat['nombrePanier'];
    }
}
?>