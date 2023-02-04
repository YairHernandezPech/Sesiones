<?php
//incluir la base de datos en estas consultas
include_once('db.php');
//recibo todos los datos del formulario de la pagina html
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$conexion = conn(); //ejecuta la conexion con la base de datos
$sql = "INSERT INTO usuarios /*---> este es el nombre de la tabal creada en la base de datos */ (usuario,clave) /*--->este son los datos que contienen la tabla de la base de dato ademas deben ser igual con el name de el input  */
VALUES('$usuario',$clave)";
$resultado = mysqli_query($conexion, $sql) or trigger_error ("Query failed SQL-Error: ".mysqli_error($conexion), E_USER_ERROR);


?>