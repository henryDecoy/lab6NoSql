<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://esalinas:e123456@basedatos.5fqs1gp.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("basedatos");
    
    $tablaColeccion = $conexion->comentario;

    $resultados = $tablaColeccion->deleteOne(["_id"=> new MongoDB\BSON\ObjectId($_GET["id"])]);
    echo "Registros eliminados ". $resultados->getDeletedCount();
