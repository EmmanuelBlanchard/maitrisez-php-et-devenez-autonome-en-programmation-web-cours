<?php 
    require_once("classes/fruits.class.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h1> Fruits : </h1>

<?php 
    $pomme1 = new Fruit(Fruit::POMME,150);
    print_r($pomme1);
?>

<?php 
    include("common/footer.php");
?>