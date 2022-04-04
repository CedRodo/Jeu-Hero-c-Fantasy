<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script src="./assets/js/functions.js"></script>
    <title>Jeu de rôle</title>
</head>
<body>
<main>
<h1>Classes</h1>
<?php require "Personnages.php";
require "Heros.php";
require "Monstres.php"; 

if (isset($_POST['chevalier'])) {
    $chevalier_nom = $_POST['chevalier'];
} else {
    $chevalier_nom = 'chevalier';
}

if (isset($_POST['archer'])) {
    $archer_nom = $_POST['archer'];
} else {
    $archer_nom = 'archer';
}

if (isset($_POST['mage'])) {
    $mage_nom = $_POST['mage'];
} else {
    $mage_nom = 'mage';
}

?>
<br><br>
<section id="description">
    <form id="myFunction" method="POST" action="">
<div class="description_heros">
<article id="knight">
<h2>Chevalier</h2>
<img height=400px src="assets/img/Knight13.png" alt="chevalier">
<?php require "Chevalier.php";
$chevalier = new Chevalier($chevalier_nom);
echo "<br/>";
$chevalier->description(); ?>
<input type="text" name="chevalier" id="chevalier" value="<?= $chevalier_nom ?>">
<br/><br/><hr>
<p class="statut"><?= $chevalier->statut(); ?></p>
<button type="button" id="ch_knight" class="choix">Choisir</button>
</article>
<article id="archer">
<h2>Archer</h2>
<img height=400px src="assets/img/Archer-2.png" alt="archer">
<?php require "Archer.php";
$archer = new Archer($archer_nom);
echo "<br/>";
$archer->description(); ?>
<input type="text" placeholder="archer" name="archer" id="archer" value="<?= $archer_nom ?>">
<br/><br/><hr>
<p class="statut"><?= $archer->statut(); ?></p>
<button type="button" id="ch_archer" class="choix">Choisir</button>
</article>
<article id="mage">
<h2>Mage</h2>
<img height=400px src="assets/img/Mage2-2.png" alt="mage">
<?php require "Mage.php";
$mage = new Mage($mage_nom);
echo "<br/>";
$mage->description(); ?>
<input type="text" placeholder="mage" name="mage" id="mage" value="<?= $mage_nom ?>">
<br/><br/><hr>
<p class="statut"><?= $mage->statut(); ?></p>
<button type="button" id="ch_mage" class="choix">Choisir</button>
</article>
</div>
<br/><br/>
<input style="font-size: 18px; background-color: navy; color: white; display: none;" type="submit">
<form>
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
        $h_p = rand(1, 13);
        switch ($h_p) {
        case 1:
            $hero_photo = 'assets/img/Knight.png';
            break;
        case 2:
            $hero_photo = 'assets/img/Knight2.png';
            break;
        case 3:
            $hero_photo = 'assets/img/Knight3.png';
            break;
        case 4:
            $hero_photo = 'assets/img/Knight4.png';
            break;
        case 5:
            $hero_photo = 'assets/img/Knight5.png';
            break;
        case 6:
            $hero_photo = 'assets/img/Knight6.png';
            break;
        case 7:
            $hero_photo = 'assets/img/Knight7.png';
            break;
        case 8:
            $hero_photo = 'assets/img/Knight8.png';
            break;
        case 9:
            $hero_photo = 'assets/img/Knight9.png';
            break;
        case 10:
            $hero_photo = 'assets/img/Knight10.png';
            break;
        case 11:
            $hero_photo = 'assets/img/Knight11.png';
            break;
        case 12:
            $hero_photo = 'assets/img/Knight12.png';
            break;
        case 13:
            $hero_photo = 'assets/img/Knight13.png';
            break;
        }
        break;

    case 2:
        $hero = $archer;
        $h_p = rand(1, 4);
        switch ($h_p) {
        case 1:
            $hero_photo = 'assets/img/Archer.png';
            break;
        case 2:
            $hero_photo = 'assets/img/Archer2.png';
            break;
        case 3:
            $hero_photo = 'assets/img/Archer3.png';
            break;
        case 4:
            $hero_photo = 'assets/img/Archer4.png';
            break;
        }
        break;

    case 3:
        $hero = $mage;
        $h_p = rand(1, 10);
        switch ($h_p) {
        case 1:
            $hero_photo = 'assets/img/Mage.png';
            break;
        case 2:
            $hero_photo = 'assets/img/Mage2.png';
            break;
        case 3:
            $hero_photo = 'assets/img/Mage3.png';
            break;
        case 4:
            $hero_photo = 'assets/img/Mage4.png';
            break;
        case 5:
            $hero_photo = 'assets/img/Mage5.png';
            break;
        case 6:
            $hero_photo = 'assets/img/Mage6.png';
            break;
        case 7:
            $hero_photo = 'assets/img/Mage7.png';
            break;
        case 8:
            $hero_photo = 'assets/img/Mage8.png';
            break;
        case 9:
            $hero_photo = 'assets/img/Mage9.png';
            break;
        case 10:
            $hero_photo = 'assets/img/Mage10.png';
            break;
        }
        break;
}

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
 ?>
