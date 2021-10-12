<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Calculer une moyenne</h1>
<form action="#" method="get">
    <label for="nombreDeNotes">Nombre de notes : </label>
    <input type="number" name="nombreDeNotes" id="nombreDeNotes">
    <input type="submit" value="Ajouter">
</form>
<?php 
    if(isset($_GET["nombreDeNotes"]) && $_GET["nombreDeNotes"] > 0) {
        $nombreDeNotes = $_GET["nombreDeNotes"];
        echo "<form action=\"#\" method=\"post\">";
        echo "<fieldset>";
        echo "<legend>Inscrire les notes pour calculer la moyenne </legend>";
        for($i = 1; $i <= $nombreDeNotes ; $i++) {
            echo "<label for=\"note" .$i. "\">Note " . $i . " : </label>";
            echo "<input type=\"number\" name=\"note" .$i. "\" id=\"note".$i."\" required><br/>";
        }
        echo "<input type=\"submit\" value=\"Calculer\">";
        echo "</fieldset>";
        echo "</form>";
        if(isset($_POST['note1'])) {
            $resultat = 0;
            for($i = 1; $i <= $nombreDeNotes ; $i++) {
                $resultat += $_POST['note'.$i];
            }
            echo "<b>La moyenne est : ". $resultat / $nombreDeNotes . "</b>";
        }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>

<?php 
    include("common/footer.php");
?>
