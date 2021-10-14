<?php
require_once("classes/paniers.manager.php");
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

    public function getIdentifiant(){
        return $this->identifiant;
    }

    public function setFruitToPanierFromDB(){
        $fruits = panierManager::getFruitPanier($this->identifiant);

        foreach($fruits as $fruit) {
            if(preg_match("/cerise/",$fruit['fruit'])){
                $this->cerises[] = new Fruit($fruit['fruit'],$fruit['poids'],$fruit['prix']);
            } else if(preg_match("/pomme/",$fruit['fruit'])){
                $this->pommes[] = new Fruit($fruit['fruit'],$fruit['poids'],$fruit['prix']);
            }
        }
    }

    // public function __toString() {
    //     $affichage = "Voici le contenu du panier " .$this->identifiant ." : <br/>";
    //     foreach($this->pommes as $pomme) {
    //         $affichage .= $pomme;
    //     }
    //     foreach($this->cerises as $cerise) {
    //         $affichage .= $cerise;
    //     }
    //     $affichage .= "<br/>";
    //     return $affichage;
    // }

    public function __toString(){
        $affichage = '<h2 class="persoBackgroundColorBlueLight text-white p-2 mt-2 rounded-lg border border-dark">Contenu du panier ' . $this->identifiant ." : </h2>";
        $affichage .= '<table class="table">';
            $affichage .= '<thead>';
                $affichage .= '<tr>';
                    $affichage .= '<th scope="col">Image</th>';
                    $affichage .= '<th scope="col">Nom</th>';
                    $affichage .= '<th scope="col">Poids</th>';
                    $affichage .= '<th scope="col">Prix</th>';
                $affichage .= '</tr>';
            $affichage .= '</thead>';
            $affichage .= '<tbody>';
        foreach($this->pommes as $pomme){
            $affichage .= '<tr>';
                $affichage .= '<td>'.$pomme->getAffichageImageSmall().'</td>';
                $affichage .= '<td>'.$pomme->getNom().'</td>';
                $affichage .= '<td>'.$pomme->getPoids().'</td>';
                $affichage .= '<td>'.$pomme->getPrix().'</td>';
            $affichage .= '</tr>';
        }
        foreach($this->cerises as $cerise){
            $affichage .= '<tr>';
                $affichage .= '<td>'.$cerise->getAffichageImageSmall().'</td>';
                $affichage .= '<td>'.$cerise->getNom().'</td>';
                $affichage .= '<td>'.$cerise->getPoids().'</td>';
                $affichage .= '<td>'.$cerise->getPrix().'</td>';
            $affichage .= '</tr>';
        }  
            $affichage .= '</tbody>';
        $affichage .= '</table>';
        return $affichage;
    }

    public function addFruit($fruit){
        if(preg_match("/cerise/",$fruit->getNom())){
            $this->cerises[] = $fruit;
        } else if(preg_match("/pomme/",$fruit->getNom())){
            $this->pommes[] = $fruit;
        }
    }

    public function saveInDB(){
        return panierManager::insertIntoDB($this->identifiant, $this->nomClient);
    }

    public static function generateUniqueId() {
        return panierManager::getNombrePaniersInDB() + 1;
    }
}
?>