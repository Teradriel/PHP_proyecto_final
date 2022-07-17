<?php
session_start();
include 'conexion_BD.php';
?>

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/ca0ac8c3c3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="./index.html">
                    <img src="./imagenes/codoacodo.png" alt="" width="120" />
                </a>
                <a class="navbar-brand" href="./index.html">Conf Bs As</a>
            </div>
            <div class="navbar justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">La Conferencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#oradores">Los Oradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#lugar">El lugar y la hora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#registro">Conviertete en orador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registro.html">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Desconectarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" id="ticket" href="./tickets.html">Comprar tickets</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php
/* $_SESSION["sosAdmin"] = true; */
if ($_SESSION["sosAdmin"] == true) {
?>

    <body>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($listado2022 = mysqli_fetch_array($consultas)) { ?>
                    <tr>
                        <th scope="row"> <?php echo $listado2022["id_usuario"] ?> </th>
                        <th scope="row"> <?php echo $listado2022["nombre"] ?> </th>
                        <th scope="row"> <?php echo $listado2022["apellido"] ?> </th>
                        <th scope="row"> <?php echo $listado2022["telefono"] ?> </th>
                        <th scope="row"> <?php echo $listado2022["password"] ?> </th>
                        <th scope="row"> <?php echo $listado2022["email"] ?> </th>
                        <th scope="row"> <?php echo $listado2022["dni"] ?> </th>
                        <th scope="row"> <a href="eliminar.php?id=<?php echo $listado2022['id_usuario']; ?>"><i class="fa-solid fa-trash-can"></i></a></th>
                        <th scope="row"> <a href="form_editar.php?id=<?php echo $listado2022['id_usuario']; ?>"><i class="fa-solid fa-pencil"></i></a></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>

    </html>

<?php

} elseif ($_SESSION["sosAdmin"] == false) {
    echo "No tienes permisos para ver esta pagina    ";
?>
    <form action="admin.php" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="pass" class="form-control" id="pass" name="pass">
        </div>
        <button type="submit" class="btn btn-success">Iniciar Sesion</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
<?php
}

?>