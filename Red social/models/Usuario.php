<?php
class Usuario {
    public $id;
    private $nombreDeUsuario;
    public $email;
    public $contraseña;
    public $fechaDeNacimiento;

    public function __construct($id, $nombreDeUsuario,$email,$contraseña,$fechaDeNacimiento) {
        $this->id = $id;
        $this->nombreDeUsuario = $nombreDeUsuario;
        $this->email = $email;
        $this->contraseña = $contraseña;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    }

    function getNombreDeUsuariogetNombre(){
        return $this ->nombreDeUsuario;
    }
    function getDescipcion(){
        return $this ->nombreDeUsuario;
    }
    function getEmail(){
        return $this ->email;
    }
    function getContraseña(){
        return $this ->contraseña;
    }
    function getFechaDeNacimientocio(){
        return $this ->fechaDeNacimiento;
    }
}
?>
