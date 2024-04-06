<?php
    session_start();

    $conn = new mysqli("localhost","root","","xpressjob");
    $result= false;

    if($conn->connect_errno)
    {
        echo "No hay conexion: (".$conn->connect_errno.")".$conn->connect_error;
    }

if(isset($_POST['btnIniciar'])){

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $queryusuario = mysqli_query($conn,"Select clave, correo, password from usuarios where correo = '$correo'");
    $filas = mysqli_num_rows($queryusuario);
    $buscarpass = mysqli_fetch_array($queryusuario);

    if(($filas == 1) && (password_verify($password,$buscarpass['password'])))
    {
        $_SESSION['clave'] = $buscarpass['clave'];
        $_SESSION['correo'] = $correo;
        header("location: servicios.php");
    }
    else
    {
        echo "<script>alert('Usuario o contraseña incorrecto'); window.location='iniciar_sesion'</script>";
    }
   }
?>
<!DOCTYPE html>
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
  
  
    <form action="<?php echo
    htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <h1>Iniciar Sesion</h1>
      <label for="">Correo:</label>
      <input type="text" name="correo" id="email" value="<?php
      if(isset($correo)) echo $email ?>">
      <label for="">Contraseña:</label>
      <input type="password" name="password" id="password" value="<?php
      if(isset($password)) echo $password ?>">
      <input type="submit" name="btnIniciar">
      <p class="warnings" id="warnings"></p>
      <?php
      include("validar-form.php");
      ?>
    </form>

    <script src="validacion.js"></script>

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
 
    
</body>
</html>