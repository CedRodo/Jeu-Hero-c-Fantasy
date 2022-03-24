<?php

abstract class Personnages {
    private int $hp = 100;
    private int $att;
    private int $def;
    private int $vit;
    private int $lvl = 1;

    public function description() {
        echo "<p style='white-space:pre'><strong>Nom du personnage</strong> : ".$this->getNom()."
<strong>Classe</strong> : ".$this->getClasse()."
<strong>Force d'attaque</strong> : ".$this->getAtt()."
<strong>Capacité de défense</strong> : ".$this->getDef()."
<strong>Puissance magique</strong> : ".$this->getMag()."
<strong>Vitesse</strong> : ".$this->getVit()."
</p>";
    }

    public function statut() {
        echo "<p><span style='color: green;'>HP</span> : ".$this->getHp()." | <span style='color: gray;'>XP</span> : ".$this->getXp()." | <span style='color: blue;'>ATT</span> : ".$this->getAtt()." | <span style='color: red;'>DEF</span> : ".$this->getDef()." | <span style='color: fuchsia;'>MAG</span> : ".$this->getMag()." | <span style='color: darkorange ;'>VIT</span> : ".$this->getVit()."</p>";
    }

    public function defense() {
        $block = rand(($this->getDef() - 10), ($this->getDef() + 5));
        return $block;
    }

    public function magie() {

    }

    public function regeneration() {

    }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
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

    /**
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

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
     * Get the value of att
     */ 
    public function getAtt()
    {
        return $this->att;
    }

    /**
     * Set the value of att
     *
     * @return  self
     */ 
    public function setAtt($att)
    {
        $this->att = $att;

        return $this;
    }

    /**
     * Get the value of def
     */ 
    public function getDef()
    {
        return $this->def;
    }

    /**
     * Set the value of def
     *
     * @return  self
     */ 
    public function setDef($def)
    {
        $this->def = $def;

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

    /**
     * Get the value of vit
     */ 
    public function getVit()
    {
        return $this->vit;
    }

    /**
     * Set the value of vit
     *
     * @return  self
     */ 
    public function setVit($vit)
    {
        $this->vit = $vit;

        return $this;
    }

    /**
     * Get the value of lvl
     */ 
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set the value of lvl
     *
     * @return  self
     */ 
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;

        return $this;
    }
}