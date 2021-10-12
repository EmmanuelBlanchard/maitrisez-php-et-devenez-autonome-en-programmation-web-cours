<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Affichage d'une pyramide</h1>

<form action="#" method="post">
    <label for="hauteurPyramide">Hauteur de la pyramide : </label>
    <input type="number" name="hauteurPyramide" id="hauteurPyramide">
    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_POST["hauteurPyramide"]) && $_POST["hauteurPyramide"] > 0 ) {
        $hauteurPyramide = $_POST["hauteurPyramide"];
        echo "<h2> Pyramide de hauteur : " . $hauteurPyramide . "</h2>";
        $texte = "";
        for($i = 0; $i <= $hauteurPyramide ; $i++) {
            $texte .= "xx";
            echo $texte . "<br />";
        }
        for($i = 0; $i < $hauteurPyramide-1 ; $i++) {
            $texte = substr($texte,0,strlen($texte)-2);
            echo $texte . "<br />";
        }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>

<?php 
    include("common/footer.php");
?>
