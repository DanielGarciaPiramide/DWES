<?php

include __DIR__. "/var/www/html/DWES/Red social/dao/PostDAO.php";
include __DIR__. "/var/www/html/DWES/Red social/dao/UsuarioDAO.php";


class FactoryDAO {
    
    public static $instancia=null ;

    public $UsuarioDAO=null;
    public $PostDAO=null;


    private function __contructor() {}

    public static function getInstance(){

        if (self::$instancia==null){
            self::$instancia = new DAOFactory();
        }
        return self::$instancia;
    }

    public function getDAOOfertas(){
        if($this->UsuarioDAO==null){
            $this->UsuarioDAO==new UsuarioDAO();
        }
        return $this->UsuarioDAO;
    }
    public function getDAOPostDAO(){
        if($this->PostDAO==null){
            $this->PostDAO==new PostDAO();
        }
        return $this->PostDAO;
    }
}
?>