<?php

$db = mysqli_connect("localhost", "root", "root", "appsalon");

if(!$db) {
    echo "error en la conexion";
    exit;
} 

/* echo "conexion correcta"; */
