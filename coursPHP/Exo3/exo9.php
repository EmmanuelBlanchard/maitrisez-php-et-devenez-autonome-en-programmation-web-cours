<?php 
    include("common/header.php");
    include("common/menu.php");

    $tableauPersonnage1 = [
        "Nom" => "Luke",
        "Age" => 27,
        "Sexe" => "Homme",
        "Force" => 5,
        "Agilite" => 4
    ];
    $tableauPersonnage2 = [
        "Nom" => "Katy",
        "Age" => 22,
        "Sexe" => "Femme",
        "Force" => 3,
        "Agilite" => 6
    ];
    $tableauPersonnage3 = [
        "Nom" => "Marc",
        "Age" => 33,
        "Sexe" => "Homme",
        "Force" => 7,
        "Agilite" => 2
    ];
?>

<h1>Selection du personnage</h1>
<form action="#" method="post">
    <label for="personnage">Personnage : </label>
    <select name="personnage" id="personnage" onChange = "submit()">
        <option value="p1" <?php if(isset($_POST['personnage']) && $_POST['personnage'] === "p1") echo "selected"?>>Luke</option>
        <option value="p2" <?php if(isset($_POST['personnage']) && $_POST['personnage'] === "p2") echo "selected"?>>Katy</option>
        <option value="p3" <?php if(isset($_POST['personnage']) && $_POST['personnage'] === "p3") echo "selected"?>>Marc</option>
    </select> <br/>
</form>

<h2> Personnage : </h2>
<?php 
    if(!isset($_POST['personnage']) || $_POST['personnage'] === "p1"){
        echo "<div class=\"gauche\">";
            echo "<img src=\"sources/images/player.png\" alt=\"joueur Luke\" />";
        echo "</div>";
        echo "<div class=\"gauche\">";
            afficherPersonnage($tableauPersonnage1);
        echo "</div>";
    } else if($_POST['personnage'] === "p2"){
        echo "<div class=\"gauche\">";
            echo "<img src=\"sources/images/playerF.png\" alt=\"joueuse Katy\" />";
        echo "</div>";
        echo "<div class=\"gauche\">";
            afficherPersonnage($tableauPersonnage2);
        echo "</div>";
    }else if($_POST['personnage'] === "p3"){
        echo "<div class=\"gauche\">";
            echo "<img src=\"sources/images/playerM.png\" alt= \"joueur Marc\" />";
        echo "</div>";
        echo "<div class=\"gauche\">";
            afficherPersonnage($tableauPersonnage3);
        echo "</div>";
    }
    echo "<div class=\"clearBoth\"></div>";

    function afficherPersonnage($personnage) {
        foreach($personnage as $index => $valeur) {
            echo "<b>" . $index . "</b> : " . $valeur . "<br />";
        }
    }
?>

<?php 
    include("common/footer.php");
?>