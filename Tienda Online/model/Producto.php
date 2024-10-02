
<?php
class Producto {
    public $id;
    private $nombre;
    private $descripcion;
    public $categoria;
    public $precio;
    public $destacado;

    public function __construct($id, $nombre, $descripcion, $categoria, $precio, $destacado) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->destacado = $destacado;
    }

    function getNombre(){
        return $this ->nombre;
    }
    function getDescipcion(){
        return $this ->descripcion;
    }
    function getPrecio(){
        return $this ->precio;
    }
  
}
?>
