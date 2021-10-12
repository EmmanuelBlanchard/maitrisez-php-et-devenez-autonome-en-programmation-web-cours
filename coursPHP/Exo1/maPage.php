<?php
$nomJoueur1 = "Matthieu";
$ageJoueur1 = 30;
$estUnHommeJoueur1 = true;

$nomJoueur2 = "tata";
$ageJoueur2 = 25;
$estUnHommeJoueur2 = false;

$text = test(3);
echo $text;

afficherJoueur($nomJoueur1,$ageJoueur1,$estUnHommeJoueur1);
afficherJoueur($nomJoueur2,$ageJoueur2,$estUnHommeJoueur2);

function afficherJoueur($nom, $age, $homme) {
    echo "Nom du joueur 1 : " . $nom;
    echo "<br />";
    echo "Age du joueur 1 : " . $age;
    $age = $age + 1;
    echo "<br />";
    echo "Age du joueur 1 : " . $age;
    echo "<br />";

    if($homme === true) {
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }
}

function test($c) {
    $a = 5;
    $b = 10;
    return $a + $b + $c;
}

?>