<?php
    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
    require_once("classes/monPDO.class.php");
    require_once("classes/fruits.manager.php");
    include("common/header.php");
    include("common/menu.php");  
?>

<h1> Fruits : </h1>

<?php
    fruitManager::setFruitsFromDB();

    foreach(Fruit::$fruits as $fruit){
        echo $fruit;
    }
?>

<?php 
    include("common/footer.php");
?>