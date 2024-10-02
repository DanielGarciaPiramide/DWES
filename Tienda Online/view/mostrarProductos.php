<?php
    require_once __DIR__ . '/../controller/ProductoController.php';
    
    $productoController = new ProductoController();
    $destacados = $productoController->listarDestacados();
    $nombre = $_POST['nombre']??null;
    if($nombre !== null){

        array_push($destacados , new Producto(rand(1, 100), $nombre, $descripcion = $_POST['descripcion'], $categoria = $_POST['categoria'], $precio = $_POST['precio'],  $destacado = $_POST['destacado']));
    
    }
?>
    
<h1>Productos destacados:</h1>
    <div class="productos">
        <?php
            foreach ($destacados as $producto) {

                echo("<div class=\"producto\">");
               
                    echo ("<h3>{$producto->getNombre()}</h3>");
                    echo ("<p>{$producto->getDescipcion()}</p>");
                    echo ("<p>Precio: {$producto->getPrecio()}</p>");
                    echo ("<p>Categoria: {$producto->categoria}</p>");

               
                echo("</div>");
            }
        ?>
    </div>






