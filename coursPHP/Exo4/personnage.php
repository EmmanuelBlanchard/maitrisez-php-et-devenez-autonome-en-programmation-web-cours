<?php 

class Personnage {
    public $nom = "Luke";
    public $img = "player.png";
    public $age = 27;
    public $sexe = true;
    public $force = 5;
    public $agilite = 4;

    public function afficherMesInformations() {
        echo "<b>Nom : </b>" . $this->nom . "<br/>";
        echo "<b>Age : </b>" . $this->age . "<br/>";
        echo "<b>Sexe : </b>";
        if($this->sexe) {
            echo "Homme <br/>";
        } else {
            echo "Femme <br/>";
        }
        echo "<b>Force : </b>" . $this->force . "<br/>";
        echo "<b>Agilité : </b>" . $this->agilite . "<br/>";
        echo "<br/>------------------------<br/>";
    }

    public function afficherMesInformationsModele() {
        echo "<div class=\"gauche\">";
            echo "<img src=\"sources/images/".$this->img."\" alt=\"".$this->img."\" />";
        echo "</div>";
        echo "<div class=\"gauche\">";
        $this->afficherMesInformations();
        echo "</div>";
        echo "<div class=\"clearBoth\"></div>";
    }
}

    include("common/header.php");
    include("common/menu.php");

?>

<h1> Personnage : </h1>

<?php 
$personnage1 = new Personnage();
$personnage1->afficherMesInformationsModele();

$personnage2 = new Personnage();
$personnage2->img = "playerF.png";
$personnage2->nom = "Katy";
$personnage2->age = 22;
$personnage2->sexe = false;
$personnage2->force = 3;
$personnage2->agilite = 6;
$personnage2->afficherMesInformationsModele();

$personnage3 = new Personnage();
$personnage3->img = "playerM.png";
$personnage3->nom = "Marc";
$personnage3->age = 33;
$personnage3->sexe = true;
$personnage3->force = 7;
$personnage3->agilite = 2;

$personnage3->afficherMesInformationsModele();

?>

<?php 
    include("common/footer.php");
?>