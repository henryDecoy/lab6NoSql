<?php 
    require_once("vendor/autoload.php");
        $cadena = "mongodb+srv://esalinas:e123456@basedatos.5fqs1gp.mongodb.net/?retryWrites=true&w=majority";
        
        $cliente = new MongoDB\Client($cadena);
        $conexion = $cliente->selectDataBase("basedatos");

        $tablaColeccion = $conexion->comentario;

        $resultado = $tablaColeccion->insertOne(["nombre"  => $_GET["n"], 
                                                "correo"  => $_GET["c"],
                                                "mensaje" => $_GET["m"],
                                                "apellido"=> $_GET["a"]]);
        echo "Se insertó el registro con id " . $resultado->getInsertedId();
?>