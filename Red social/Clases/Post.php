<?php

class Post {
    private $id;
    private $texto;
    private $fechaDePublicacion;
    private $usuario;

    public function __construct($id, $texto, $fechaDePublicacion, $usuario) {
        $this->id = $id;
        $this->texto = $texto;
        $this->fechaDePublicacion = $fechaDePublicacion;
        $this->usuario = $usuario;
    }

    

    public function getId() {
        return $this->id;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getFechaDePublicacion() {
        return $this->fechaDePublicacion;
    }

    public function getUsuario() {
        return $this->usuario;
    }
}

?>