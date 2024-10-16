<?php
class Categoria {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function setNombre($nombre){

        $this->nombre = $nombre;
    }
}
?>
