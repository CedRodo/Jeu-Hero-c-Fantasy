<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    <title>Jeu de rôle</title>
</head>
<body>
<h1>Présentation des personnages</h1>
<?php require "Personnages.php";
require "Heros.php";
require "Monstres.php"; ?>
<br><br>
<section id="description">
<div class="description_heros">
<article>
<h2>Chevalier</h2>
<?php require "Chevalier.php";
$chevalier = new Chevalier("Agrias");
echo "<br/>";
$chevalier->description();
echo "<br/><br/><hr>";
echo "<p class='statut'>".$chevalier->statut()."</p>";
?>
</article>
<article>
<h2>Archer</h2>
<?php require "Archer.php";
$archer = new Archer("Mustadio");
echo "<br/>";
$archer->description();
echo "<br/><br/><hr>";
echo "<p class='statut'>".$archer->statut()."</p>";
?>
</article>
<article>
<h2>Mage</h2>
<?php require "Mage.php";
$mage = new Mage("Orran");
echo "<br/>";
$mage->description();
echo "<br/><br/><hr>";
echo "<p class='statut'>".$mage->statut()."</p>";
?>
</article>
</div>
</section>
<h1>Jeu</h1>
<?php require "Ogre.php";
require "Goblin.php";
require "Dragon.php";
$ogre = new Ogre;
$goblin = new Goblin;
$dragon = new Dragon;

$h = rand(1, 3);
$m = rand(1, 3);

switch ($h) {
    case 1:
        $hero = $chevalier;
        break;
    case 2:
        $hero = $archer;
        break;
    case 3:
        $hero = $mage;
        break;
}

switch ($m) {
    case 1:
        $monstre = $ogre;
        break;
    case 2:
        $monstre = $goblin;
        break;
    case 3:
        $monstre = $dragon;
        break;
}
 ?>
<h2 style="text-align: center;"><span style="text-transform: uppercase;"><?= $hero->getClasse(); ?></span> vs <span style="text-transform: uppercase;"><?= $monstre->getType(); ?></span></h2>
<br><br><br>
<?php $tour = 1;
while (($monstre->getHp() > 0) && ($hero->getHp() > 0)) { ?>
<h3 style="text-decoration: underline;">Tour n° <?= $tour; ?></h3>
<br>
<?php if ($hero->getHp() > 0) { ?>
<h4><span style="text-transform: uppercase;"><?= $hero->getNom(); ?></span> <span style="font-style: italic; font-weight: normal;text-transform: lowercase;">(<?= $hero->getClasse(); ?>)</span></h3>
<?php $hero->attaque($monstre); } ?>
<?php if ($monstre->getHp() > 0) { ?>
<br><br>
<h4 style="text-transform: uppercase;"><?= $monstre->getType(); ?></h3>
<?php $monstre->attaque($hero); ?>
<br><br>
<h4>Statut de <?= $hero->getNom(); ?></h3>
<?php $hero->statut(); } ?>
<br><br>
<?php $tour++; } ?>
<br><br>
<?php
if ($monstre->getHp() <= 0) { ?>
<h4 style="color: blue;"><?= $hero->getNom(); ?> a vaincu <?= $monstre->getType(); ?> !</h4>
<?php } else { ?>
<h4 style="color: red;"><?= $monstre->getType(); ?> a défait <?= $hero->getNom(); ?>...</h4>
<?php } ?>
</body>
</html>