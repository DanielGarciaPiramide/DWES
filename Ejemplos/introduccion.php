<?php

    echo "Daniel";
    $nombre="Daniel";
    $edad=19;

    echo "<p>Nombre: ".$nombre." edad: ".$edad." <p>";

    $x=3;
    $y=4;

    $suma=$x+$y;

    echo "$suma";

    if ($suma>10){
       echo "<p> El número es mayor que 10";
    }else{
        echo "<p> El número es menor que 10";
    }
    $lista=array("a","b","c","d");

?>


<ul>

<?php

foreach($lista as $letra){

    echo "<li>$letra</li>";


}



?>


</ul>