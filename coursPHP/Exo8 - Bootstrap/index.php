<?php 
    include("common/header.php");
    include("common/menu.php");
    require_once("classes/formatage.utile.php");
?>
<div class="container">
    <?php echo Utile::gererTitreNiveau1('Bienvenue sur le deuxième site dédié à la POO sur PHP'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Gestion des paniers </h2>
                <div class="mx-auto" style="width:200px"><a class="btn btn-outline-primary" href="afficherPaniers.php" role="button">Gestion des paniers</a></div>
            </div>
            <div class="col">
                <h2 class="text-center">Gestion des fruits </h2>
                <div class="mx-auto" style="width:150px"><a class="btn btn-outline-primary" href="afficherFruits.php" role="button">Gestion des fruits</a></div>
            </div>
        </div>
    </div>
</div>

<?php 
    include("common/footer.php");
?>
