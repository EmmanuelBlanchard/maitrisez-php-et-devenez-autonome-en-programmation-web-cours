<?php 

class Personnage {
    public $nom = "Luke";
    public $img = "player.png";
    public $age = 27;
    public $sexe = true;
    public $force = 5;
    public $agilite = 4;

}

    include("common/header.php");
    include("common/menu.php");

?>

<h1> Personnage : </h1>

<?php 
$personnage1 = new Personnage();
echo "Nom : " . $personnage1->nom . "<br/>";
echo "Age : " . $personnage1->age . "<br/>";

$personnage2 = new Personnage();
$personnage2->nom = "Katy";
$personnage2->age = 25;
echo "Nom : " . $personnage2->nom . "<br/>";
echo "Age : " . $personnage2->age . "<br/>";

?>

<?php 
    include("common/footer.php");
?>