<?php
include 'conexion_BD.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$password = $_POST["password"];
$email = $_POST["email"];
$dni = $_POST["dni"];

$insert = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, telefono, password, email, dni) VALUES ('$nombre', '$apellido', '$telefono', '$password', '$email', '$dni')");

echo "Usuario registrado correctamente, espere a ser redireccionado";

header('Refresh:5; url=index.html');
