<!DOCTYPE html>
<?php
    session_start();
    

    $conn = new mysqli("localhost","root","","xpressjob");
    $resul=false;

    if($conn->connect_errno)
    {
        echo "No hay conexion: (".$conn->connect_errno.")".$conn->connect_error;
    }

    if(isset($_POST['btnIniciar']))
    {    
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        
 
        $queryusuario = mysqli_query($conn,"Select clave, correo, password From usuarios where correo = '$correo' ");
        $filas = mysqli_num_rows($queryusuario);
        $buscarpass= mysqli_fetch_array($queryusuario);
        
        if(($filas > 0) && (password_verify($password,$buscarpass['password'])))
        {   
            $_SESSION['clave'] = $buscarpass['clave']; 
            $_SESSION['correo'] = $correo;
            header("location: servicios.php");
        }
        else
        {
            echo "<script>alert('Usuario o contraseña incorrecto'); window.location='iniciar_sesion.php'</script>";
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/estiloiniciarsesion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>XpressJob</title>
</head>
<body>
    <header>
        <div class="container">
            <p class="logo"><span class="calceta">X</span>pressJob</p>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="registro.php">Registrarse</a>
            </nav>
        </div>
    </header>
  
  
            <div class="form-box">
                <div class="button-box">
                <div id="elegir"></div>
                <button type="button" class="toggle-btn" onclick="login()">Usuario</button>
            </div>





            <div class="fotousuario">
                <img src="imagenes/fotoperfil.jpg">
            </div>

            <form action="iniciar_sesion.php" method="POST" id="login" class="input-group">
                <input type="email" name="correo" class="input-field" placeholder="Correo Electronico" required>
                <input type="password" name="password"  class="input-field" placeholder="Ingrese su contraseña" requerid>
                <input type="checkbox" class="check-box"><span>Recordar Contraseña</span>
                <input class="btn-iniciarsesion" type="submit" name="btnIniciar" value="Iniciar Sesion">
            </form>

            </div>
    
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