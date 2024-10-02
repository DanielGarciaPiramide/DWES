<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include'header.php';


    include'clases/Coche.php';


    $coche1 = new Coche(123,"tesla","adwdsd",32);
    $coche2 = new Coche(2321,"tesla","adwdsd",32);
    $coche3 = new Coche(312321,"tesla","adwdsd",32);
    $lista=array($coche1,$coche2,$coche3);
    
    $matriculaNueva=$_POST["matricula"];
    $marcaNueva=$_POST["marca"];
    $modeloNueva=$_POST["modelo"];
    $kmNueva=$_POST["km"];

    $cocheNuevo= new Coche($matriculaNueva,$marcaNueva,$modeloNueva,$kmNueva);

    $matriculaBusqueda=$_GET["matricula"];
    if($matriculaBusqueda!=null){
        foreach ( $lista as $coche){
            if($coche->get_matricula()==$matriculaBusqueda)
            echo ' 
                <ul>
                    <li>Matricula: '.$coche->get_matricula().'</li>
                    <li>Marca: '.$coche->get_marca().'</li>
                    <li>Modelo: '.$coche->get_modelo().'</li>
                    <li>Km: '.$coche->get_km().'</li>
                </ul>
            ';
        }
    }else{

        if ($cocheNuevo->get_matricula()!=null){

            array_push($lista , $cocheNuevo);

        }

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
    }
    ?>





</body>
</html>