
    // DARK MODE //

    var nightmode = document.querySelector(".nightmode");
            nightmode.addEventListener("click", ()=> {
                var body = document.querySelector('body');
                body.classList.toggle('darkmode');
            });


    ///////////////////////////////////////////////////////////



    var titre = document.querySelectorAll('h1')[1];

    function combat() {
    this.innerHTML = '<strong>Combat</strong>';
    this.style.color = 'orange';
    };

    function jeu() {
    this.innerHTML = 'Jeu';
    this.style.color = 'black';
    };

    if (titre != null) {
        
        titre.addEventListener('mouseover', combat);
        titre.addEventListener('mousedown', jeu);

    }

    var first_h1 = document.querySelectorAll('h1')[0];

    function hide() {
    this.style.visibility = 'hidden';
    };

    function show() {
    this.style.visibility = 'visible';
    };

    first_h1.addEventListener('mouseover', hide);
    first_h1.addEventListener('mouseout', show);

    var select_img_knight = document.getElementById('select_knight');
    var num_img_knight = 13;

    function change_img_knight_previous() {
        if (num_img_knight > 1) {
            num_img_knight--;
            select_img_knight.src = "assets/img/Knight" + num_img_knight + ".png";
        } else {
            num_img_knight = 13;
            select_img_knight.src = "assets/img/Knight" + num_img_knight + ".png";
        }
    }

    function change_img_knight_next() {
        if (num_img_knight < 13) {
            num_img_knight++;
            select_img_knight.src = "assets/img/Knight" + num_img_knight + ".png";
        } else {
            num_img_knight = 1;
            select_img_knight.src = "assets/img/Knight" + num_img_knight + ".png";
        }
    }

    var select_img_archer = document.getElementById('select_archer');
    var num_img_archer = 1;

    function change_img_archer_previous() {
        if (num_img_archer > 1) {
            num_img_archer--;
            select_img_archer.src = "assets/img/Archer-2-" + num_img_archer + ".png";
        } else {
            num_img_archer = 4;
            select_img_archer.src = "assets/img/Archer-2-" + num_img_archer + ".png";
        }
    }

    function change_img_archer_next() {
        if (num_img_archer < 4) {
            num_img_archer++;
            select_img_archer.src = "assets/img/Archer-2-" + num_img_archer + ".png";
        } else {
            num_img_archer = 1;
            select_img_archer.src = "assets/img/Archer-2-" + num_img_archer + ".png";
        }
    }

    var select_img_mage = document.getElementById('select_mage');
    var num_img_mage = 1;

    function change_img_mage_previous() {
        if (num_img_mage > 1) {
            num_img_mage--;
            select_img_mage.src = "assets/img/Mage-2-" + num_img_mage + ".png";
        } else {
            num_img_mage = 10;
            select_img_mage.src = "assets/img/Mage-2-" + num_img_mage + ".png";
        }
    }

    function change_img_mage_next() {
        if (num_img_mage < 10) {
            num_img_mage++;
            select_img_mage.src = "assets/img/Mage-2-" + num_img_mage + ".png";
        } else {
            num_img_mage = 1;
            select_img_mage.src = "assets/img/Mage-2-" + num_img_mage + ".png";
        }
    }


    ///////////////////////////////////////////////////////////


    
    function write_src() {
        var container_src = document.getElementById('container_src');
        var img_knight = document.getElementById('select_knight');
        container_src.innerHTML = img_knight.src;
    }


    var form_kn = document.getElementById('form_kn');
    var form_ar = document.getElementById('form_ar');
    var form_mg = document.getElementById('form_mg');

    function change_action_kn() {
        form_kn.action = "index.php?ch=kn&img=" + num_img_knight;
        }

    function change_action_ar() {
        form_ar.action = "index.php?ch=ar&img=" + num_img_archer;
        }

    function change_action_mg() {
        form_mg.action = "index.php?ch=mg&img=" + num_img_mage;
        }


        ///////////////////////////////////////////////////////////

    // class Hero {
    // constructor(hauteur, largeur) {
    //     this.hauteur = hauteur;
    //     this.largeur = largeur;
    // }
    // }
    
    var duelHero = document.querySelector(".duel-hero");
    var duelMonstre = document.querySelector(".duel-monstre");
    var heroHp = document.getElementById("barre_hp");
    var heroMp = document.getElementById("barre_mp");
    var monstreHp = document.getElementById("hp_monstre");
    var duelHeroButtons = document.querySelectorAll(".duel-hero-buttons button");
    var duelHeroMagies = document.querySelector(".duel-hero-magies");
    var strike_number = document.querySelector(".strike-number");
    var heroContainer = document.querySelector(".duel-hero-container");
    var heroStriked = document.querySelector(".duel-hero-container .striked");
    var monstreContainer = document.querySelector(".duel-monstre-container");
    var monstreStriked = document.querySelector(".duel-monstre-container .striked");
    var heroDamage = document.querySelector(".duel-hero-container .damage");
    var monstreDamage = document.querySelector(".duel-monstre-container .damage");
    var duelStatus = document.getElementById("duel_status");
    var container = document.createElement("div");

    var chevalier = {
        'hp': 100,
        'mp': 100,
        'att': 40,
        'def': 40,
        'mag': 5,
        'vit': 15,
    }

    var archer = {
        'hp': 100,
        'mp': 100,
        'att': 20,
        'def': 15,
        'mag': 30,
        'vit': 50
    }

    var mage = {
        'hp': 100,
        'mp': 100,
        'att': 10,
        'def': 5,
        'mag': 80,
        'vit': 10
    }

    var dragon = {
        'hp': 100,
        'att': 40,
        'def': 30,
        'vit': 30
    }

    var goblin = {
        'hp': 100,
        'att': 25,
        'def': 25,
        'vit': 50
    }

    var ogre = {
        'hp': 100,
        'att': 50,
        'def': 40,
        'vit': 10
    }

    var feu = 40;
    var glace = 40;
    var foudre = 40;

    var regenT = 0;
    
    heroContainer.dataset.classe == 'chevalier' ? hero = chevalier : (heroContainer.dataset.classe == 'archer' ? hero = archer : hero = mage);
    monstreContainer.dataset.type == 'dragon' ? monstre = dragon : (monstreContainer.dataset.type == 'goblin' ? monstre = goblin : monstre = ogre);
        
    if (regenT < 100) {
        duelHeroButtons[2].disabled = true;
    }

    function defense(p) {
        
        var defense = Math.floor(Math.random() * ((p.def + 10) - (p.def - 10)+ 1)) + (p.def - 10);

        return defense;
        
    }

    function magie(m) {
        
        console.log(m);
        
    }

    function regeneration(p) {

        var regen = p.mag + (Math.floor(Math.random() * 15) + 1);
        
        p.hp = p.hp + regen;

        heroHp.value = p.hp;

        console.log(heroHp.value);

        duelStatus.textContent = "Le héro régènère de " + regen + " HP !";

        regenT = 0;

        setTimeout(attaqueMonstre, 2000);
        
    }

    function evitement(p) {
        
        p == hero ? evite = Math.round((p.vit * 5)/10) : evite = Math.round((p.vit * 2)/10);

        console.log(evite);

        return evite;
        
    }

    function margeEvitement(p) {

        marge = {'min': 0, 'max' :100};
        NbAlea = Math.floor(Math.random() * 100) + 1;
        
        if (NbAlea <= (100 - evitement(p))) {
            marge.min = NbAlea;
            marge.max = NbAlea + evitement(p);
         } else {
            marge.min = NbAlea - evitement(p);
            marge.max = NbAlea;
         }

        return marge;

    }

    function attaqueHero() {

        duelHero.classList.remove('strike-medium-left');
        duelHero.classList.remove('striked-medium-left');
        duelHero.classList.remove('defait');
        duelMonstre.classList.remove('striked-medium-right');
        duelMonstre.classList.remove('strike-medium-right');
        duelMonstre.classList.remove('defait');
        monstreStriked.classList.remove('striked-anim');
        monstreDamage.classList.remove('striked-anim');
        strike_number.classList.remove('strike-number-anim');
        monstreDamage.classList.remove('damage-anim');
        
        void duelMonstre.offsetWidth;        
        void duelHero.offsetWidth;

        chance = Math.floor(Math.random() * 100) + 1;

        if (chance < margeEvitement(monstre).min || chance > margeEvitement(monstre).max) {
        
            var attHero = Math.round(hero.att - ((hero.att/100)*defense(monstre)));

            duelHero.classList.add('strike-medium-left');
            duelMonstre.classList.add('striked-medium-right');

            monstreDamage.textContent = "-" + attHero;        
            monstreDamage.classList.add('damage-anim');

            if (attHero < monstre.hp) {
            
                monstre.hp = (monstre.hp - attHero);

            } else {

                monstre.hp = 0;

            }

            monstreHp.value = monstre.hp;

            if (monstreHp.value <= 20) {

                monstreHp.classList.add('zoom-in-zoom-out');

            }

            strike_number.textContent = attHero;
            monstreStriked.classList.add('striked-anim');
            strike_number.classList.add('strike-number-anim');

            duelStatus.textContent = "Attaque du héro";

            if (monstre.hp == 0) {

                monstreHp.classList.remove('zoom-in-zoom-out');
                duelMonstre.classList.add('defait');
                duelStatus.textContent = "Le héro a vaincu le monstre !!!";
                duelHeroButtons.forEach(element => element.disabled = true);

            } else {

                duelHeroButtons.forEach(element => element.disabled = true);
                setTimeout(attaqueMonstre, 2000);

            }

        } else {

            strike_number.textContent = '';
            monstreDamage.textContent = '';

            duelStatus.textContent = "Le monstre a évité l'attaque !";
            duelHeroButtons.forEach(element => element.disabled = true);
            setTimeout(attaqueMonstre, 2500);

        }
        
    }

    function attaqueMonstre() {

        duelHero.classList.remove('strike-medium-left');
        duelHero.classList.remove('striked-medium-left');
        duelHero.classList.remove('defait');
        duelMonstre.classList.remove('strike-medium-right');
        duelMonstre.classList.remove('striked-medium-right');
        duelMonstre.classList.remove('defait');
        heroStriked.classList.remove('striked-anim');
        monstreDamage.classList.remove('striked-anim');
        strike_number.classList.remove('strike-number-anim');      
        heroDamage.classList.remove('damage-anim');

        void duelHero.offsetWidth;        
        void duelMonstre.offsetWidth;

        regenT = regenT + hero.vit;
        
        if (regenT < 100) {
            duelHeroButtons[2].disabled = true;
        } else {
            duelHeroButtons[2].disabled = false;
        }

        chance = Math.floor(Math.random() * 100) + 1;

        if (chance < margeEvitement(hero).min || chance > margeEvitement(hero).max) {
        
            var attMonstre = Math.round(monstre.att - ((monstre.att/100)*defense(hero)));

            duelMonstre.classList.add('strike-medium-right');
            duelHero.classList.add('striked-medium-left');

            heroDamage.textContent = "-" + attMonstre;
            heroDamage.classList.add('damage-anim');

            if (attMonstre < hero.hp) {
            
                hero.hp = (hero.hp - attMonstre);

            } else {

                hero.hp = 0;

            }

            heroHp.value = hero.hp;

            if (heroHp.value <= 20) {

                heroHp.classList.add('zoom-in-zoom-out');

            }

            strike_number.textContent = attMonstre;
            heroStriked.classList.add('striked-anim');
            strike_number.classList.add('strike-number-anim');

            duelStatus.textContent = "Attaque du monstre";

            if (hero.hp == 0) {

                heroHp.classList.remove('zoom-in-zoom-out');
                duelHero.classList.add('defait');
                duelStatus.textContent = "Le héro a été défait par le monstre...";
                duelHeroButtons.forEach(element => element.disabled = true);

            } else {
            
                // duelHeroButtons.forEach(element => element.disabled = false)
                duelHeroButtons[0].disabled = false;
                duelHeroButtons[1].disabled = false;

            }

        } else {

            strike_number.textContent = '';
            heroDamage.textContent = '';

            duelStatus.textContent = "Attaque du monstre évitée !";

            // duelHeroButtons.forEach(element => element.disabled = false);
            duelHeroButtons[0].disabled = false;
            duelHeroButtons[1].disabled = false;

        }
        
    }