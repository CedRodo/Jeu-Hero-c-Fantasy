
    // DARK MODE //

    var nightmode = document.querySelector(".nightmode");
            nightmode.addEventListener("click", ()=> {
                var body = document.querySelector('body');
                body.classList.toggle('darkmode');
            });


    //////////////////

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
        

    // var img_knight = document.querySelectorAll('img')[0];
    // var img_archer = document.querySelectorAll('img')[1];
    // var img_mage = document.querySelectorAll('img')[2];

    // function hide_knight() {
    // img_knight.classList.toggle('hidden');
    // };

    // function hide_archer() {
    // img_archer.classList.toggle('hidden');
    // };

    // function hide_mage() {
    // img_mage.classList.toggle('hidden');
    // };

    // function hide_img() {
    // img_mage.style.visibility = 'hidden';
    // };

    // function show_img() {
    // img_mage.style.visibility = 'visible';
    // };

    // document.getElementById('ch_knight').addEventListener('click',hide_knight);
    // document.getElementById('ch_archer').addEventListener('click',hide_archer);
    // // document.getElementById('ch_mage').addEventListener('click',hide_mage);
    // document.getElementById('ch_mage').addEventListener('mousedown',hide_img);
    // document.getElementById('ch_mage').addEventListener('mouseup',show_img);


    // var ex_knight = document.getElementById('knight').childNodes[3];
    // var knight = document.createElement('span');
    // knight.innerHTML = '<img height=400px src="assets/img/Knight12.png" alt="chevalier">'
    // ex_knight.onclick = function(){
    //     ex_knight.parentNode.replaceChild(knight, ex_knight);
    // };

    // var ex_archer = document.getElementById('archer').childNodes[3];
    // var archer = document.createElement('span');
    // archer.innerHTML = '<img height=400px src="assets/img/Archer2-2.png" alt="chevalier">'
    // ex_archer.onclick = function(){
    //     ex_archer.parentNode.replaceChild(archer, ex_archer);
    // };

    // var ex_mage = document.getElementById('mage').childNodes[3];
    // var mage = document.createElement('span');
    // mage.innerHTML = '<img height=400px src="assets/img/Mage-2.png" alt="chevalier">'
    // ex_mage.onclick = function(){
    //     ex_mage.parentNode.replaceChild(mage, ex_mage);
    // };

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
    var strike = document.querySelector(".strike");
    var damage = document.querySelectorAll(".damage");
    var duelStatus = document.getElementById("duel_status");
    var heroStatus = document.getElementById("hero_status");
    var monstreStatus = document.getElementById("monstre_status");
    var container = document.createElement("div");

    var hero = {
        'hp': 100,
        'mp': 100,
        'att': 40,
        'def': 40,
        'mag': 5,
        'vit': 15
    }

    var monstre = {
        'hp': 100,
        'mp': 100,
        'att': 40,
        'def': 30,
        'vit': 30
    }

    function defense(p) {
        
        var defense = Math.floor(Math.random() * ((p.def + 10) - (p.def - 10)+ 1)) + (p.def - 10);

        return defense;
        
    }

    function attaqueHero() {

        duelHero.classList.remove('strike-medium-left');
        duelHero.classList.remove('striked-medium-left');
        duelMonstre.classList.remove('striked-medium-right');
        duelMonstre.classList.remove('strike-medium-right');
        strike.classList.remove('strike-anim');
        damage[1].classList.remove('damage-anim');
        
        void duelMonstre.offsetWidth;        
        void duelHero.offsetWidth;
        
        var attHero = Math.round(hero.att - ((hero.att/100)*defense(monstre)));

        duelHero.classList.add('strike-medium-left');
        duelMonstre.classList.add('striked-medium-right');

        damage[1].textContent = "-" + attHero;
        
        damage[1].classList.add('damage-anim');

        if (attHero < monstre.hp) {
        
        monstre.hp = (monstre.hp - attHero);

        } else {

            monstre.hp = 0;

        }

        monstreHp.value = monstre.hp;

        if (monstreHp.value <= 20) {

            monstreHp.classList.add('zoom-in-zoom-out');

        }

        strike.textContent = attHero;

        strike.classList.add('strike-anim');

        duelStatus.textContent = "Attaque du héro";

        heroStatus.innerHTML = `<h4 style='text-align: center;'>Attaque portée : <span style='color: green;'>${attHero}</span></h4>`
        
        monstreStatus.innerHTML = `<h4 style='text-align: center;'>HP : <span style='color: red;'>${monstre.hp}</span></h4>`

        if (monstre.hp == 0) {

            monstreHp.classList.remove('zoom-in-zoom-out');

            duelStatus.textContent = "Le héro a vaincu le monstre !!!";

            duelHeroButtons.forEach(element => element.disabled = true);

        } else {

        console.log("Il est toujours là");

        duelHeroButtons.forEach(element => element.disabled = true);

        setTimeout(attaqueMonstre, 2000);

        }
        
    }

    function attaqueMonstre() {

        duelHero.classList.remove('strike-medium-left');
        duelHero.classList.remove('striked-medium-left');
        duelMonstre.classList.remove('strike-medium-right');
        duelMonstre.classList.remove('striked-medium-right');
        strike.classList.remove('strike-anim');      
        damage[0].classList.remove('damage-anim');

        void duelHero.offsetWidth;        
        void duelMonstre.offsetWidth;
        
        var attMonstre = Math.round(monstre.att - ((monstre.att/100)*defense(hero)));

        duelMonstre.classList.add('strike-medium-right');
        duelHero.classList.add('striked-medium-left');

        damage[0].textContent = "-" + attMonstre;
        damage[0].classList.add('damage-anim');

        if (attMonstre < hero.hp) {
        
        hero.hp = (hero.hp - attMonstre);

        } else {

            hero.hp = 0;

        }

        heroHp.value = hero.hp;

        if (heroHp.value <= 20) {

            heroHp.classList.add('zoom-in-zoom-out');

        }

        strike.textContent = attMonstre;

        strike.classList.add('strike-anim');

        duelStatus.textContent = "Attaque du monstre";

        monstreStatus.innerHTML = `<h4 style='text-align: center;'>Attaque : <span style='color: green;'>${attMonstre}</span></h4>`

        heroStatus.innerHTML = `<h4 style='text-align: center;'>HP : <span style='color: red;'>${hero.hp}</span></h4>`

        if (hero.hp == 0) {

            heroHp.classList.remove('zoom-in-zoom-out');

            duelStatus.textContent = "Le héro a été défait par le monstre...";

            duelHeroButtons.forEach(element => element.disabled = true);

        } else {
        
        duelHeroButtons.forEach(element => element.disabled = false)

        }
        
    }