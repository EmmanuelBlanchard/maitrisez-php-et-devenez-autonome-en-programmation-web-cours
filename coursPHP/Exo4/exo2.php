<?php 
    require_once("classes/fruits.class.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h1> Fruits : </h1>

<?php 
$fruit1 = new Fruit(Fruit::POMME,Fruit::POMME_IMAGE,150,Fruit::POMME_PRIX);
$fruit2 = new Fruit(Fruit::POMME,Fruit::POMME_IMAGE,130,Fruit::POMME_PRIX);
$fruit3 = new Fruit(Fruit::POMME,Fruit::POMME_IMAGE,140,Fruit::POMME_PRIX);
$fruit4 = new Fruit(Fruit::POMME,Fruit::POMME_IMAGE,145,Fruit::POMME_PRIX);

$fruit5 = new Fruit(Fruit::CERISE,Fruit::CERISE_IMAGE,20,Fruit::CERISE_PRIX);
$fruit6 = new Fruit(Fruit::CERISE,Fruit::CERISE_IMAGE,35,Fruit::CERISE_PRIX);
$fruit7 = new Fruit(Fruit::CERISE,Fruit::CERISE_IMAGE,25,Fruit::CERISE_PRIX);
$fruit8 = new Fruit(Fruit::CERISE,Fruit::CERISE_IMAGE,25,Fruit::CERISE_PRIX);
$fruit9 = new Fruit(Fruit::CERISE,Fruit::CERISE_IMAGE,25,Fruit::CERISE_PRIX);

$fruits = Fruit::getListeFruit();

foreach($fruits as $fruit) {
    $fruit->afficherMesInformationsModele();
    echo "<br/>------------------------<br/>";
}

?>

<?php 
    include("common/footer.php");
?>