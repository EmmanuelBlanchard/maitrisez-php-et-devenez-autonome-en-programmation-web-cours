<?php
class Personnage {
    public static $personnages = [];

    private $nom;
    private $image;
    private $age;
    private $sexe;
    private $force;
    private $agilite;

    const HOMME = true;
    const FEMME = false;

    const FORCE_MAX = 6;
    const FORCE_MED = 5;
    const FORCE_MIN = 4;

    const AGILITE_MAX = 6;
    const AGILITE_MED = 5;
    const AGILITE_MIN = 4;

    function __construct($nom,$image,$age,$sexe,$force,$agilite) {
        $this->nom = $nom;
        $this->image = $image;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
        self::$personnages[] = $this;
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

    function getAge() {
        return $this->age;
    }

    function setAge($age) {
        return $this->age = $age;
    }

    function getSexe() {
        return $this->sexe;
    }

    function setSexe($sexe) {
        return $this->sexe = $sexe;
    }

    function getForce() {
        return $this->force;
    }

    function setForce($force) {
        return $this->force = $force;
    }

    function getAgilite() {
        return $this->agilite;
    }
    
    function setAgilite($agilite) {
        return $this->agilite = $agilite;
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

    public static function getListePersonnage(){
        return self::$personnages;
    }

}
?>