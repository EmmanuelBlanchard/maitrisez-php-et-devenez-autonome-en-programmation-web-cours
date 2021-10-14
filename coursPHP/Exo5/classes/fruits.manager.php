<?php

require_once("classes/fruits.class.php");
require_once("classes/monPDO.class.php");
class fruitManager{
    public static function setFruitsFromDB(){
        $pdo = monPDO::getPDO();
        $stmt = $pdo->prepare("SELECT f.nom AS Nom, f.poids AS Poids, f.prix AS Prix, p.NomClient AS Client FROM fruit f INNER JOIN panier p ON f.identifiant = p.identifiant");
        $stmt->execute();
        $fruits = $stmt->fetchAll();
        foreach ($fruits as $fruit){
            Fruit::$fruits[] = new Fruit($fruit['Nom'],$fruit['Poids'],$fruit['Prix']);
        }
    }
}
?>