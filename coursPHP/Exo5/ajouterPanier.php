<?php 
    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h2> Ajout d'un panier : </h2>

<?php   
    echo '<form action="#" method ="POST" >';
        echo '<fieldset><legend>Panier à créer :</legend>';
        echo '<label for="client">Nom du client : </label>';
        echo '<input type="text" name="client" id="client" required/>';
        echo '<label for="nb_pommes">Nombres de pommes : </label>';
        echo '<input type="number" name="nb_pommes" id="nb_pommes" required/>';
        echo '<label for="nb_cerise">Nombres de cerises : </label>';
        echo '<input type="number" name="nb_cerise" id="nb_cerise" required/>';
        echo '<input type="submit" value="Créer le panier" />';
    echo "</fieldset></form>";

    if(isset($_POST['client']) && !empty($_POST['client'])){
        $panier = new Panier(Panier::generateUniqueId(),$_POST['client']);
        echo $panier;
    }
        // $p = new Panier();
        // $nbPomme = (int)$_POST['nb_pommes'];
        // $nbCerise = (int)$_POST['nb_cerise'];
        // for($i = 0 ; $i < $nbPomme;$i++){
        //     $p->addFruit(new Fruit(Fruit::POMME,rand(120,160)));
        // }
        // for($i = 0 ; $i < $nbCerise;$i++){
        //     $p->addFruit(new Fruit(Fruit::CERISE,rand(30,40)));
        // } 
        // $paniers[] = $p;

?>

<?php 
    include("common/footer.php");
?>