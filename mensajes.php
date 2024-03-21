<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/estilomensajes.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>XpressJob</title>
</head>
<body>
    <header>
        <div class="container">
            <p class="logo"><span class="calceta">X</span>pressJob</p>
            <nav>
                <a href="index.html">Inicio</a>
                <a href="servicios.html">Servicios</a>
                <img  id="ali" src="imagenes/image.png">
            </nav>
        </div>
    </header>
    <body>
        <section class="body-chat">
            <div class="seccion-titulo">
                <h3>
                    <i class="fas fa-comments"></i>
                    MENSAJES
                </h3>
            </div>
            <div class="seccion-usuarios">
                <div class="seccion-buscar">
                    <div class="input-buscar">
                        <input type="search" placeholder="Buscar usuario">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="seccion-lista-usuarios">
                    <div class="usuario">
                        <div class="avatar">
                            <img src="imagenes/carpe.png" alt="img">
                            <span class="estado-usuario enlinea"></span>
                        </div>
                        <div class="cuerpo">
                            <span> Juan El Mecánico</span>
                            <span>detalles de mensaje</span>
                        </div>
                        <span class="notificacion">
                            3
                        </span>
                    </div>
                    <div class="usuario">
                        <div class="avatar">
                            <img src="imagenes/persona.jpg" alt="img">
                            <span class="estado-usuario ocupado"></span>
                        </div>
                        <div class="cuerpo">
                            <span> Nombre Apellido</span>
                            <span>detalles de mensaje</span>
                        </div>
                        <span class="notificacion">
                            1
                        </span>
                    </div>
                    <div class="usuario">
                        <div class="avatar">
                            <img src="imagenes/pin.jpg" alt="img">
                            <span class="estado-usuario desconectado"></span>
                        </div>
                        <div class="cuerpo">
                            <span> Nombre apellido</span>
                            <span>detalles de mensaje</span>
                        </div>
                        <span class="notificacion">
                            1
                        </span>
                    </div>
                </div>
            </div>
            <div class="seccion-chat">
                <div class="usuario-seleccionado">
                    <div class="avatar">
                        <img src="imagenes/carpe.png" alt="img">
                    </div>
                    <div class="cuerpo">
                        <span>Nombre de usuario</span>
                        <span>Activo - Escribiendo...</span>
                    </div>
                    <div class="opciones">
                        <ul>
                            <li>
                                <button type="button"><i class="fas fa-video"></i></button>
                            </li>
                            <li>
                                <button type="button"><i class="fas fa-phone-alt"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-chat">
                    <div class="mensaje">
                        <div class="avatar">
                            <img src="imagenes/carpe.png" alt="img">
                        </div>
                        <div class="cuerpo">
                            <!-- <img src="http://localhost/multimedia/png/user-foto-3.png" alt=""> -->
                            <div class="texto">
                                Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Dolor eligendi voluptatum dolore voluptas iure.
                                <span class="tiempo">
                                    <i class="far fa-clock"></i>
                                    Hace 5 min
                                </span>
                            </div>
                            <ul class="opciones-msj">
                                <li>
                                    <button type="button">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <i class="fas fa-share-square"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- derecha -->
                    <div class="mensaje left">
                        <div class="cuerpo">
                            <!-- <img src="http://localhost/multimedia/png/user-foto-3.png" alt=""> -->
                            <div class="texto">
                                Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Dolor eligendi voluptatum dolore voluptas iure.
                                <span class="tiempo">
                                    <i class="far fa-clock"></i>
                                    Hace 6 min
                                </span>
                            </div>
                            <ul class="opciones-msj">
                                <li>
                                    <button type="button">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </li>
                                <li>
                                    <button type="button">
                                        <i class="fas fa-share-square"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="avatar">
                            <img src="imagenes/persona.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="panel-escritura">
                    <form class="textarea">
                        <div class="opcines">
                            <button type="button">
                                <i class="fas fa-file"></i>
                                <label for="file"></label>
                                <input type="file" id="file">
                            </button>
                            <button type="button">
                                <i class="far fa-image"></i>
                                <label for="img"></label>
                                <input type="file" id="img">
                            </button>
                            <button type="button">
                                <i class="far fa-text"></i>
                                <label for="img"></label>
                                <input type="file" id="img">
                            </button>
                        </div>
                        <textarea placeholder="Escribir mensaje"></textarea>
                        <button type="button" class="enviar">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <footer class="redes">
            <h3>Síguenos en:</h3>
            <i class='bx bxl-youtube bx-sm bx-spin-hover espacio' style='color:#ffffff'  ></i>
            <i class='bx bxl-facebook-circle bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i>
            <i class='bx bxl-instagram-alt bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i>
            <i class='bx bxl-twitter bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i></a>
            <i class='bx bxl-twitch bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i>
    
        </footer>
    
</body>
</html>