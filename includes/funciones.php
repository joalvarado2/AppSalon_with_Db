<?php

function obtenerServicios() : array{
    try {
        // importar conexion de la base de datos (db)
        require 'includes/database.php';

        $db->set_charset("utf8");
        // escribir codigo SQL
        $sql = "SELECT * FROM servicios;";
        $consulta = mysqli_query($db, $sql);

        // arreglo vacio
        $servicios = [];

        $i = 0;

        // obtener los resultados
       while( $row = mysqli_fetch_assoc($consulta)) {
           $servicios[$i]["id"] = $row["id"];
           $servicios[$i]["nombre"] = $row["nombre"];
           $servicios[$i]["precio"] = $row["precio"];

           $i++;
    }
        return $servicios;

      /*  echo "<pre>";
       var_dump(json_encode($servicios));
       echo "</pre>"; */

    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}

obtenerServicios();