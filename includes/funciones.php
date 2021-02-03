<?php

function obtenerServicios() {
    try {
        // importar conexion de la base de datos (db)
        require "database.php";

        // escribir codigo SQL
        $sql = "SELECT * FROM servicios;";
        $consulta = mysqli_query($db, $sql);

        // obtener los resultados
        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta));
        echo "<pre>";

    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}

obtenerServicios();