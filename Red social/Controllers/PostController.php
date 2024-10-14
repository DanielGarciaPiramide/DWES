<?php

include '../DAO/PostDAO.php';
class PostController{

    private $postDAO;

    public function __construct() {
        $this->postDAO = new PostDAO();
    }

    public function getListaPost(){
        return $this->postDAO->getAll();
    }

    public function filtrar3($filtroUsuario, $filtroTexto, $filtroFecha) {

        $allPosts = $this->postDAO->getAll();
        $listaFiltrada = []; 
    
        foreach ($allPosts as $post) {
            $matches = true;
    
            
            if (!empty($filtroUsuario)) {
                $usuarioCoincide = false; 
    
                if ($post->getUsuario() == $filtroUsuario) {
                    $usuarioCoincide = true;
                }
                if (!$usuarioCoincide) {
                    $matches = false;
                }
            }

            if (!empty($filtroTexto)) {
                if (strpos($post->getTexto(), $filtroTexto) === false) {
                    $matches = false; 
                }
            }
    
            if ($matches) {
                $listaFiltrada[] = $post;
            }
        }
    
        if (!empty($filtroFecha)) {
            usort($listaFiltrada, function($a, $b) use ($filtroFecha) {
                if ($filtroFecha == 'asc') {
                    return $a->getFechaDePublicacion() <=> $b->getFechaDePublicacion();
                } else {
                    return $b->getFechaDePublicacion() <=> $a->getFechaDePublicacion();
                }
            });
        }
    
        return $listaFiltrada; 
    }
    
    
    
}
?>