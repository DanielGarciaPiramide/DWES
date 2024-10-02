<?php

class ofertas{

private $titulo;
private $contenido;


function __contructor($titulo,$contenido){
    $this->titulo=$titulo;
    $this->contenido=$contenido;
}
function getTitulo(){
    return $this ->titulo;
}
function getContenido(){
    return $this ->contenido;
}
}
?>