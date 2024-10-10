
<?php
class Post {
    public $id;
    private $texto;
    private $fechaDePublicacion;
    private $usuario;

    public function __construct($id, $texto, $fechaDePublicacion, $usuario) {
        $this->id = $id;
        $this->texto = $texto;
        $this->fechaDePublicacion = $fechaDePublicacion;
        $this->usuario = $usuario;
       
    }

    function getId(){
        return $this ->id;
    }
    function getTexto(){
        return $this ->texto;
    }
    function getFechaDePublicacion(){
        return $this ->fechaDePublicacion;
    }
    function getUsuario(){
        return $this ->usuario;
    }


    function setId($id){
        return $this ->$id;
    }
    function setTexto($texto){
        return $this ->$texto;
    }
    function setFechaDePublicacion($fechaDePublicacion){
        return $this ->$fechaDePublicacion;
    }
    function setUsuario($usuario){
        return $this ->$usuario;
    }
} 
?>
