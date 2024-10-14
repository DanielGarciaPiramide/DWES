<?php

    
    include 'header.php';
    include '../DAO/FactoryDAO.php';

    $usuarioController = FactoryDAO::getInstance()->getUsuarioController();
    if(!empty($_POST["nombre"])){

        $nombreRegistro=$_POST["nombre"];
        $emailRegistro=$_POST["email"];
        $contraseñaRegistro=$_POST["contraseña"];
        $fechaDeNacimientoRegistro=$_POST["fechaDeNacimiento"];

    
        $nuevoUsuario =new Usuario(rand(1,100), $nombreRegistro, $emailRegistro, $contraseñaRegistro, $fechaDeNacimientoRegistro);
        $usuarioController->registrarUsuario( $nuevoUsuario);

    }
?>
<h1>Registrarse</h1>
<form method="post" action="registrarUsuario.php">

    <label>Nombre</label>
    <input name="nombre">

    <label>email</label>
    <input type="email" name="email">

    <label>contraseña</label>
    <input type="password" name="contraseña">

    <label>Feha de nacimiento</label>
    <input type="date" name="fechaDeNacimiento">

    <button>Registrarse</button>
</form>
