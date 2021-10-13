<?php
class Fruit {
    public static $fruits = [];

    private $nom;
    private $image;
    private $poids;
    private $prix;

    const POMME = "pomme";
    const CERISE = "cerise";

    const POMME_PRIX = 15;
    const CERISE_PRIX = 20;

    const POMME_IMAGE = "apple.png";
    const CERISE_IMAGE = "cherry.png";
    
    function __construct($nom,$image,$poids,$prix) {
        $this->nom = $nom;
        $this->image = $image;
        $this->poids = $poids;
        $this->prix = $prix;
        self::$fruits[] = $this;
    }

    function getNom() {
        return $this->nom;
    }

    function setNom($nom) {
        return $this->nom = $nom;
    }

    function getImage() {
        return $this->image;
    }

    function setImage($image) {
        return $this->image = $image;
    }

    function getPoids() {
        return $this->poids;
    }

    function setPoids($poids) {
        return $this->poids = $poids;
    }

    function getPrix() {
        return $this->prix;
    }

    function setPrix($prix) {
        return $this->prix = $prix;
    }

    public function afficherMesInformations() {
        echo "Nom : " . $this->nom . "<br/>";
        echo "Poids : " . $this->poids . "<br/>";
        echo "Prix : " . $this->prix . "<br/>";
    }

    public function afficherMesInformationsModele() {
        echo "<div class=\"\">";
            echo "<img src=\"sources/images/".$this->image."\" alt=\"".$this->image."\" />";
        echo "</div>";
        echo "<div class=\"droite\">";
        $this->afficherMesInformations();
        echo "</div>";
        echo "<div class=\"clearBoth\"></div>";
    }

    public static function getListeFruit(){
        return self::$fruits;
    }

}
?>