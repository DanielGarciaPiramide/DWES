<?php

include __DIR__. "/var/www/html/DWES/ CPIFP practica/dao/ofretas/DAOOfertasRAM.php";

class DAOFactory {
    
    public static $instancia=null ;

    public $DAOOfertas=null;

    private function __contructor() {}

    public static function getInstance(){

        if (self::$instancia==null){
            self::$instancian = new DAOFactory();
        }
        return self::$instancian;
    }

    public function getDAOOfertas(){
        if($this->DAOOfertas==null){
            $this->DAOOfertas==new DAOOfertasRAN();
        }
        return $this->DAOOfertas;
    }
}
?>