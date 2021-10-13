<?php
class Panier {
    private static $prochainIdentifiant = 1;

    private $identifiant;
    private $pommes = [];
    private $cerises = [];

    public function __construct() {
        $this->identifiant = self::$prochainIdentifiant;
        self::$prochainIdentifiant ++;
    }

    public function addFruit($fruit) {
        if($fruit->getNom() === Fruit::POMME){
            $this->pommes[] = $fruit;
        } else if ($fruit->getNom() === Fruit::CERISE) {
            $this->cerises[] = $fruit;
        }
    }

    public function __toString() {
        $affichage = "Voici le contenu du panier " .$this->identifiant ." : <br/>";
        foreach($this->pommes as $pomme) {
            $affichage .= $pomme;
        }
        foreach($this->cerises as $cerise) {
            $affichage .= $cerise;
        }
        return $affichage;
    }
}
?>