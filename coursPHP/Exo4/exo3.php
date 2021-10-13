<?php 
    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
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

    $panier1 = new Panier();
    $panier1->addFruit($pomme1);
    $panier1->addFruit($pomme2);
    $panier1->addFruit($cerise1);

    $panier2 = new Panier();
    $panier2->addFruit($pomme3);
    $panier2->addFruit($cerise2);
    $panier2->addFruit($cerise3);
    $panier2->addFruit($cerise4);

    echo $panier1;
    echo $panier2;
?>

<?php 
    include("common/footer.php");
?>