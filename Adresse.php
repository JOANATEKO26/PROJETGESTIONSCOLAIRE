<?php
class Adresse {
    private $id;
    private $ville;
    private $quartier;

    public function proffesseur():Proffesseur{
        $sql="select p.* from adresse a,proffesseur p where p.id=a.proffesseur_id where a.id={$this->id}";
        return new Proffesseur();
    }

    public function __construct(){
        
    }




    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of quartier
     */ 
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set the value of quartier
     *
     * @return  self
     */ 
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;

        return $this;
    }
}