<br>
<div class="duel">
    <div class="duel-hero-container">
        <h2><?= $hero->getClasse(); ?></h2>
        <br><br>
        <img class="duel-hero" src="<?= $hero_photo ?>" alt="hero">
        <div class="duel-hero-prog">
            <div>
                <label class="barre_hp" for="barre_hp">HP</label> <progress id="barre_hp" max="100" value="100"></progress>
            </div>
            <div>
                <label class="barre_mp" for="barre_mp">MP</label> <progress id="barre_mp" max="100" value="100"></progress>
            </div>
        </div>
        <div class="duel-hero-buttons">
            <button type="button" class="attaque" onclick="attaque();">ATT</button><button type="button" class="magie" onclick="alert('Magie !');return false;">MAG</button><button type="button" class="sante" onclick="this.textContent='HP UP !';return false;">REG</button>
        </div>
    </div>
    <div class="duel-monstre-container">
        <h2><?= $monstre->getType(); ?></h2>
        <br><br>
        <img class="duel-monstre" src="<?= $monstre_photo ?>" alt="monstre">
        <div class="duel-monstre-prog">
            <div>
                <label class="barre_hp" for="barre_hp">HP</label> <progress id="hp_monstre" max="100" value="100"></progress>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<section id="test">

</section>
<section id="combat">

</section>
</main>
<script>

var titre = document.querySelectorAll('h1')[1];

function combat() {
this.innerHTML = '<strong>Combat</strong>';
this.style.color = 'orange';
};

function jeu() {
this.innerHTML = 'Jeu';
this.style.color = 'black';
};

titre.addEventListener('mouseover', combat);
titre.addEventListener('mousedown', jeu);

var first_h1 = document.querySelectorAll('h1')[0];

function hide() {
this.style.visibility = 'hidden';
};

function show() {
this.style.visibility = 'visible';
};

first_h1.addEventListener('mouseover', hide);
first_h1.addEventListener('mouseout', show);


// titre.onclick = function(){
    //     this.innerHTML = '<strong>Remplacement</strong>';
    //     this.style.color = 'orange';
    // };
    

var img_knight = document.querySelectorAll('img')[0];
var img_archer = document.querySelectorAll('img')[1];
var img_mage = document.querySelectorAll('img')[2];

function hide_knight() {
img_knight.classList.toggle('hidden');
};

function hide_archer() {
img_archer.classList.toggle('hidden');
};

function hide_mage() {
img_mage.classList.toggle('hidden');
};

function hide_img() {
img_mage.style.visibility = 'hidden';
};

function show_img() {
img_mage.style.visibility = 'visible';
};

document.getElementById('ch_knight').addEventListener('click',hide_knight);
document.getElementById('ch_archer').addEventListener('click',hide_archer);
// document.getElementById('ch_mage').addEventListener('click',hide_mage);
document.getElementById('ch_mage').addEventListener('mousedown',hide_img);
document.getElementById('ch_mage').addEventListener('mouseup',show_img);

var ex_knight = document.getElementById('knight').childNodes[3];

var knight = document.createElement('span');
knight.innerHTML = '<img height=400px src="assets/img/Knight12.png" alt="chevalier">'
    
ex_knight.onclick = function(){
    ex_knight.parentNode.replaceChild(knight, ex_knight);
};

var ex_archer = document.getElementById('archer').childNodes[3];

var archer = document.createElement('span');
archer.innerHTML = '<img height=400px src="assets/img/Archer2-2.png" alt="chevalier">'
    
ex_archer.onclick = function(){
    ex_archer.parentNode.replaceChild(archer, ex_archer);
};

var ex_mage = document.getElementById('mage').childNodes[3];

var mage = document.createElement('span');
mage.innerHTML = '<img height=400px src="assets/img/Mage-2.png" alt="chevalier">'
    
ex_mage.onclick = function(){
    ex_mage.parentNode.replaceChild(mage, ex_mage);
};

function attaque() {
    var combat = document.getElementById("test");
    var container = document.createElement("div");
    container.innerHTML = 
    "<p><?php $hero->attaque($monstre); ?></p><p><?php $monstre->attaque($hero); ?></p>";
    combat.appendChild(container);

}

// DARK MODE //

var nightmode = document.querySelector(".nightmode");
        nightmode.addEventListener("click", ()=> {
            var body = document.querySelector('body');
            body.classList.toggle('darkmode');
        });

</script>
<footer>
    <hr>
    <a href="#">© The Entertainer Prod.</a> | <a href="#">Mentions légales</a> | <button class="nightmode">Night Mode</button> | 2022
</footer>
</body>
</html>