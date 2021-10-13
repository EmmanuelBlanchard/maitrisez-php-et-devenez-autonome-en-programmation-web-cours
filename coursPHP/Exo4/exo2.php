<?php 
    require_once("classes/fruits.class.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h1> Fruits : </h1>

<?php
    $pomme1 = new Fruit(Fruit::POMME,150);
    $pomme2 = new Fruit(Fruit::POMME,130);
    $pomme3 = new Fruit(Fruit::POMME,160);
    $cerise1 = new Fruit(Fruit::CERISE,10);
    $cerise2 = new Fruit(Fruit::CERISE,15);
    $cerise3 = new Fruit(Fruit::CERISE,20);
    $cerise4 = new Fruit(Fruit::CERISE,10);
    $fruits = [$pomme1,$pomme2,$pomme3,$cerise1,$cerise2,$cerise3,$cerise4];

    foreach($fruits as $fruit){
        echo $fruit;
        echo "<br />------------------------ <br />";
    }
?>

<?php 
    include("common/footer.php");
?>