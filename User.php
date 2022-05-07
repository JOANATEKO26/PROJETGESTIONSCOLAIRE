<?php
class User implements IModel {
    //attributs d'instance
    protected int $id;
    protected $login;
    protected $password;
    protected $role;
    protected static $table="users";

    public function insert(){
        $sql="insert into {$this->table}(login,password)value({$this->login},{$this->password})";
    }
    public function update(){
        $sql="update {$this->table } set login={$this->login},password={$this->password} where id={$this->id}";
        
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
    

    //methodes
    public function __construct(){
        //on appelle le constructeur
    }
        //setters ou mutations
    
        public function setLogin($login){
            $this->login-$login;
        }
        public function setPassword($password){
            $this->password-$password;
        }
        
        //getters
        public function getLogin(){
            return $this->login;
        }
        public function getPassword(){
            return $this->password;
        }
        
    
    
    
    
    

    
}