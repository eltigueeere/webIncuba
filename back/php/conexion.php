<?php
$usuario = "lalo";
$contrasena = "Ereslomasb0&";  
$servidor = "127.0.0.1";
$basededatos = "webIncuba";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena) or die (':( error con mysql');

$db = mysqli_select_db( $conexion, $basededatos) or die (':( error con DB' );
?>