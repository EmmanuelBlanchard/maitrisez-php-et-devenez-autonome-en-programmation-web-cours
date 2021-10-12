<?php

$nomJoueur1 = "Matthieu";
$ageJoueur1 = 30;
$estUnHommeJoueur1 = false;

?>
<h1> Nom du joueur 1 : <?php echo $nomJoueur1; ?> </h1>
<br />

Age du joueur 1 : <?php echo $ageJoueur1; ?>
<br />

<?php $ageJoueur1 = $ageJoueur1 + 1; ?>

Age du joueur 1 : <?php echo $ageJoueur1; ?>
<br />

<?php 
if($estUnHommeJoueur1 === true) {
?>
    C'est un homme
<?php } else { //$estUnHomme === false ?>
    C'est une femme
<?php } ?>
