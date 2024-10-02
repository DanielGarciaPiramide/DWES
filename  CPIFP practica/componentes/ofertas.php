<?php

include __DIR__ . "/../dao/DAOFactory.php";

$ofertasDAO = DAOFactory::getInstance()->getDAOOfertas();

$ofertas = $ofertasDAO->getOfertas();


foreach ($ofertas as $oferta) {
    echo '<div>';
    echo '<h3>' . $oferta->getTitulo() . '</h3>'; 
    echo '<p>' . $oferta->getContenido() . '</p>';
    echo '</div>';
}
?>
