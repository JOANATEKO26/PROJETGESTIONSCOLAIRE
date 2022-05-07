<?php

class Classe implements IModel {
    //attributs d'instance
    private int  $id;
    private $niveau;
    private $filiere;
    private $libelle;
    private static $table="classes";

    public function insert(){
        $sql="insert into {$this->table}(niveau,filiere,libelle)value({$this->niveau},{$this->filiere}},{$this->libelle})";
    }
    public function update(){
        $sql="update {$this->table} set niveau={$this->niveau},filiere={$this->filiere}},libelle={$this->libelle} where id={$this->id}";
        
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
    //les attributs navigationnels
    //one to many avec cours
    private array $cours=[];
    //par des methodes
    public function cours():array{
        $sql="select * from cours c where c.classe id={}";
        return[];
    }
    //one to many avec inscriptions

    public function inscriptions():array{
        $sql="select * from inscription i where i.classe_id={}";
        
        return[];
    }

    private array $inscriptions=[];

    //methodes
    public function __construct(){
        //on appelle le constructeur
    }
    //setters ou mutations
    
    public function setNiveau($niveau){
        $this->niveau-$niveau;
    }
    public function setFiliere($filiere){
        $this->filiere-$filiere;
    }
    public function setLibelle($libelle){
        $this->libelle-$libelle;
    }
    //getters
    public function getNiveau(){
        return $this->niveau;
    }
    public function getFiliere(){
        return $this->filiere;
    }
    public function getLibelle(){
        return $this->niveau." ".$this->filiere;
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