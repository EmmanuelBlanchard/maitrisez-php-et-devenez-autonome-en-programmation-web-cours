<?php 

class Personnage {
    public $nom;
    public $image;
    public $age;
    public $sexe;
    public $force;
    public $agilite;

    public function __construct($nom,$image,$age,$sexe,$force,$agilite) {
        $this->nom = $nom;
        $this->image = $image;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
    }

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
            echo "<img src=\"sources/images/".$this->image."\" alt=\"".$this->image."\" />";
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