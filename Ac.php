<?php
class Ac extends User{
    private $email;
    

    //methodes
    public function __construct(){
        $this->role="ROLE_AC";
    }
    //setters ou mutations
    
    public function setEmail($email){
        $this->email-$email;
    }
        //getters
        public function getEmail(){
            return $this->email;
        }
        
    


    
}