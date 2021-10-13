<?php
    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
    require_once("classes/monPDO.class.php");
    include("common/header.php");
    include("common/menu.php");  
?>

<h1> Fruits : </h1>

<?php
    $pdo = monPDO::getPDO();
    $stmt = $pdo->prepare("Select f.nom as Nom, f.poids as Poids, f.prix as Prix, p.NomClient as Client from fruit f inner join panier p on f.identifiant = p.identifiant");
    $stmt->execute();
    $fruits = $stmt->fetchAll();
    foreach ($fruits as $fruit){
        if(preg_match("/cerise/",$fruit['Nom'])){
            echo "<img src=\"sources/images/cherry.png\" alt=\"image cerise\" /><br/>";
        }
        if(preg_match("/pomme/",$fruit['Nom'])){
            echo "<img src=\"sources/images/apple.png\" alt=\"image pomme\" /><br/>";
        }
        echo "Nom : " . $fruit['Nom'] . "<br/>";
        echo "Poids : " . $fruit['Poids'] . "<br/>";
        echo "Prix : " . $fruit['Prix'] . "<br/>";
        echo "Panier de : " . $fruit['Client'] . "<br/>";
        echo "<br/>---------------------------<br/>";
    }
?>

<?php 
    include("common/footer.php");
?>