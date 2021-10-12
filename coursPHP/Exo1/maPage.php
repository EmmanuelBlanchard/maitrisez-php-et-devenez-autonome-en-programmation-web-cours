<?php
$nomJoueur1 = "Matthieu";
$ageJoueur1 = 30;
$estUnHommeJoueur1 = true;

$nomJoueur2 = "tata";
$ageJoueur2 = 25;
$estUnHommeJoueur2 = false;

generationSeparation();
afficherJoueur($nomJoueur1,$ageJoueur1,$estUnHommeJoueur1);
generationSeparation();
afficherJoueur($nomJoueur2,$ageJoueur2,$estUnHommeJoueur2);

generationSeparation();
afficherJoueurLePlusAge($ageJoueur1, $ageJoueur2);
generationSeparation();

function afficherJoueur($nom, $age, $homme) {
    echo "Nom du joueur : " . $nom;
    echo "<br />";
    echo "Age du joueur : " . $age;
    echo "<br />";

    if($homme) {
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }
}

function afficherJoueurLePlusAge($ageJoueur1, $ageJoueur2) {
    if($ageJoueur1 > $ageJoueur2) {
        echo "Joueur 1 est le plus agé";
    } else {
        echo "Joueur 2 est le plus agé";
    }
}

function generationSeparation() {
    echo "<br />";
    echo "----------------------";
    echo "<br />";
}

?>