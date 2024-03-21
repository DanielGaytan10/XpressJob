<!DOCTYPE html>
<?php
require_once 'config.php';
$result=false;
if (!empty($_POST)){
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
    $password=$_POST['password'];
	$conf_pass=$_POST['conf_pass'];
	$colonia=$_POST['colonia'];
    $calle=$_POST['calle'];
    $municipio=$_POST['municipio'];
	$pais=$_POST['pais'];

    $sql="INSERT INTO empleados(nombre,telefono,correo,password,conf_pass,colonia,calle,municipio,pais) 
    VALUES (:nombre, :telefono, :correo, :password, :conf_pass, :colonia, :calle, :municipio, :pais)";
    $query=$pdo->prepare($sql);
    $result=$query->execute([
        'nombre'=>$nombre,
        'telefono'=>$telefono,
		'correo'=>$correo,
        'password'=>$password,
        'conf_pass'=>$conf_pass,
        'colonia'=>$colonia,
        'calle'=>$calle,
        'municipio'=>$municipio,
        'pais'=>$pais
    ]);
    
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/estiloregistroemp.css">
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
                <a href="iniciar sesion.php">Iniciar Sesión</a>
            </nav>
        </div>
    </header>



    <section class="Datos Personales">
        <form action="registro empleado.php" method="POST">
        
            <div class="in-flex">

                <center><h1>Trabajador xpress</h1></center><br>
                    <div>
                        <center>
                            <br>
                                <p><label>Nombre Completo</label> 
                                <input class="registro" name="nombre" type="text" placeholder="" required></p>
                            <br>
                                <p><label>Teléfono</label>
                                <input class="registro" name="telefono" type="number" placeholder="10 Digitos " required></p>
                            <br>
                            <!--<p><label>INE</label>
                                <input name="Nombre" type="file" placeholder="Adjuntar archivo" required> </p> -->
                                <p><label> Correo</label>
                                <input class="registro" name="correo" type="email" placeholder="correo@ejemplo.com" required></p>
                            <br>
                                <p><label> Contraseña</label>
                                <input class="registro" name="password" type="password" placeholder="Minimo 8 Caracteres" required></p>
                            <br>
                                <p><label> Confirmar Contraseña</label>
                                <input class="registro" name="conf_pass" type="password" placeholder="" required></p>
                            <br>
                        </center>
                    </div>
    </section>
    
                <div class="in-flexdos">
                    
                        <center><h3>Domicilio</h3></center>
                            <p><label>Colonia</label> 
                            <input class="registro" name="colonia" type="text" placeholder="Colonia" required></p>
                            <br>
                                <p><label>Calle</label> 
                                <input class="registro" name="calle" type="text" placeholder="Calle #numero" required></p>
                            <br>
                                <p><label>Municipio</label>
                                <input class="registro" name="municipio" type="text" placeholder="" required></p>
                            <br>
                                <p><label>País</label>
                                <input class="registro" name="pais" type="text" placeholder="" required></p>
                            <br>

                        </center>
                       <div>
                        <!-- <p><label>Profesión</label>
                        <input type="file" name="Adjuntar archivo" class="form-control" placeholder="Adjuntar archivo"></p> -->
                        </div>
                       <br>
                       <br>
                       <br>
                       <br>
                       <br>
                       
                       <input class="boton2" type="submit" name="Enviar" value="Confirmar Datos">
                        <a href="registro.php" class="boton2">Regresar a Usuario</a>
        </form>
        

                    
                       
                      
                       
                       
                       
</body>
</html>
