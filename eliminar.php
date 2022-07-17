<?php

include 'conexion_BD.php';

$id = $_GET["id"];

$delete_BD = "DELETE FROM usuarios WHERE id_usuario = $id";

$resultado = mysqli_query($conexion, $delete_BD);

if ($resultado) {
    echo "Usuario eliminado correctamente, espere a ser redireccionado";
    header('Refresh:5; url=index.html');
} else {
    echo "Hubo un error al eliminar el usuario, revisar el código";
}
