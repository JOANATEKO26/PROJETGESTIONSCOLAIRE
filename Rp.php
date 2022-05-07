<?php
class Rp extends User{
    private $adresse;
    

    //methodes
    public function __construct(){
        $this->role="ROLE_RP";
    }
    //setters ou mutations
    
    public function setAdresse($adresse){
        $this->adresse-$adresse;
    }
    //getters
    public function getAdresse(){
        return $this->adresse;
    }
       
    


    
}