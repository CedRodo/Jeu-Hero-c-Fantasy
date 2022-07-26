<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Jeu de rôle</title>    
</head>
<body>
<div id="logo">
    <img src="assets/logos/fft-logo.png" alt="logo">
</div>
<main>
<h1>Classes</h1>
<?php require "Personnages.php";
require "Heros.php";
require "Monstres.php"; 

if (isset($_POST['chevalier'])) {
    if (isset($_GET['img'])) {
        $hero_img_kn = $_GET['img'];
    }
    $chevalier_nom = $_POST['chevalier'];
} else {
    $chevalier_nom = 'chevalier';
}

if (isset($_POST['archer'])) {
    if (isset($_GET['img'])) {
        $hero_img_ar = $_GET['img'];
    }
    $archer_nom = $_POST['archer'];
} else {
    $archer_nom = 'archer';
}

if (isset($_POST['mage'])) {
    if (isset($_GET['img'])) {
        $hero_img_mg = $_GET['img'];
    }
    $mage_nom = $_POST['mage'];
} else {
    $mage_nom = 'mage';
}
?>
<br><br>
<section id="description">
    <div class="description_heros">
        <article id="knight">
            <h2>Chevalier</h2>
                <form id="form_kn" method="POST" action="">
                    <div class="container_img">
                        <div id="select_knight_previous">
                            <img onclick="change_img_knight_previous();" width=20px src="assets/icons/previous.png" title="précédent" alt="précédent">
                        </div>
                        <img id="select_knight" height=400px src="<?php if (isset($hero_img_kn)) { echo 'assets/img/Knight'.$hero_img_kn; } else { echo 'assets/img/Knight13.png'; } ?>" alt="chevalier">
                        <div id="select_knight_next">
                            <img onclick="change_img_knight_next();" width=20px src="assets/icons/next.png" title="suivant" alt="suivant">
                        </div>
                    </div>
                    <?php require "Chevalier.php";
                    $chevalier = new Chevalier($chevalier_nom);
                    echo "<br/>";
                    $chevalier->description(); ?>
                    <input type="text" name="chevalier" id="chevalier" value="<?= $chevalier_nom ?>">
                    <br/><br/><hr>
                    <p class="statut"><?= $chevalier->statut(); ?></p>
                    <button onclick="change_action_kn();" type="submit" id="ch_knight" class="choix">Choisir</button>
                </form>
        </article>
        <article id="archer">
            <h2>Archer</h2>
                <form id="form_ar" method="POST" action="">
                    <div class="container_img">
                        <div id="select_archer_previous">
                            <img onclick="change_img_archer_previous();" width=20px src="assets/icons/previous.png" title="précédent" alt="précédent">
                        </div>
                        <img id="select_archer" height=400px src="<?php if (isset($hero_img_ar)) { echo 'assets/img/Archer-2-'.$hero_img_ar; } else { echo 'assets/img/Archer-2-1.png'; } ?>" alt="archer">
                        <div id="select_archer_next">
                            <img onclick="change_img_archer_next();" width=20px src="assets/icons/next.png" title="suivant" alt="suivant">
                        </div>
                    </div>
                <?php require "Archer.php";
                $archer = new Archer($archer_nom);
                echo "<br/>";
                $archer->description(); ?>
                <input type="text" placeholder="archer" name="archer" id="archer" value="<?= $archer_nom ?>">
                <br/><br/><hr>
                <p class="statut"><?= $archer->statut(); ?></p>
                <button onclick="change_action_ar();" type="submit" id="ch_archer" class="choix">Choisir</button>
                </form>
        </article>
        <article id="mage">
            <h2>Mage</h2>
                <form id="form_mg" method="POST" action="">
                    <div class="container_img">
                        <div id="select_mage_previous">
                            <img onclick="change_img_mage_previous();" width=20px src="assets/icons/previous.png" title="précédent" alt="précédent">
                        </div>
                        <img id="select_mage" height=400px src="<?php if (isset($hero_img_mg)) { echo 'assets/img/Mage-2-'.$hero_img_mg; } else { echo 'assets/img/Mage-2-1.png'; } ?>" alt="mage">
                        <div id="select_mage_next">
                            <img onclick="change_img_mage_next();" width=20px src="assets/icons/next.png" title="suivant" alt="suivant">
                        </div>
                    </div>
                <?php require "Mage.php";
                $mage = new Mage($mage_nom);
                echo "<br/>";
                $mage->description(); ?>
                <input type="text" placeholder="mage" name="mage" id="mage" value="<?= $mage_nom ?>">
                <br/><br/><hr>
                <p class="statut"><?= $mage->statut(); ?></p>
                <button onclick="change_action_mg();" type="submit" id="ch_mage" class="choix">Choisir</button>
                </form>
        </article>
    </div>
