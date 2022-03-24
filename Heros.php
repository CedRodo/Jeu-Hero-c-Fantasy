<?php

interface Heros {
    function getClasse();
    function getXp();
    function getMag();
    function attaque(Monstres $monstre);

}