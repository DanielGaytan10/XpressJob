<!DOCTYPE html>
<?php
require_once 'config.php';
$result=false;
if (!empty($_POST)){
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
	$password=$_POST['password'];
    $pass_fuerte= password_hash($password, PASSWORD_BCRYPT);

    $sql="INSERT INTO usuarios(nombre,correo,password) VALUES (:nombre,:correo, :password)";
    $query=$pdo->prepare($sql);
    $result=$query->execute([
        'nombre'=>$nombre,
		'correo'=>$correo,
        'password'=>$pass_fuerte
    ]);
    
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/estiloregistro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <title>Registrarse</title>
</head>
<body>
    <header>
        <div class="container">
            <p class="logo"><span class="calceta">X</span>pressJob</p>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="registro.php">Registrarse</a>
                <a href="iniciar_sesion.php">Iniciar Sesión</a>
            </nav>
        </div>
    </header> 



    <section class="Datos Personales">
            <div class="in-flex">

                <center><h1>Datos Personales </h1></center>

            
                <center>
                
                <form action="registro.php" method="POST">

                    <br>
                        <p><label>Nombre</label> 
                        <input class="registro" name="nombre" type="text"  placeholder="Nombre" required></p>
                    <br>
                        <p><label> Correo</label>
                        <input class="registro" name="correo" type="email" placeholder="correo@ejemplo.com " required></p>
                    <br>
                        <p><label> Contraseña</label>
                        <input class="registro" name="password" type="password" placeholder="Minimo 10 Digitos" required></p>
                    <br>                    
                    <input class="boton2" type="submit" name="Enviar" value="Confirmar Datos">
                </form>
                <a href="registro empleado.php" class="boton">Registrarse como empleado</a>
            </center>
            </div>
            </section>
</body>
</html>
