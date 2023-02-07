<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// usuarios es el nombre de la tabla
//$q = "SELECT usuarios.id, usuarios.usuario, convert(aes_decrypt($clave,'clave')using utf8) as contrasenaDesencriptada from usuarios;
$q = "SELECT COUNT(*)as contar FROM usuarios WHERE usuario = '$usuario' and clave = $clave";

$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0) {
    $_SESSION['username']= $usuario;
    header("location: ../rol1.php");
}else{
    echo "<h1>Datos Incorectos favor de revisar tus datos</h1>";
}





?>