<?php
require_once 'config.php';
$queryResult=$pdo->query("SELECT * FROM empleados");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="imagenes/favicon.ico">
    <title>XpressJob</title>
    <link rel="stylesheet" href="CSS/list2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="script.js"></script>
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

<section id="contenido">
    <div class="form-registro">
    <table class="table">
        <h2>ACTUALIZACION DE REGISTRO</h2>
      
      
            <tr> 
                <th>Nombre</th>
				<th>Correo</th>
				<th>Password</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            <tr>
                <?php
                while($row=$queryResult->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>';
                    echo '<td>'.$row['nombre'].'</td>';
					echo '<td>'.$row['correo'].'</td>';
                    echo '<td>'.$row['password'].'</td>';
                    echo '<td><a href="update2.php?clave='.$row['clave'].'">Edit</a> </td>';
                    echo '<td><a href="delete2.php?clave='.$row['clave'].'">Delete</a> </td>"';
                    echo '</tr>';
                }
                ?>
            </tr>
        </table>

    </div>

    </>
	</section>
	<footer id="redes">
        <h3>Síguenos en:</h3>
        <i class='bx bxl-youtube bx-sm bx-spin-hover espacio' style='color:#ffffff'  ></i>
        <i class='bx bxl-facebook-circle bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i>
        <i class='bx bxl-instagram-alt bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i>
        <i class='bx bxl-twitter bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i></a>
        <i class='bx bxl-twitch bx-sm bx-spin-hover espacio' style='color:#ffffff' ></i>
    </footer>
</body>
</html>