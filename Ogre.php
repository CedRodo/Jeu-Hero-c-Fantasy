<?php

class Ogre extends Personnages implements Monstres {
    private ?string $type;

    public function __construct(?string $type = "ogre", int $hp = 100, int $xp = 0, int $attaque = 50, int $defense = 40, int $vitesse = 10) {
        $this->setType($type);
        $this->setHp($hp);
        $this->setAtt($attaque);
        $this->setDef($defense);
        $this->setVit($vitesse);
    }

    public function attaque(Heros $hero) {
        $atk = ($this->getAtt()-(($this->getAtt()/100)*$hero->defense()));
        $hero->setHp(($hero->getHp() - $atk));
        echo "L'attaque de ".$this->getType()." : ".$atk;
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