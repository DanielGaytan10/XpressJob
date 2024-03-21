<!DOCTYPE html>
<?php
    session_start();
    
    require_once 'funciones.php';
    require_once 'validacion.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/estiloservicio.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>XpressJob</title>
</head>
<body>
    <header>
        <div class="container">
            <p class="logo"><span class="calceta">X</span>pressJob</p>
            <nav>
                <a href="index.php">Inicio</a>
                <?php if(hasRole('ADMIN')) {?>
                <a href="list.php">Lista</a>
                <?php }?>
                <a href="cerrarsesion.php">Cerrar Sesion</a>
                <img  id="ali" src="imagenes/image.png">
            </nav>
        </div>
    </header>
    
    <section class="servicios">
        <h2 class="titulo">Servicios más solicitados</h2>
        <div class="linea"></div>
        <div class="contenido">
            <div class="imagen">
                <div>
                    <img src="Imagenes/carpinteria.jpg">
                </div>
                <p>Carpintería</p>
                <div class="boton2">
                    <a href="perfilJob.php">Ver mas</a>
                </div>
            </div>

            <div class="imagen">
                <div>
                    <img src="Imagenes/plomero.jpg">
                </div>
                <p>Plomero</p>
                <div class="boton2">Ver mas</div>
            </div>

            <div class="imagen">
                <div>
                    <img src="Imagenes/pintor.jpg">
                </div>
                <p>Pintor</p>
                <div class="boton2">Ver mas</div>
            </div>
            
            <div class="imagen">
                <div>
                    <img src="Imagenes/soldador.jpg">
                </div>
                <p>Soldador</p>
                <div class="boton2">Ver mas</div>
            </div>
        </div>
        <br>
        <br>
        <br>
        
    </section>
    <section class="servicios">
        <div class="contenido">
            <div class="imagen">
                <div>
                    <img src="Imagenes/maquillaje.jpg">
                </div>
                <p>Maquilladora</p>
                <div class="boton2">Ver mas</div>
            </div>

            <div class="imagen">
                <div>
                    <img src="Imagenes/uñas.png">
                </div>
                <p>Manicura</p>
                <div class="boton2">Ver mas</div>
            </div>

            <div class="imagen">
                <div>
                    <img src="Imagenes/barberopuñeta.jpg">
                </div>
                <p>Estilista</p>
                <div class="boton2">Ver mas</div>
            </div>
            
            <div class="imagen">
                <div>
                    <img src="Imagenes/meca.jpg">
                </div>
                <p>Mecánico</p>
                <div class="boton2">Ver mas</div>
            </div>
        </div>
        
    </section>
    <br>
        <br>
        <br>


  
  
        
        <footer class="redes">
            <h3>Síguenos en:</h3>
            <i class='bx bxl-youtube bx-sm bx-spin-hover espacio' style='color:#ffffff'  ></i>
            <i class='bx bxl-facebook-circle bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i>
            <i class='bx bxl-instagram-alt bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i>
            <i class='bx bxl-twitter bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i></a>
            <i class='bx bxl-twitch bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i>
    
        </footer>
    </section>
    
</body>
</html>