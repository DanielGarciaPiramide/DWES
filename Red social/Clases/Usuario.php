<?php

class Usuario {
    private $id;
    private $username;
    private $email;
    private $contraseña;
    private $fechaDeNacimiento;

    public function __construct($id, $username,$email, $contraseña, $fechaDeNacimiento, ) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->contraseña = $contraseña;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    }

    public function getId() {
        return $this->id;
    }
    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getcontraseña() {
        return $this->contraseña;
    }

    public function getFechaDeNacimiento() {
        return $this->fechaDeNacimiento;
    }
}

?>