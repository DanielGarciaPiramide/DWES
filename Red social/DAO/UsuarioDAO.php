<?php

    include '../Clases/Usuario.php';


    class UsuarioDAO{

        private $usuarios;

        function __construct() {
            $this->usuarios = array();
            $this->add(new Usuario(1, 'usuario1','email@1', 'contraseña1', '2021-01-09'));
            $this->add(new Usuario(2, 'usuario2','email@2', 'contraseña2', '2021-01-09'));
            $this->add(new Usuario(3, 'usuario3', 'email@3','contraseña3', '2021-01-09'));
            $this->add(new Usuario(4, 'usuario4', 'email@4','contraseña4', '2021-01-09'));
        }

        function add(Usuario $usuario) {
            $this->usuarios[] = $usuario;
        }
        public function getAll() {
            return $this->usuarios;
        }



    }

?>