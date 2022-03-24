<?php

class Chevalier extends Personnages implements Heros {
    public ?string $classe;
    public int $xp;
    public int $mag;

    public function __construct(?string $nom = null, ?string $classe = "chevalier", int $hp = 100, int $xp = 0, int $attaque = 40, int $defense = 40, int $magie = 5, int $vitesse = 15) {
        $this->setNom($nom);
        $this->setClasse($classe);
        $this->setHp($hp);
        $this->setXp($xp);
        $this->setAtt($attaque);
        $this->setDef($defense);
        $this->setMag($magie);
        $this->setVit($vitesse);
    }

    public function attaque(Monstres $monstre) {
        $atk = round(($this->getAtt()-(($this->getAtt()/100)*$monstre->defense())));
        if ($atk > $monstre->getHp()) {
            $monstre->setHp(0);
        } else {
        $monstre->setHp(($monstre->getHp() - $atk)); }
        echo "Attaque réussie de ".$this->getNom();
        echo "<br/><br/>";
        echo "Dégats portés : ".$atk;
        echo "<br/><br/>";
        echo "La vie de ".$monstre->getType()." : ".$monstre->getHp();
    }

    public function defense() {
        $block = rand(($this->getDef() - 10), ($this->getDef() + 5));
        return $block;
    }

    /**
     * Get the value of classe
     */ 
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */ 
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get the value of xp
     */ 
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set the value of xp
     *
     * @return  self
     */ 
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get the value of mag
     */ 
    public function getMag()
    {
        return $this->mag;
    }

    /**
     * Set the value of mag
     *
     * @return  self
     */ 
    public function setMag($mag)
    {
        $this->mag = $mag;

        return $this;
    }

}

?>