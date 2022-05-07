<?php
class Etudiant extends User{
    private $nomcomplet;
    private $matricule;
    //one to many avec classe
    public array $inscriptions=[];
    //fonctions
    //one to many avec inscription
    public function inscriptions():array{
        $sql="select * from inscription i where i.etudiant_id={}";
        return[];
    }
    

    //methodes
    public function __construct(){
        $this->role="ROLE_ETUDIANT";
    }
    //setters ou mutations
    
    public function setNomComplet($nomcomplet){
        $this->nomcomplet-$nomcomplet;
    }
    public function setMatricule($matricule){
        $this->matricule-$matricule;
    }

        //getters
        public function getNomComplet(){
            return $this->nomcomplet;
        }
        public function getMatricule(){
            return $this->matricule;
        }
        

    



    

    /**
     * Get the value of inscriptions
     */ 
    public function getInscriptions()
    {
        return $this->inscriptions;
    }

    /**
     * Set the value of inscriptions
     *
     * @return  self
     */ 
    public function setInscriptions($inscriptions)
    {
        $this->inscriptions = $inscriptions;

        return $this;
    }
}