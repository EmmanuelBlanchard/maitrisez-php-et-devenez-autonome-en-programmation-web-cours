<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1 class="titreBleu"> Formulaire </h1>
<form action="#" method="post">
    <fieldset>
        <legend>Informations</legend>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" required>
        <label for="age">Age : </label>
        <input type="number" name="age" id="age" required>
        <input type="submit" value="Envoyer">
    </fieldset>
</form>

<?php
    if(isset($_POST["nom"])) {
        echo "<div class=\"resultat\">";
        echo "Le nom est : " . $_POST["nom"] . "<br />";
        if(isset($_POST["age"])) {
            echo "L'age est : " . $_POST["age"] . "<br />";
        }
        echo "<div>";
    }
?>

<?php 
    include("common/footer.php");
?>
