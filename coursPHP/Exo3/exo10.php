<?php 
    include("common/header.php");
    include("common/menu.php");

    $tableauPersonnage1 = [
        "Nom" => "Luke",
        "Img" => "player.png",
        "Age" => 27,
        "Sexe" => true,
        "Force" => 5,
        "Agilite" => 4
    ];
    $tableauPersonnage2 = [
        "Nom" => "Katy",
        "Img" => "playerF.png",
        "Age" => 22,
        "Sexe" => false,
        "Force" => 3,
        "Agilite" => 6
    ];
    $tableauPersonnage3 = [
        "Nom" => "Marc",
        "Img" => "playerM.png",
        "Age" => 33,
        "Sexe" => true,
        "Force" => 7,
        "Agilite" => 2
    ];

    $tableauPersonnages = [
        $tableauPersonnage1,
        $tableauPersonnage2,
        $tableauPersonnage3
    ];
?>

<h1>Affichage des personnages : </h1>
<?php 
    foreach($tableauPersonnages as $tableauPersonnage) {
        echo "<div class=\"gauche\">";
            echo "<img src=\"sources/images/".$tableauPersonnage['Img']."\" alt=\"".$tableauPersonnage['Img']."\" />";
        echo "</div>";
        echo "<div class=\"gauche\">";
            afficherPersonnage($tableauPersonnage);
        echo "</div>";
        echo "<div class=\"clearBoth\"></div>";
    }

    function afficherPersonnage($personnage) {
        foreach($personnage as $index => $valeur) {
            if($index !== "Img" && $index !== "Sexe"){
                echo "<b>".$index."</b> : ". $valeur. "<br/>";
            }
            if($index === "Sexe") {
                echo"<b>Sexe</b> : ";
                if($valeur) {
                    echo "Homme <br/>";
                } else {
                    echo "Femme <br/>";
                }
            }
        }
    }
?>

<?php 
    include("common/footer.php");
?>