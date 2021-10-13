<?php
class Fruit {
    private $nom;
    private $poids;
    private $prix;

    public static $fruits = [];

    public function __construct($nom,$poids,$prix) {
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $prix;
    }

    public function getNom(){
        return $this->nom;
    }
    
    public function __toString() {
        $affichage = $this->getAffichageImage();
        $affichage .= "Nom : " . $this->nom . "<br />";
        $affichage .= "Poids : " . $this->poids . "<br />";
        $affichage .= "Prix : " . $this->prix . "<br />";
        return $affichage;
    }

    private function getAffichageImage() {
        if(preg_match("/cerise/",$this->nom)){
            echo "<img src=\"sources/images/cherry.png\" alt=\"image cerise\" /><br/>";
        }
        if(preg_match("/pomme/",$this->nom)){
            echo "<img src=\"sources/images/apple.png\" alt=\"image pomme\" /><br/>";
        }
    }

}

?>