<?php
class Proffesseur extends User{
    private $grade;

    public function adresse():Adresse{
        $sql="select a.* from proffesseur p,adresse a where a.id=p.adresse_id where p.id={$this->id}";
        return new Adresse();
    }

    public function __construct(){
        $this->role="ROLE_PROFFESSEUR";
        
    }



    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}