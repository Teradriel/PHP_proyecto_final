<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/ca0ac8c3c3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Trabajo Final Codo a Codo</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand" href="#">
                        <img src="./imagenes/codoacodo.png" alt="" width="120" />
                    </a>
                    <a class="navbar-brand" href="#">Conf Bs As</a>
                </div>
                <div class="navbar justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">La Conferencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#oradores">Los Oradores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lugar">El lugar y la hora</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#registro">Conviertete en orador</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./registro.html">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" id="ticket" href="./tickets.html">Comprar tickets</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <div id="img_header" class="position-relative">
            </div>
            <div class="m-xl-5 position-absolute bottom-0 end-0 translate-middle-y col-5 text-end text-white">
                <h2>Conf Bs As</h2>
                <p>
                    Bs As llega por primera vez a Argentina. Un evento para compartir
                    con nuestra comunidad el conocimiento y experiencia de los expertos
                    que están creando el futuro de Internet. Ven a conocer a miembros
                    del evento, a otros estudiantes de Codo a Codo y los oradores de
                    primer nivel que tenemos para ti. Te esperamos!
                </p>
                <div>
                    <button type="button" class="text-decoration-none btn btn-outline-light" onclick="location.href='#registro'">
                        Quiero ser orador
                    </button>
                    <button type="button" class="btn btn-success" onclick="location.href='./tickets.html'">
                        Comprar tickets
                    </button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="mx-auto my-lg-5 w-75">
            <div class="d-flex flex-column align-items-center">
                <h4>Conoce a los</h4>
                <h1 id="oradores">ORADORES</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./imagenes/steve.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <span class="badge bg-warning text-dark">JavaScript</span>
                            <span class="badge bg-info text-dark">React</span>
                            <h5 class="card-title">Steve Jobs</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam
                                dicta, pariatur obcaecati molestiae beatae sint veniam rem
                                fugiat tempora placeat sit reiciendis ab iste accusantium vero
                                magnam commodi aliquid molestias!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./imagenes/bill.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <span class="badge bg-warning text-dark">JavaScript</span>
                            <span class="badge bg-info text-dark">React</span>
                            <h5 class="card-title">Bill Gates</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam
                                dicta, pariatur obcaecati molestiae beatae sint veniam rem
                                fugiat tempora placeat sit reiciendis ab iste accusantium vero
                                magnam commodi aliquid molestias!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./imagenes/ada.jpeg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <span class="badge bg-secondary">Negocios</span>
                            <span class="badge bg-danger">StartUps</span>
                            <h5 class="card-title">Ada Lovelace</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam
                                dicta, pariatur obcaecati molestiae beatae sint veniam rem
                                fugiat tempora placeat sit reiciendis ab iste accusantium vero
                                magnam commodi aliquid molestias!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="lugar" class="container px-0 mw-100">
            <div class="row px-0 mx-0">
                <div class="col-6 px-0">
                    <img src="./imagenes/honolulu.jpg" class="img-fluid" alt="..." />
                </div>
                <div class="col-6 pt-2 bg-dark bg-gradient text-white">
                    <h3>Bs As - Octubre</h3>
                    <p>
                        Buenos Aires es la provincia y localidad más grande de la
                        República Argentina. En los Estados Unidos, Honolulu es la ciudad
                        más sureña de entre las principales ciudades estadounidenses.
                        Aunque el nombre de Honolulu se refiere al área urbana en la costa
                        sureste de la isla de Oahu, la ciudad y el condado de Honolulu han
                        formado una ciudad condado consolidada que cubre toda la ciudad
                        (aproximadamente 600 km<sup>2</sup>
                    </p>
                    <button type="button" class="btn btn-outline-light">
                        Conoce más
                    </button>
                </div>
            </div>
        </div>
        <div class="m-5 d-flex flex-column align-items-center">
            <h4 id="registro">CONVIÉRTETE EN UN</h4>
            <h1>ORADOR</h1>
            <p>
                Anótate como orador para dar una charla ignite. Cuéntanos de qué
                quieres hablar!
            </p>
        </div>
        <form class="w-50 m-auto">
            <div class="mb-3 row justify-content-between align-items-center">
                <div class="col-auto">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" />
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="apellido" placeholder="Apellido" />
                </div>
            </div>
            <div class="mb-3 col-auto">
                <label for="tema" class="form-label"></label>
                <textarea name="tema" id="tema" class="form-control" placeholder="Sobre qué quieres hablar?"></textarea>
            </div>
            <div class="form-text">Recuerda incluir un titulo para tu charla.</div>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
    </main>
    <footer>
        <div class="mt-3 py-lg-5 footer">
            <div class="row mx-0 justify-content-between">
                <div class="col-auto">
                    <button type="button" class="text-decoration-none btn text-white">
                        Preguntas Freguentes
                    </button>
                </div>
                <div class="col-auto">
                    <button type="button" class="text-decoration-none btn text-white">
                        Contáctanos
                    </button>
                </div>
                <div class="col-auto">
                    <button type="button" class="text-decoration-none btn text-white">
                        Prensa
                    </button>
                </div>
                <div class="col-auto">
                    <button type="button" class="text-decoration-none btn text-white">
                        Conferencias
                    </button>
                </div>
                <div class="col-auto">
                    <button type="button" class="text-decoration-none btn text-white">
                        Términos y condiciones
                    </button>
                </div>
                <div class="col-auto">
                    <button type="button" class="text-decoration-none btn text-white">
                        Privacidad
                    </button>
                </div>
                <div class="col-auto">
                    <button type="button" class="text-decoration-none btn text-white">
                        Estudiantes
                    </button>
                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>

</body>

</html>