<?php
include_once 'config.php';
$result=false;
if(!empty($_POST)){
    $clave=$_POST['clave'];
    $newNombre=$_POST['nombre'];
	$newEdad=$_POST['edad'];
    $newTelefono=$_POST['telefono'];
	$newCorreo=$_POST['correo'];
	$newPassword=$_POST['password'];
	$newConf_pass=$_POST['conf_pass'];
	
    $sql="UPDATE usuarios SET nombre=:nombre, edad=:edad, telefono=:telefono, correo=:correo, password=:password, conf_pass=:conf_pass WHERE clave=:clave";
    $query=$pdo->prepare($sql);

    $result=$query->execute([
        'clave'=>$clave,
        'nombre'=>$newNombre,
		'edad'=>$newEdad,
        'telefono'=>$newTelefono,
		'correo'=>$newCorreo,
		'password'=>$newPassword,
		'conf_pass'=>$newConf_pass
		
    ]);
    $nombreValue=$newNombre;
	$edadValue=$newEdad;
    $telefonoValue=$newTelefono;
	$correoValue=$newCorreo;
    $passwordValue=$newPassword;
	$conf_passValue=$newConf_pass;
	
} else{
    $clave=$_GET['clave'];
    $sql="SELECT * FROM usuarios WHERE clave=:clave";
    $query=$pdo->prepare($sql);
    $query->execute([
        'clave'=>$clave
    ]);
    $row=$query->fetch(PDO::FETCH_ASSOC);
    $nombreValue=$row['nombre'];
	$edadValue=$row['edad'];
	$telefonoValue=$row['telefono'];
    $correoValue=$row['correo'];
	$passwordValue=$row['password'];
	$conf_passValue=$row['conf_pass'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/estiloregistro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <title>Actualizar</title>
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
		<div class="in-flex">
			<center><h1>Datos Personales </h1></center>
			<center>

			<form action="update1.php" method="POST">
				<br>
					<p><label>Nombre</label> 
					<input class="registro" name="nombre" type="text" value="<?php echo $nombreValue; ?>"></p>
				<br>
				<br>
                    <p><label>Edad</label>
                    <input class="registro"  name="edad" type="number" value="<?php echo $edadValue; ?>"></p>
                <br>
            	    <p><label> Teléfono</label>
                    <input class="registro" name="telefono" type="number" value="<?php echo $telefonoValue; ?>"></p>
                <br>
                    <p><label> Correo</label>
                    <input class="registro" name="correo" type="email" value="<?php echo $correoValue; ?>"></p>
              	<br>
                    <p><label> Contraseña</label>
                    <input class="registro" name="password" type="password" value="<?php echo $passwordValue; ?>"></p>
            	<br>
                	<p><label> Confirmar Contraseña</label>
                    <input class="registro" name="conf_pass" type="password" value="<?php echo $conf_passValue; ?>"></p>
                <br>
                <input type="hidden" name="clave" value="<?php echo $clave; ?>">
				<input class="boton2" type="submit" value="Update">
            </form>
				<a href="list2.php" class="boton">Empleados</a>

        	</center>
        </div>
    </section>
	
</body>
</html>