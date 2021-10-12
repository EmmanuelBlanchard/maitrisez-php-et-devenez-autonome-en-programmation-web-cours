<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Tableaux</h1>
<h2><b>Etape 1</b></h2>
<p>Réaliser un tableau contenant les valeurs : 2,6,12,5,26,34,40,60</p>
<h2><b>Etape 2</b></h2>
<p>Réaliser une fonction qui vérifie si un tableau contient ques des valeurs paires</p>
<h2><b>Etape 3</b></h2>
<p>Afficher un message pour l'indiquer à l'utilisateur</p>
<h2><b>Résultat : </b></h2>

<?php 
    $tableau = [2,6,12,5,26,34,40,60];

    function verificationTableauValeursPaires($tableau) {
        $nombreCaseTableau = count($tableau);
        for ($i = 0; $i < $nombreCaseTableau; $i++) {
            if($tableau[$i] % 2 !== 0) {
                return false;
            }
        }
        return true;
    }

    function affichageVerificationTableauValeursPaires($tableau) {
        if(verificationTableauValeursPaires($tableau)) {
            echo "Le tableau contient des valeurs paires";
        } else {
            echo "Le tableau contient des valeurs impaires";
        }
    }

    affichageVerificationTableauValeursPaires($tableau);
?>

<?php 
    include("common/footer.php");
?>
