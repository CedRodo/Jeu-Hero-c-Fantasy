<?php

interface Monstres {
    function getType();
    function attaque(Heros $hero);
}