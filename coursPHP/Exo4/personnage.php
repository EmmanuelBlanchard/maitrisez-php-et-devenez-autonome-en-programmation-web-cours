<?php 
    require_once("classes/personnage.class.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h1> Personnage : </h1>

<?php 
$personnage1 = new Personnage("Luke","player.png",27,true,5,4);
$personnage1->afficherMesInformationsModele();

$personnage2 = new Personnage("Katy","playerF.png",22,false,3,6);
$personnage2->afficherMesInformationsModele();

$personnage3 = new Personnage("Marc","playerM.png",33,true,7,2);
$personnage3->afficherMesInformationsModele("Marc","playerM.png",33,true,7,2);

?>

<?php 
    include("common/footer.php");
?>