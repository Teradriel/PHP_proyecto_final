<?php
session_start();

include 'conexion_BD.php';

$_SESSION["sosAdmin"] = false;


if (isset($_POST["email"]) && isset($_POST["pass"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $consultaAdmin = mysqli_query($conexion, "SELECT * FROM usuarios LIMIT 1");
    $Admin = mysqli_fetch_array($consultaAdmin);
    if ($email == $Admin["email"] && $pass == $Admin["password"]) {
        $_SESSION["sosAdmin"] = true;
        echo "Bienvenido " . $Admin["nombre"] . " " . $Admin["apellido"] . ", espere a ser redireccionado";
        header('Refresh:5; url=conexion.php');
    } else {
        echo "Usuario o contraseña incorrectos";
    }
} else {
    echo "No se han recibido datos";
    $_SESSION["sosAdmin"] = false;
}
