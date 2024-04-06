<?php
include_once 'config.php';
$result=false;
if(!empty($_POST)){
    $clave=$_POST['clave'];
    $newNombre=$_POST['nombre'];
	$newTelefono=$_POST['telefono'];
    $newCorreo=$_POST['correo'];
	$newPassword=$_POST['password'];
	$newConf_pass=$_POST['conf_pass'];
	$newColonia=$_POST['colonia'];
	$newCalle=$_POST['calle'];
	$newMunicipio=$_POST['municipio'];
	$newPais=$_POST['pais'];
	
    $sql="UPDATE empleados SET nombre=:nombre, telefono=:telefono, correo=:correo, password=:password, conf_pass=:conf_pass, colonia=:colonia, calle=:calle, municipio=:municipio, pais=:pais 
	WHERE clave=:clave";
    $query=$pdo->prepare($sql);

    $result=$query->execute([
        'clave'=>$clave,
        'nombre'=>$newNombre,
        'telefono'=>$newTelefono,
		'correo'=>$newCorreo,
		'password'=>$newPassword,
		'conf_pass'=>$newConf_pass,
		'colonia'=>$newColonia,
		'calle'=>$newCalle,
		'municipio'=>$newMunicipio,
		'pais'=>$newPais
		
    ]);
    $nombreValue=$newNombre;
    $telefonoValue=$newTelefono;
	$correoValue=$newCorreo;
    $passwordValue=$newPassword;
	$conf_passValue=$newConf_pass;
	$coloniaValue=$newColonia;
	$calleValue=$newCalle;
	$municipioValue=$newMunicipio;
	$paisValue=$newPais;

	
} else{
    $clave=$_GET['clave'];
    $sql="SELECT * FROM empleados WHERE clave=:clave";
    $query=$pdo->prepare($sql);
    $query->execute([
        'clave'=>$clave
    ]);
    $row=$query->fetch(PDO::FETCH_ASSOC);
    $nombreValue=$row['nombre'];
	$telefonoValue=$row['telefono'];
	$correoValue=$row['correo'];
	$passwordValue=$row['password'];
	$conf_passValue=$row['conf_pass'];
	$coloniaValue=$row['colonia'];
    $calleValue=$row['calle'];
	$municipioValue=$row['municipio'];
	$paisValue=$row['pais'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/estiloregistroemp.css">
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
		<form action="update2.php" method="POST">
			<div class="in-flex">
				<center><h1>Trabajador xpress</h1></center><br>
				<div>
					<center>
						<br>
							<p><label>Nombre Completo</label> 
							<input class="registro" name="nombre" type="text" value="<?php echo $nombreValue; ?>"></p>
						<br>
							<p><label>Teléfono</label>
                            <input class="registro" name="telefono" type="number" value="<?php echo $telefonoValue; ?>"></p>
                        <br>
                        <!--<p><label>INE</label>
                            	<input name="Nombre" type="file" placeholder="Adjuntar archivo" required> </p> -->
                            <p><label> Correo</label>
                            <input class="registro" name="correo" type="email" value="<?php echo $correoValue; ?>"></p>
                        <br>
                            <p><label> Contraseña</label>
                            <input class="registro" name="password" type="password" value="<?php echo $passwordValue; ?>"></p>
                        <br>
                            <p><label> Confirmar Contraseña</label>
                            <input class="registro" name="conf_pass" type="password" value="<?php echo $conf_passValue; ?>"></p>
                        <br>
                    </center>
                </div>
	</section>
    
                <div class="in-flexdos">
                    
                        <center><h3>Domicilio</h3></center>
                            <p><label>Colonia</label> 
                            <input class="registro" name="colonia" type="text" value="<?php echo $coloniaValue; ?>"></p>
                            <br>
                                <p><label>Calle</label> 
                                <input class="registro" name="calle" type="text" value="<?php echo $calleValue; ?>"></p>
                            <br>
                                <p><label>Municipio</label>
                                <input class="registro" name="municipio" type="text" value="<?php echo $municipioValue; ?>"></p>
                            <br>
                                <p><label>País</label>
                                <input class="registro" name="pais" type="text" value="<?php echo $paisValue; ?>"></p>
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
                       
                        <a href="list.php" class="boton2">Regresar a Usuario</a>
						<input type="hidden" name="clave" value="<?php echo $clave; ?>">
						<input class="boton2" type="submit" value="Update">
		</form>
	</section>
	
	
</body>
</html>