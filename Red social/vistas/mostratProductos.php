<?php

include '../DAO/FactoryDAO.php';


$postController = FactoryDAO::getInstance()->getPostController();

$posts = $postController->getListaPost();
if(!empty($_POST["texto"])){
    $postNuevo= new Post(rand(1,100),$_POST["texto"],$fechaActual = date('Y-m-d'),$_POST["usuario"]);
    if($postNuevo->getTexto()){

        array_push($posts,$postNuevo);

    }
}
?>
<div>
    <h2>Posts:</h2>
    <?php
        foreach ($posts as $post) {
            echo "<div>";
                echo "<h3>{$post->getTexto()}  {$post->getFechaDePublicacion()}  {$post->getUsuario()}</h3>";
            echo "</div>";
        }
    ?>
</div>
