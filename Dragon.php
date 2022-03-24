<?php

class Dragon extends Personnages implements Monstres {
    private ?string $type;

    public function __construct(?string $type = "dragon", int $hp = 100, int $xp = 0, int $attaque = 40, int $defense = 30, int $vitesse = 30) {
        $this->setType($type);
        $this->setHp($hp);
        $this->setAtt($attaque);
        $this->setDef($defense);
        $this->setVit($vitesse);
    }

    public function attaque(Heros $hero) {
        $atk = round(($this->getAtt()-(($this->getAtt()/100)*$hero->defense())));
        if ($atk > $hero->getHp()) {
            $hero->setHp(0);
        } else {
        $hero->setHp(($hero->getHp() - $atk)); }
        echo "Attaque réussie de ".$this->getType();
        echo "<br/><br/>";
        echo "Dégats portés : ".$atk;
        echo "<br/><br/>";
        echo "La vie de ".$hero->getNom()." : ".$hero->getHp();
    }

    public function defense() {
        $block = rand(($this->getDef() - 10), ($this->getDef() + 5));
        return $block;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}