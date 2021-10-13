<?php
class Fruit {
    private $nom;
    private $poids;
    private $prix;

    const POMME = "pomme";
    const CERISE = "cerise";
    
    public function __construct($nom,$poids) {
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $this->getPrixFruits($nom);
    }

    private function getPrixFruits($nom) {
        if($nom === self::POMME) {
            return 15;
        } else if($nom === self::CERISE) {
            return 20;
        }
    }

}

?>