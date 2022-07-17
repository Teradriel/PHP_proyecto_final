<?php
include 'conexion_BD.php';

$id = $_GET["id"];
$consulta_id = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = $id");

$listado_id = mysqli_fetch_array($consulta_id);

echo $listado_id["nombre"] . " " . $listado_id["apellido"];

$nombre = $listado_id["nombre"];
$apellido = $listado_id["apellido"];
$telefono = $listado_id["telefono"];
$password = $listado_id["password"];
$email = $listado_id["email"];
$dni = $listado_id["dni"];
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trabajo FinaL - Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/ca0ac8c3c3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                        <a class="nav-link" href="./conexion.php">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar usuario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="editar.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" value="<?php echo $dni; ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <button type="submit" class="btn btn-primary">Editar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </form>
</body>