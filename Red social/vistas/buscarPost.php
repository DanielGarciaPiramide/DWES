<?php

include '../DAO/FactoryDAO.php';
include 'header.php';

$postController = FactoryDAO::getInstance()->getPostController();
if (!empty($_POST["filtroUsuario"]) || !empty($_POST["filtroTexto"]) || !empty($_POST["filtroFecha"])) {
    $filtroUsuario = $_POST["filtroUsuario"];
    $filtroTexto = $_POST["filtroTexto"];
    $filtroFecha = $_POST["filtroFecha"];
    $listaFiltrada= $postController->filtrar3($filtroUsuario,$filtroTexto,$filtroFecha);
}
?>


<form method="post" action="buscarPost.php">

    <p>Filtrar por usuario</p>
    <input name="filtroUsuario">

    <p>Filtrar texto contenido</p>
    <input name="filtroTexto">

    <p>Filtrar por fecha</p>
    <select name="filtroFecha">
        <option value=""></option>
        <option value="asc">ascendente</option>
        <option value="desc">descendente</option>
    </select>
    <button>Buscar</button>
</form>
<?php
if (!empty($listaFiltrada)) {
    foreach ($listaFiltrada as $post) {
    echo "<div>";
        echo "<h3>{$post->getTexto()}  {$post->getFechaDePublicacion()}  {$post->getUsuario()}</h3>";
    echo "</div>";
    }
}
?>
