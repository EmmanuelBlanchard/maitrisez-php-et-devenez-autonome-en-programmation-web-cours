<?php
define("SEPARATEUR", "-");

$nomJoueur1 = "Matthieu";
$ageJoueur1 = 30;
$estUnHommeJoueur1 = true;

$nomJoueur2 = "tata";
$ageJoueur2 = 25;
$estUnHommeJoueur2 = false;

generationSeparation(SEPARATEUR);
afficherJoueur($nomJoueur1,$ageJoueur1,$estUnHommeJoueur1);
generationSeparation(SEPARATEUR);
afficherJoueur($nomJoueur2,$ageJoueur2,$estUnHommeJoueur2);
generationSeparation(SEPARATEUR);

afficherJoueurLePlusAge($ageJoueur1, $ageJoueur2);
generationSeparation(SEPARATEUR);
$differenceAge = calculDifferenceAge($ageJoueur1, $ageJoueur2);
echo "La différence d'age est de : " . $differenceAge;

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

function calculDifferenceAge($age1, $age2) {
    $resultat = $age1 - $age2;
    if($resultat < 0) {
        $resultat = -$resultat;
    }
    return $resultat;
}

function generationSeparation($separateur) {
    echo "<br />";
    for($i = 0; $i < 50; $i++) {
        echo $separateur;
    }
    echo "<br />";
}

?>