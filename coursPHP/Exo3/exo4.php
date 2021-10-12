<?php 
    include("common/header.php");
    include("common/menu.php");

    session_start();
    if(!isset($_SESSION["nombreAleatoire"])) {
        $_SESSION["nombreAleatoire"] = rand(1,1000);
    }
?>

<h1>Trouver le nombre choisi par l'ordinateur</h1>

<form action="#" method="post">
    <input type="hidden" name="reinitialisation" value="yes">
    <input type="submit" value="Reinitialiser">
</form>
<form action="#" method="post">
    <label for="nombreAleatoire">Quel est le nombre : </label>
    <input type="number" name="nombreAleatoire" id="nombreAleatoire">
    <br>
    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_POST["reinitialisation"]) && $_POST["reinitialisation"] === "yes") {
        $_SESSION["nombreAleatoire"] = rand(1,1000);
    }
    $nombreAleatoire = $_SESSION["nombreAleatoire"];
    
    if(isset($_POST["nombreAleatoire"]) && $_POST["nombreAleatoire"] > 0 ) {
        $nombreSaisi = (int)$_POST["nombreAleatoire"];
        echo "<h2>";
        if($nombreAleatoire === $nombreSaisi) {
            echo "C'est gagné ! ";
        } else {
            if($nombreAleatoire > $nombreSaisi) {
                echo "Le nombre est plus grand";
            } else {
                echo "Le nombre est plus petit";
            }
        }
        echo "</h2>";
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>

<?php 
    include("common/footer.php");
?>
