<?php 
    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
    require_once("classes/formatage.utile.php");
    include("common/header.php");
    include("common/menu.php");
?>
<div class="container">
<?php echo Utile::gererTitreNiveau2("Ajout d'un panier :"); ?>

<?php
    echo '<form action="#" method ="POST" >';
        echo '<fieldset><legend>Panier à créer :</legend>';
        echo '<label for="client">Nom du client : </label>';
        echo '<input type="text" name="client" id="client" required/>';
        echo '<label for="nombrePommes">Nombres de pommes : </label>';
        echo '<input type="number" name="nombrePommes" id="nombrePommes" required/>';
        echo '<label for="nombreCerises">Nombres de cerises : </label>';
        echo '<input type="number" name="nombreCerises" id="nombreCerises" required/>';
        echo '<input type="submit" value="Créer le panier" />';
    echo "</fieldset></form>";

    if(isset($_POST['client']) && !empty($_POST['client'])){
        $panier = new Panier(Panier::generateUniqueId(),$_POST['client']);
        $resultat = $panier->saveInDB();
        $nombreFruitInDB = Fruit::generateUniqueId();
        if($resultat){
            $nbPomme = (int)$_POST['nombrePommes'];
            $nbCerise = (int)$_POST['nombreCerises'];
            $cpt = 1;
            for($i = 0 ; $i < $nbPomme;$i++){
                $fruit = new Fruit("pomme".($nombreFruitInDB+$cpt),rand(120,160),20);
                $fruit->saveInDB($panier->getIdentifiant());
                $panier->addFruit($fruit);
                $cpt++;
            }
            for($i = 0 ; $i < $nbCerise;$i++){
                $fruit = new Fruit("cerise".($nombreFruitInDB+$cpt),rand(120,160),20);
                $fruit->saveInDB($panier->getIdentifiant());
                $panier->addFruit($fruit);
                $cpt++;
            } 
            echo $panier;
            echo "OK";
        } else {
            echo "L'ajout n'a pas fonctionné";
        }
    }
?>
</div>
<?php 
    include("common/footer.php");
?>