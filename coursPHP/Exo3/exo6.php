<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Selection du personnage</h1>
<form action="#" method="post">
    <label for="personnage">Personnage : </label>
    <select name="personnage" id="personnage">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select> <br/>
    <input type="submit" value="Valider">
</form>

<?php 
    if(isset($_POST['personnage'])){
       if($_POST['personnage'] === "homme"){
            echo "<img src=\"sources/images/player.png\" alt=\"joueur Homme\" />";
       } else if($_POST['personnage'] === "femme"){
        echo "<img src=\"sources/images/playerF.png\" alt=\"joueuse femme\" />";
       }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>

<?php 
    include("common/footer.php");
?>