<br/><br/>
</section>
<div id="carte">
    <img src="assets/worlds/FFTIvalice.png" alt="carte">
</div>
<h1>Combat</h1>
<?php require "Ogre.php"; require "Goblin.php"; require "Dragon.php";
$ogre = new Ogre;
$goblin = new Goblin;
$dragon = new Dragon;

$m = rand(1, 3);

switch ($m) {

    case 1:
        $monstre = $ogre;
        $monstre_photo = 'assets/img/Ogre.png';
        break;
    case 2:
        $monstre = $goblin;
        $monstre_photo = 'assets/img/Goblin.png';
        break;
    case 3:
        $monstre = $dragon;
        $monstre_photo = 'assets/img/Dragon.png';
        break;
}

if (isset($_GET['ch'])) {
    switch ($_GET['ch']) {
        case ('kn'): 
            $hero = $chevalier;
            $hero_img = 'assets/img/Knight'.$hero_img_kn;
            break;
    
        case ('ar'):
            $hero = $archer;
            $hero_img = 'assets/img/Archer'.$hero_img_ar;
            break;
    
        case ('mg'):
            $hero = $mage;
            $hero_img = 'assets/img/Mage'.$hero_img_mg;
            break;
    }
}

if (isset($hero)) { ?>
<h2 id="duel_status"></h2>
<div class="tour-container">
    <div class="progress_bar-container">
        <i class="fa-solid fa-flag tour_hero"></i>
        <i class="fa-solid fa-flag tour_monstre"></i>
        <progress id="tour" max="100" value="100">TEST</progress>
    </div>
    <button id="combat" onclick="combat();">COMBAT !</button>
</div>
<div class="duel">
    <span class="strike-number"></span>
    <div class="duel-hero-container" data-classe="<?= $hero->getClasse(); ?>" data-nom="<?= $hero->getNom(); ?>">
        <!-- <h2 style="text-align: start; margin-left: 100px"><?= $hero->getClasse(); ?></h2> -->
        <br><br>
        <span class="damage"></span>
        <img class="striked" src="">
        <img class="duel-hero" src="<?= $hero_img; ?>" alt="hero">
        <div class="duel-hero-prog">
            <div style="margin-bottom: 25px;">

                <label class="barre_hp" for="barre_hp">HP</label><div class="barre-container"><span class="barreH_hp-content"></span><progress id="barre_hp" max="100" value="100"></progress></div>
            </div>
            <div>
                <label class="barre_mp" for="barre_mp">MP</label><div class="barre-container"><span class="barreH_mp-content"></span><progress id="barre_mp" max="100" value="100"></progress></div>
            </div>
        </div>
        <div class="duel-hero-buttons">
            <button type="button" class="attaque" onclick="attaqueHero();">ATT</button>
            <button type="button" class="magie" onclick="document.querySelector('.duel-hero-magies').style.display = 'flex';">MAG</button>
            <button type="button" class="sante" onclick="regeneration(<?= $hero->getClasse(); ?>);">REG</button>
        </div>
        <div class="duel-hero-magies">
            <button type="button" class="attaque" onclick="magie(feu);">FEU</button><button type="button" class="attaque" onclick="magie(glace);">GLACE</button><button type="button" class="attaque" onclick="magie(foudre);">FOUDRE</button>
        </div>
        <div id="hero_status"></div>
    </div>
    <div class="duel-monstre-container" data-type="<?= $monstre->getType(); ?>">
        <!-- <h2 style="text-align: end; margin-right: 100px"><?= $monstre->getType(); ?></h2> -->
        <br><br>
        <span class="damage"></span>
        <img class="striked" src="">
        <img class="duel-monstre" src="<?= $monstre_photo ?>" alt="monstre">
        <div class="duel-monstre-prog">
            <div>
                <label class="barre_hp" for="hp_monstre">HP</label><div class="barre-container"><span class="barreM_hp-content"></span><progress id="hp_monstre" max="100" value="100"></progress></div>
            </div>
        </div>
        <div id="monstre_status"></div>
    </div>
</div>
<?php } ?>
<br><br><br>
</main>
<footer>
    <hr>
    <a href="#">© The Entertainer Prod.</a> | <a href="#">Mentions légales</a> | <button class="nightmode">Night Mode</button> | 2022
</footer>
<script src="./assets/js/functions.js"></script>
</body>
</html>