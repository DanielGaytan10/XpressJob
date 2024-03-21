<?php
    $conn = new mysqli("localhost","root","","xpressjob");
    $result=false;

    if($conn->connect_errno)
    {
        echo "No hay conexion: (".$conn->connect_errno.")".$conn->connect_error;
    }
   
    $id = $_SESSION['clave'];
    $email = $_SESSION['correo'];

    if($_SESSION['correo'] == null || $_SESSION['correo'] == '' )
    {
        echo "<script>alert('No se ha iniciado sesion'); window.location='index.php'</script>";
    }
    
    $queryusuario = mysqli_query($conn,"Select * From usuarios where clave = '$id' and correo ='$email' ");
    $filas = mysqli_num_rows($queryusuario);
    
    if($filas < 0)
    {
       echo "<script>alert('No se ha iniciado sesion'); window.location='index.php'</script>";
    }


?>