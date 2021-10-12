<?php
define("SEPARATEUR", "-");

$joueur1 = [
    "nom" => "Matthieu", 
    "age" => 20, 
    "estUnHomme" => true
];
$joueur2 = [
    "nom" => "tata",
    "age" => 18,
    "estUnHomme" => false
];

$joueur3 = [
    "nom" => [
        "Nom" => "toto",
        "Prenom" => "titi"
    ],
    "age" => 22,
    "estUnHomme" => true
];
echo $joueur3["nom"]["Nom"];

generationSeparation(SEPARATEUR);
afficherJoueurV2($joueur1);
generationSeparation(SEPARATEUR);
afficherJoueurV2($joueur2);
generationSeparation(SEPARATEUR);
afficherJoueurV2($joueur3);
generationSeparation(SEPARATEUR);

afficherJoueurLePlusAge($joueur1["age"], $joueur2["age"]);
generationSeparation(SEPARATEUR);
$differenceAge = calculDifferenceAge($joueur1["age"], $joueur2["age"]);
echo "La différence d'age est de : " . $differenceAge;
generationSeparation(SEPARATEUR);
afficherMajeur($joueur1["age"]);
generationSeparation(SEPARATEUR);
afficherMajeur($joueur2["age"]);
generationSeparation(SEPARATEUR);

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
    // for($i = 0; $i < 50; $i++) {
    //     echo $separateur;
    // }
    $i = 0;
    do {
        $i++;
        echo $separateur;
    } while($i < 50);
    echo "<br />";
}

function afficherMajeur($age) {
    switch($age) {
        case 21 :
        case 20 :
        case 19 : echo "Il est majeur";
        break;
        case 18 : echo "Il est tout juste majeur";
        break;
        case 17 : echo "Il est encore mineur";
        break;
        case 16 : echo "Il est mineur";
        break;
        case 10 : echo "Il est mineur";
        break;
        default : echo "????";
        break;
    }
}

function afficherJoueurV2($tableau) {
    // $nombreCaseTableau = count($tableau);
    // for($i = 0; $i < $nombreCaseTableau; $i++) {
    //     echo $tableau[$i] . "<br />";
    // }
    foreach($tableau as $indice => $valeur) {
        if(!is_array($valeur)) {
            echo $indice . " : " . $valeur . "<br />";
        } else {
            afficherJoueurV2($valeur);
        }
    }
}

?>