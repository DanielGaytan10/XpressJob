<?php 

if(isset($_POST['submit'])) {
    if(empty($email)) {
        echo "<p class='error'>* Agrega tu correo </p>";
    } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'>* Correo no valido </p>";
        }
    }
    if(empty($password)) {
        echo "<p class='error'>* Agrega tu contraseña </p>";
    } else {
        if(strlen($password) < 8) {
            echo "<p class='error'>* Contraseña muy corta </p>";
        } else{
            if(!preg_match("/^[a-zA-Z0-9$@.-]$/",$_POST["password"])){
                echo"contraseña valida";
                
            }
        }
    }
}

?>
