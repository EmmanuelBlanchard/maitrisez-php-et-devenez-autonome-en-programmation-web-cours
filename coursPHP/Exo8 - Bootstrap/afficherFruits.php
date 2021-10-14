<?php
    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
    require_once("classes/monPDO.class.php");
    require_once("classes/fruits.manager.php");
    include("common/header.php");
    include("common/menu.php");  
?>

<div class="container">

<h2> Fruits : </h2>

<?php
    fruitManager::setFruitsFromDB();
    echo '<div class="row">';
    foreach(Fruit::$fruits as $fruit){
        echo '<div class="col-2 col-sm p-2">';
            echo $fruit;
        echo '</div>'; 
    }
    echo '</div>';
?>
</div>
<?php 
    include("common/footer.php");
?>