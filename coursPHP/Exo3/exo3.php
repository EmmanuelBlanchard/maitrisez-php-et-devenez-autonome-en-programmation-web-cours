<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Cercle - Périmètre et Aire</h1>

<form action="#" method="post">
    <label for="rayonCercle">Rayon d'un cercle : </label>
    <input type="number" name="rayonCercle" id="rayonCercle">
    <br>
    <label for="perimetre">Périmètre</label>
    <input type="checkbox" id="perimetre" name="perimetre" value="perimetre">
    <br>
    <label for="aire">Aire</label>
    <input type="checkbox" id="aire" name="aire" value="aire">
    <br>
    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_POST["rayonCercle"]) && $_POST["rayonCercle"] > 0 ) {
        $rayonCercle = $_POST["rayonCercle"];
        echo "<h2> Résultats : </h2>";
        echo "<p>";
        if(isset($_POST["perimetre"])) {
            echo "Le périmètre d'un cercle de rayon : <b>" . $rayonCercle . "</b> est : <b>" . ($rayonCercle * 2 * pi()) . "</b><br />";
        }
        if(isset($_POST["aire"])) {
            echo "L'aire d'un cercle de rayon :  <b>" . $rayonCercle . "</b> est : <b>" . ($rayonCercle * $rayonCercle * pi()) . "</b></br />";
        }
        echo "</p>";
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>

<?php 
    include("common/footer.php");
?>
