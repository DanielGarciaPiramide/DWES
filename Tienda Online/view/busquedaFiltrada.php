<?php
    require_once __DIR__ . '/../controller/ProductoController.php';
    require_once __DIR__ . '/../controller/CategoriaController.php';

    $productoController = new ProductoController();
    $categoriaController = new CategoriaController();

    $categoria = $_GET['categoria'];
    $nombre = $_GET['nombre'];
    $orden_precio = $_GET['orden_precio'];
    $filtros = ['categoria' => $categoria,'nombre' => $nombre,'orden_precio' => $orden_precio];

    $productos = $productoController->listarProductos($filtros);
    $categorias = $categoriaController->listarCategorias();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <h1>Buscar Productos</h1>
   
    <form method="GET" action="busquedaFiltrada.php">

        <input name="nombre" placeholder="Buscar por nombre" value="<?php echo $nombre; ?>">

        <select name="categoria">

            <option value="">Todas las Categorías</option>

            <?php

                foreach ($categorias as $cat){

                    echo("<option value=\"$cat->nombre\">$cat->nombre");
                    echo("</option>");
                
                }
            
            ?>
            
        </select>


        <select name="orden_precio">

            <option value="asc">Precio Ascendente</option>

            <option value="desc">Precio Descendente</option>

        </select>

        <button type="submit">Buscar</button>

    </form>

    <div class="productos">

    <?php

        foreach ($productos as $producto){
            
            echo(" <div class=\"producto\">");

            echo ("<h3>{$producto->getNombre()}</h3>");
            echo ("<p>{$producto->getDescipcion()}</p>");
            echo ("<p>Precio: {$producto->getPrecio()}</p>");
            echo ("<p>Categoria: {$producto->categoria}</p>");

            echo(" </div>");
        }

    ?>
        
    </div>
</body>
</html>