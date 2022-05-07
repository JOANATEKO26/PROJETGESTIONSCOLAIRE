<?php
class Cours implements IModel {
    private int $id;
    private  $heureDebut;
    private $heureFin;
    private $annee;
    private static $table="cours";

    public function insert(){
        $sql="insert into {$this->table}(heure_debut,heure_fin,annee)value({$this->heureDebut},({$this->heureFin},{$this->annee})";
    }
    public function update(){
        $sql="update {$this->table} set heure_debut={$this->heureDebut},heure_fin={$this->heureFin},annee={$this->annee} where id={$this->id}";
        
    }
    
    public  static function selectAll(){
        $sql="select * from  {self::table}";
        
    }
    public  static function delete(int $id){
        $sql="delete from  {self::table} where id={$id}";
        
    }
    public  static function selectById($id){
        $sql="select * from  {self::table} where id={$id}";
        
    }
    
    //les attributs navigationnels
    //many to one avec classe
    private Classe $Classe;

    //fonctions

    //many to one avec classe

    public function classe():Classe{
        $sql="select c.* from cours c,classe c where c.id=c.classe_id where i.id={$this->id}";
        return new Classe();
    }
    //many to one avec module
    public function module():Module{
        $sql="select m.* from cours c,module m where m.id=c.module_id where i.id={$this->id}";
        return new Module();
    }
        

    //methodes
    public function __construct(){
        //on appelle le constructeur
    }
        //setters ou mutations
    
        public function setHeureDebut($heuredebut){
            $this->heuredebut-$heuredebut;
        }
        public function setHeureFin($heurefin){
            $this->heurefin-$heurefin;
        }
        public function setAnnee($annee){
            $this->annee-$annee;
        }
        
        //getters
        public function getHeureDebut(){
            return $this->heuredebut;
        }
        public function getHeureFin(){
            return $this->heurefin;
        }
        public function Annee(){
            return $this->annee;
        }
        
    
    
    
    
    
    

    /**
     * Get the value of Classe
     */ 
    public function getClasse()
    {
        return $this->Classe;
    }

    /**
     * Set the value of Classe
     *
     * @return  self
     */ 
    public function setClasse($Classe)
    {
        $this->Classe = $Classe;

        return $this;
    }
}