<?php
class Panier {
    public static $paniers = [];

    private $identifiant;
    private $nomClient;
    private $pommes = [];
    private $cerises = [];

    public function __construct($identifiant, $nomClient) {
        $this->identifiant = $identifiant;
        $this->nomClient = $nomClient;
    }

    public function setFruitToPanierFromDB(){
        $fruits = panierManager::getFruitPanier($this->identifiant);
        echo "<pre>";
        print_r($fruits);
        // if($fruit->getNom() === Fruit::POMME){
        //     $this->pommes[] = $fruit;
        // } else if($fruit->getNom() === Fruit::CERISE){
        //     $this->cerises[] = $fruit;
        // }
    }

    // public function getIdentifiant() {
    //     return $this->identifiant;
    // }

    // public function __toString() {
    //     $affichage = "Voici le contenu du panier " .$this->identifiant ." : <br/>";
    //     foreach($this->pommes as $pomme) {
    //         $affichage .= $pomme;
    //     }
    //     foreach($this->cerises as $cerise) {
    //         $affichage .= $cerise;
    //     }
    //     return $affichage;
    // }
}
?>