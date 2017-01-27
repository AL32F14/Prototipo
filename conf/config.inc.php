<?php
$bd_host="localhost";
$bd_nombre="usuarios";
$bd_usuario="usuario";
$bd_password="1234";

$conexion = @mysqli_connect($bd_host, $bd_usuario, $bd_password, $bd_nombre) or die ("No me puedo conectar a la BD");
mysqli_set_charset($conexion, "utf8");
?>