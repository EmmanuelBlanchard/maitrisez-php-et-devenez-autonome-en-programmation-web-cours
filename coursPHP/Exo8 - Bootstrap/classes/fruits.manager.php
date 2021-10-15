<?php

require_once("classes/fruits.class.php");
require_once("classes/monPDO.class.php");
class fruitManager{
    public static function setFruitsFromDB(){
        $pdo = monPDO::getPDO();
        $stmt = $pdo->prepare("SELECT f.Nom AS Nom, f.Poids AS Poids, f.Prix AS Prix FROM fruit f");
        $stmt->execute();
        $fruits = $stmt->fetchAll();
        foreach ($fruits as $fruit){
            Fruit::$fruits[] = new Fruit($fruit['Nom'],$fruit['Poids'],$fruit['Prix']);
        }
    }

    public static function getNombreFruitsInDB(){
        $pdo = monPDO::getPDO();
        $req = "SELECT count(*) AS nombreFruits FROM fruit";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $resultat = $stmt->fetch();
        return $resultat['nombreFruits'];
    }

    public static function insertIntoDB($nom, $poids,$prix,$idPanier){
        $pdo = monPDO::getPDO();
        $req = "INSERT INTO fruit VALUES (:nom,:poids,:prix,:idPanier)";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindValue(":poids", $poids, PDO::PARAM_INT);
        $stmt->bindValue(":prix", $prix, PDO::PARAM_INT);
        $stmt->bindValue(":idPanier", $idPanier, PDO::PARAM_INT);
        try{
            return $stmt->execute();
        } catch (PDOException $e){
            echo "Erreur : ". $e->getMessage();
            return false;
        }
    }

    public static function updateFruitDB($idFruitToUpdate,$poidsFruitToUpdate,$prixFruitToUpdate){
        $pdo = monPDO::getPDO();
        $req = "UPDATE fruit SET Poids=:poids,Prix=:prix WHERE Nom = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id", $idFruitToUpdate, PDO::PARAM_STR);
        $stmt->bindValue(":poids", $poidsFruitToUpdate, PDO::PARAM_INT);
        $stmt->bindValue(":prix", $prixFruitToUpdate, PDO::PARAM_INT);
        try{
            return $stmt->execute();
        } catch (PDOException $e){
            echo "Erreur : ". $e->getMessage();
            return false;
        }
    }

    public static function deleteFruitFromPanier($idFruitToUpdate){
        $pdo = monPDO::getPDO();
        $req = "UPDATE fruit SET identifiant = null WHERE Nom = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id", $idFruitToUpdate, PDO::PARAM_STR);
        try{
            return $stmt->execute();
        } catch (PDOException $e){
            echo "Erreur : ". $e->getMessage();
            return false;
        }
    }

    public static function getPanierFromFruit($nom){
        $pdo = monPDO::getPDO();
        $req = "SELECT p.identifiant AS Client FROM fruit f INNER JOIN panier p ON f.identifiant = p.identifiant WHERE f.Nom = :nom";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
        $stmt->execute();
        $client = $stmt->fetch();
        return $client['Client'];
    }

    public static function updatePanierForFruitDB($idFruit,$idPanier){
        $pdo = monPDO::getPDO();
        $req = "UPDATE fruit SET identifiant = :idPanier WHERE Nom = :idFruit";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":idFruit", $idFruit, PDO::PARAM_STR);
        $stmt->bindValue(":idPanier", $idPanier, PDO::PARAM_INT);
        try{
            return $stmt->execute();
        } catch (PDOException $e){
            echo "Erreur : ". $e->getMessage();
            return false;
        }
    }
}
?>