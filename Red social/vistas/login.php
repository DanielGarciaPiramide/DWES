<?php

    include '../DAO/FactoryDAO.php';
    include 'header.php';


    $usuarioController = FactoryDAO::getInstance()->getUsuarioController();

    if(!empty($_POST["emailUsuario"])){
        $emailLogin=$_POST["emailUsuario"];
        $contraseñaLogin=$_POST["contraseñaUsuario"];
        
        $login=$usuarioController->login($emailLogin,$contraseñaLogin);
    }

   

    

?>

<form method="post" action="login.php">
    <h1>Iniciar Sesion</h1>

    <label>email: </label>
    <input type="email" name="emailUsuario">

    <label>contraseña: </label>
    <input type="contraseña" name="contraseñaUsuario">
    <button>Iniciar Sesion</button>


</form>

<?php

    if(!empty($_POST["emailUsuario"])){

        if($login){
 
            echo "<h3>Hola {$login->getUsername() } has iniciado sesion correctamente</h3>";

        
        }else{

            echo "<h3> email o contraseña incorecta </h3>";

        }
    }



?>