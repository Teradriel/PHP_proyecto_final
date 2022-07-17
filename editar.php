<?php

include 'conexion_BD.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$password = $_POST["password"];
$email = $_POST["email"];
$dni = $_POST["dni"];

$editar = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', password = '$password', email = '$email', dni = '$dni' WHERE id_usuario = $id";

$resultadoEditar = mysqli_query($conexion, $editar);

if ($resultadoEditar) {
    echo "Usuario editado correctamente, espere a ser redireccionado";
    header('Refresh:5; url=index.html');
} else {
    echo "Hubo un error al editar el usuario, revisar el código";
}
