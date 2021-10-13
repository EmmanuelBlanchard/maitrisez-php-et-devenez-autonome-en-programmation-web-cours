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
?>