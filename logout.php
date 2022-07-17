<?php
session_start();

if ($_SESSION["sosAdmin"] = false) {
    header('Location: index.html');
} elseif ($_SESSION["sosAdmin"] = true) {
    $_SESSION["sosAdmin"] = false;
    echo "Usuario desconectado correctamente, espere a ser redireccionado";
    header('Refresh:5; url=index.html');
}
