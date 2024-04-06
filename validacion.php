<?php
    $conn = new mysqli("localhost","root","","xpressjob");
    $result= false;

    if($conn->connect_errno)
    {
        echo "No hay conexion: (".$conn->connect_errno.")".$conn->connect_error;
    }

    if($_SESSION['correo'] == NULL || $_SESSION['correo'] == '')
    {
        echo "<script>alert('No se ha iniciado sesion'); window.location='registro.php'</script>";
    }

    $id = $_SESSION['clave'];
    $email = $_SESSION['correo'];

    $queryusuario = mysqli_query($conn,"Select * from usuarios");
    $filasusuario = mysqli_num_rows($queryusuario);
    $buscarusuario = mysqli_fetch_array($queryusuario);

    if(($id != $buscarusuario['clave']) || $filasusuario <= 0 )
    {
        echo "<script>alert('No se ha inicado sesion'); window.location='iniciar_sesion.php'</script>";
    }


?>