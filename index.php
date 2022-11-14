<?php 

require_once("vendor/autoload.php");
$cadena = "mongodb+srv://esalinas:e123456@basedatos.5fqs1gp.mongodb.net/?retryWrites=true&w=majority";
$cliente = new MongoDB\Client($cadena);
$conexion = $cliente->selectDataBase("basedatos");

$tablaColeccion = $conexion->comentario;

$resultado = $tablaColeccion->find();

foreach($resultado as $r){
    $apellido = isset($r->apellido)?$r->apellido:"";
   echo $r->_id . " - " . $r->nombre  . " - " . $r->correo  . " - " . $r->mensaje . " - " . $apellido .  "<br>";
}
