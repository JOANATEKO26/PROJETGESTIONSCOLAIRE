<?php
class Inscription implements IModel {
    private int $id;
    private  $dateInscription;
    private $annee;
    private static $table="inscriptions";

    public function insert(){
        $sql="insert into {$this->table}(date_inscription,annee)value({$this->dateInscription},{$this->annee})";
    }
    public function update(){
        $sql="update {$this->table} set date_inscription={$this->dateInscription},annee={$this->annee} where id={$this->id}";
        
    }
    
    public  static function selectAll(){
        $sql="select * from {self::table}";
        
    }
    public  static function delete($id){
        $sql="delete from {self::table} where id={$id}";
        
    }
    public  static function selectById($id){
        $sql="select * from {self::table} where id={$id}";
        
    }
    

    //many to one avec classe
    private Classe $classe;

    //many to one avec etudiant

    private Etudiant $etudiant;
    //fonctions

    //many to one avec classe

    public function classe():Classe{
        $sql="select c.* from inscriptions i,classe c where c.id=i.classe_id where i.id={$this->id}";
        return new Classe();
    }

    //many to one avec etudiant


    public function etudiant():Etudiant{
        $sql="select e.* from inscriptions i,etudiant e where e.id=i.etudiant_id where i.id={$this->id}";
        
        return new Etudiant();
    }

    //methodes
    public function __construct(){
        //on appelle le constructeur
    }
        //setters ou mutations
    
        public function setDateInscription($dateinscription){
            $this->dateinscription-$dateinscription;
        }
        
        public function setAnnee($annee){
            $this->annee-$annee;
        }
        
        //getters
        public function getDateInscription(){
            return $this->dateinscription;
        }
        
        public function Annee(){
            return $this->annee;
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
     * Get the value of etudiant
     */ 
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set the value of etudiant
     *
     * @return  self
     */ 
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    
}