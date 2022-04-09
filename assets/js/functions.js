
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


    var combat = document.getElementById("test");
    var container = document.createElement("div");
    var duel = combat.appendChild(container);
    function attaque() {
        
        duel.innerHTML += 
        "<h4><span style='text-transform: uppercase;'><?= $hero->getNom(); ?></span> <span style='font-style: italic; font-weight: normal;text-transform: lowercase;'>(<?= $hero->getClasse(); ?>)</span></h4><p><?php $hero->attaque($monstre); ?></p><br><br><h4 style='text-transform: uppercase;'><?= $monstre->getType(); ?></h4><p><?php $monstre->attaque($hero); ?></p><p><?= $hero->getHp() ;?></p>";
    }


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

        var container = document.getElementById('container_src');

        var img_knight = document.getElementById('select_knight');

        container.innerHTML = img_knight.src;
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