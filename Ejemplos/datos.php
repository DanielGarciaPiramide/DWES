<?php

$email=$_POST["email"];

$mensaje=$_POST["mensaje"];
$datos=array($email,"$mensaje");


print_r($datos);

?>