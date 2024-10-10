<?php
    require_once __DIR__ . '/../controller/Post.php';
    
    $postController = new $PostController();
    $posts = $postController->listarDestacados();
    $nombre = $_POST['nombre']??null;
    if($nombre !== null){

        array_push($posts , new Producto(rand(1, 100), $nombre, $descripcion = $_POST['descripcion'], $categoria = $_POST['categoria'], $precio = $_POST['precio'],  $destacado = $_POST['destacado']));
    
    }
?>
    
<h1>Productos destacados:</h1>
    <div class="productos">
        <?php
            foreach ($post as $propostsducto) {

                echo("<div class=\"producto\">");
               
                    echo ("<h3>{$post->getNombre()}</h3>");
                    echo ("<p>{$post->getDescipcion()}</p>");
                    echo ("<p>Precio: {$post->getPrecio()}</p>");
                    echo ("<p>Categoria: {$post->categoria}</p>");

               
                echo("</div>");
            }
        ?>
    </div>

