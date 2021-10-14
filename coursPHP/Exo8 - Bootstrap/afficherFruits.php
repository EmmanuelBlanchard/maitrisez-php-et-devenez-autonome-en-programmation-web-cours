<?php
    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
    require_once("classes/monPDO.class.php");
    require_once("classes/fruits.manager.php");
    include("common/header.php");
    include("common/menu.php");  
?>

<div class="container">
<h2 class="persoBackgroundColorBlueLight text-white p-2 mt-2 rounded-lg border border-dark"> Fruits : </h2>

<?php
    fruitManager::setFruitsFromDB();
    echo '<div class="row mx-auto">';
    foreach(Fruit::$fruits as $fruit){
        echo '<div class="col-sm p-2">';
            echo $fruit->afficherListeFruit();
        echo '</div>'; 
    }
    echo '</div>';
?>
</div>
<?php 
    include("common/footer.php");
?>