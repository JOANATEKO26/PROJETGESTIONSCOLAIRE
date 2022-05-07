<?php
class Module implements IModel{
    private int $id;
    private  $libelle;
    private static $table="modules";


    public function insert(){
        $sql="insert into  {$this->table}(libelle)value({$this->libelle})";
    }
    public function update(){
        $sql="update  {$this->table} set libelle={$this->libelle} where id={$this->id}";
        
    }
    
    public  static function selectAll(){
        $sql="select * from {self::table}";
        
    }
    public  static function delete($id){
        $sql="delete from   {self::table} where id={$id}";
        
    }
    public  static function selectById($id){
        $sql="select * from   {self::table} where id={$id}";
        
    }
    



    //les attributs navigationnels
    //one to many avec cours
    private  array $cours=[];
    //fonctions
    //one to many avec cours
    public function cours():array{
        $sql="select c.* from module m,cours c where c.id=i.cours_id where i.id={$this->id}";
        return[];
    }
    

    //methodes
    public function __construct(){
        //on appelle le constructeur
    }
        //setters ou mutations
    
        public function setLibelle($libelle){
            $this->libelle-$libelle;
        }
        
        
        //getters
        public function getLibelle(){
            return $this->libelle;
        }
       
        
    
    
    
    
    

    
    

    

    /**
     * Get the value of cours
     */ 
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set the value of cours
     *
     * @return  self
     */ 
    public function setCours($cours)
    {
        $this->cours = $cours;

        return $this;
    }
}