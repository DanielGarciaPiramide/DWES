<?php

    include '../Controllers/UsuarioController.php';
   
    include '../Controllers/PostController.php';

class FactoryDAO {
    private static $instance = null;

    public $UsuarioController = null;
    public $PostController = null;

    private function __construct() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getUsuarioController(){
        if ($this->UsuarioController === null) {
            $this->UsuarioController = new UsuarioController();
        }
        return $this->UsuarioController;
    }

    public function getPostController() {
        if ($this->PostController === null) {
            $this->PostController = new PostController();
        }
        return $this->PostController;
    }
}

?>





