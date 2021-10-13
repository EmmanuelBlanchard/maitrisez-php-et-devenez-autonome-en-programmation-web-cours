<?php
class Personnage {
    private $nom;
    private $image;
    private $age;
    private $sexe;
    private $force;
    private $agilite;

    function __construct($nom,$image,$age,$sexe,$force,$agilite) {
        $this->nom = $nom;
        $this->image = $image;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
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