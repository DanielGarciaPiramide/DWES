<?php

    require_once __DIR__ . '/../model/Producto.php';

class ProductoDAO {
    private $productos = [];

    public function __construct() {

        $this->productos[] = new Producto(1, "Producto 1", "Descripción del producto 1", "Electrónica", 1, false);
        $this->productos[] = new Producto(2, "Producto 2", "Descripción del producto 3", "Juguetes", 5, true);
        $this->productos[] = new Producto(3, "Producto 3", "Descripción del producto 3", "Electrónica", 4, true);
        $this->productos[] = new Producto(4, "Producto 4", "Descripción del producto 3", "Juguetes", 3, false);
        $this->productos[] = new Producto(5, "Producto 5", "Descripción del producto 3", "Electrónica", 2, true);

    }
       public function addProducto($nombre, $descripcion, $categoria, $precio, $destacado) {

        $this->productos[] = new Producto(rand(1,100), $nombre, $descripcion, $categoria, $precio, $destacado);

    }


    public function getAllProductos() {
        return $this->productos;
    }

    public function getProductosOrdenadosPorPrecio($orden = 'asc') {
        usort($this->productos, function($a, $b) use ($orden) {
            if ($orden === 'asc') {
                return $a->precio > $b->precio;
            } else {
                return $a->precio < $b->precio;
            }
        });
        return $this->productos;
    }

 

    public function getDestacados() {
        if (!is_array($this->productos)) {
            return []; 
        }
    
        $productosDestacados = [];
    
        foreach ($this->productos as $producto) {
            if ($producto->destacado === true) {
                array_push($productosDestacados, $producto);
            }
        }
        return $productosDestacados;
    }
    

    public function getProductosByCategoria($categoria) {
        
        $productosFiltrados = [];
        
        foreach ($this->productos as $producto) {
            
            if ($producto->categoria === $categoria) {
                
                array_push($productosFiltrados, $producto);
            }
        }
        
        return $productosFiltrados;
    }
    
    public function getProductosByNombre($nombre) {

        $productosFiltrados = [];
            
        foreach ($this->productos as $producto) {
    
            if ($producto->getNombre() === $nombre) {

                
    
                array_push($productosFiltrados,$producto);
            }
        }
        return $productosFiltrados;

    }
}
?>



<q>

</q>
