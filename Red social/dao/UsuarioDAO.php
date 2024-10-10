<?php

    require_once __DIR__ . '/../models/Usuario.php';

    class UsuarioDAO {

        private $usuarios = [];

        public function __construct() {
       
            $this->usuarios[] = new Usuario(1,"usuario1","usuario1@example.com","contraseña1","1991-01-01");
            $this->usuarios[] = new Usuario(2,"usuario2","usuario2@example.com","contraseña2","1992-02-02");
            $this->usuarios[] = new Usuario(3,"usuario3","usuario3@example.com","contraseña3","1993-03-03");
            $this->usuarios[] = new Usuario(4,"usuario4","usuario4@example.com","contraseña4","1994-04-04");
            $this->usuarios[] = new Usuario(5,"usuario5","usuario5@example.com","contraseña5","1995-05-05");

        }

        public function getAllUsuarios() {
            return $this->usuarios;
        }
        
    }

?>