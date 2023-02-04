<?php
//configuracion necesaria para acceder a la base de datos
function conn(){
    $hostname = "localhost:3307";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "Login";

    //generando la conexion con el servidor

    $conectar = mysqli_connect($hostname,$usuariodb, $passworddb, $dbname);
    return  $conectar;

}

?>