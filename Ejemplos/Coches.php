<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include'parteComun.php';

    class Coche {
        
        public $matricula;
        public $marca;
        public $modelo;
        public $km;


        function __construct($matricula,$marca,$modelo,$km){
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->km = $km;

        }
        function get_matricula() {
          return $this->matricula;
        }
        function get_marca() {
            return $this->marca;
        }
        function get_modelo() {
            return $this->modelo;
        }
        function get_km() {
            return $this->km;
        }
      }



    

    $coche1 = new Coche(123,"tesla","adwdsd",32);
    $coche2 = new Coche(2321,"tesla","adwdsd",32);
    $coche3 = new Coche(312321,"tesla","adwdsd",32);
    
    $matriculaNueva=$$_POST["matricula"];
    $marcaNueva=$$_POST["matricula"];
    $modeloNueva=$$_POST["matricula"];
    $kmNueva=$$_POST["matricula"];

    $cocheNuevo= new Coche($matriculaNueva,$marcaNueva,$modeloNueva,$kmNueva);

    $lista=array($coche1,$coche2,$coche3,$cocheNuevo);


    foreach ( $lista as $coche){
        echo ' 
            <ul>
                <li>Matricula: '.$coche->get_matricula().'</li>
                <li>Marca: '.$coche->get_marca().'</li>
                <li>Modelo: '.$coche->get_modelo().'</li>
                <li>Km: '.$coche->get_km().'</li>
            </ul>
        
        
        
        
        
        ';



    }

   
    ?>


    
        
    
</body>
</html>