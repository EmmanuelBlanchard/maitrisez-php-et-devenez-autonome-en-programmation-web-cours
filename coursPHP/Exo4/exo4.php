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

    $paniers = [$panier1,$panier2];
    echo "<form action=\"#\" method=\"post\" >";
        echo "<label for=\"panier\">Panier : </label>";
        echo "<select name=\"panier\" id=\"panier\" onChange=\"submit()\">";
        echo "<option value=\"\"></option>";
        foreach($paniers as $panier) {
            echo "<option value=\"".$panier->getIdentifiant()."\">Panier " .$panier->getIdentifiant()."</option>";
        }
        echo "</select>";
    echo "</form>";

    if(isset($_POST["panier"])) {
        $panierAAfficher = getPanierById((int)$_POST['panier']);
        echo "<h2>Affichage du panier ".$_POST["panier"] ."</h2>";
        echo $panierAAfficher;
    }

    function getPanierById($id) {
        global $paniers;
        foreach($paniers as $panier) {
            if($panier->getIdentifiant() === $id) {
                return $panier;
            }
        }
    }
?>

<?php 
    include("common/footer.php");
?>