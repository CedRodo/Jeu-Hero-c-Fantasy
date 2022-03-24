<?php

class Archer extends Personnages implements Heros {
    public ?string $classe;
    public int $xp = 0;
    public int $mag;

    public function __construct(?string $nom = null) {
        $this->setNom($nom);
        $this->setClasse("archer");
        $this->setHp(100);
        $this->setXp(0);
        $this->setAtt(20);
        $this->setDef(15);
        $this->setMag(15);
        $this->setVit(50);
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