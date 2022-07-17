<?php

$conexion = mysqli_connect("localhost", "teradriel", "Terza2.", "bd_conferencias");

if (mysqli_connect_errno()) {
    echo "Error al conectar con la base de datos";
} else {
    $consultas = mysqli_query($conexion, "SELECT * FROM usuarios");

    $listado = mysqli_fetch_array($consultas);
}
