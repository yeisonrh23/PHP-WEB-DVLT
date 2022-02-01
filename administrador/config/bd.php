<?php

$host="localhost";
$bd="pagina";
$usuario="root";
$contrasenia="123456789";

try {
    
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion){echo "";}
    
} catch (Exception $ex ) {
    echo $ex->getMessage();
}
?>