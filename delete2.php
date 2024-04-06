<?php
include_once 'config.php';
$clave=$_GET['clave'];

$sql="DELETE FROM empleados WHERE clave=:clave";
$query=$pdo->prepare($sql);
$query->execute([
    'clave'=>$clave
]);
header("location:list2.php");
?>
