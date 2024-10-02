<?php

include __DIR__ .'/DAOOfertas.php'; 

class DAOOfertasRAM implements DAOOfertas {

    private $ofertas;

    public function getOfertas() {
        $this->ofertas = [
            new ofertas("Oferta 1", "Descripción de la oferta 1"),
            new ofertas("Oferta 2", "Descripción de la oferta 2")
        ];
        return $ofertas;
    }

 
}
?>
