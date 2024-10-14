<?php


include '../DAO/UsuarioDAO.php';


class UsuarioController{

    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function getListaUsuario(){
        return $this->usuarioDAO->getAll();
    }

    public function login($emailLogin,$contraseñaLogin) {
        $allUsuarios = $this->usuarioDAO->getAll();
        
        
        foreach($allUsuarios as $usuario) {
            
        
            if($usuario->getEmail() ==$emailLogin && $usuario->getContraseña() == $contraseñaLogin) {
                   
                return $usuario;  
            }
        }
    
        return false;  
    }

    public function registrarUsuario($usuario){
        $this->usuarioDAO->add($usuario);
    }
}
?>