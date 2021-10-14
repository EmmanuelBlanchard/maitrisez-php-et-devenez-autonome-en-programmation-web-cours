<?php
    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
    require_once("classes/monPDO.class.php");
    require_once("classes/paniers.manager.php");
    include("common/header.php");
    include("common/menu.php");  
?>

<div class="container">

<h2> Fruits : </h2>

<?php
    panierManager::setPaniersFromDB();

    foreach(Panier::$paniers as $panier){
        $panier->setFruitToPanierFromDB();
        echo $panier;
    }
?>
</div>
<?php 
    include("common/footer.php");
?>