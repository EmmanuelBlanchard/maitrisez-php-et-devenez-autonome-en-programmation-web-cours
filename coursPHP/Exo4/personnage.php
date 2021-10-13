<?php 
    require_once("classes/personnage.class.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h1> Personnage : </h1>

<?php 
$personnage1 = new Personnage("Luke","player.png",27,Personnage::HOMME,Personnage::FORCE_MED,Personnage::AGILITE_MIN);
$personnage1->afficherMesInformationsModele();

$personnage2 = new Personnage("Katy","playerF.png",22,Personnage::FEMME,Personnage::FORCE_MIN,Personnage::AGILITE_MAX);
$personnage2->afficherMesInformationsModele();

$personnage3 = new Personnage("Marc","playerM.png",33,Personnage::HOMME,Personnage::FORCE_MED,Personnage::AGILITE_MED);
$personnage3->afficherMesInformationsModele();

?>

<?php 
    include("common/footer.php");
?>