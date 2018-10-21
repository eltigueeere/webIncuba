<?php

//include('conexion.php');
$usuario = "lalo";
$contrasena = "Ereslomasb0&";  
$servor = "127.0.0.1";
$basededatos = "webIncuba";

$conexion = mysqli_connect( $servor, $usuario, $contrasena) or die (':( error con mysql');

$db = mysqli_select_db( $conexion, $basededatos) or die (':( error con DB' );
//VALANDO EXISTENCIA DEL USUARIO
//jquery car1
$resultado1=mysqli_query($conexion, "SELECT id, numberCard, imgs, titleCard, textCard, dates FROM cambios WHERE numberCard=1 ");
while($filas1 = mysqli_fetch_array($resultado1)){
    $id1 = $filas1['id'];
    $numbberCar1 = $filas1['numberCard'];
    $imgs1  = $filas1['imgs'];
    $titleCard1 = $filas1['titleCard'];
    $textCard1 = $filas1['textCard'];
    $dates1 = $filas1['dates'];      
}
//jquery card2
$resultado2=mysqli_query($conexion, "SELECT id, numberCard, imgs, titleCard, textCard, dates FROM cambios WHERE numberCard=2 ");
while($filas2 = mysqli_fetch_array($resultado2)){
    $id2 = $filas2['id'];
    $numbberCar2 = $filas2['numberCard'];
    $imgs2  = $filas2 ['imgs'];
    $titleCard2 = $filas2['titleCard'];
    $textCard2 = $filas2['textCard'];
    $dates2 = $filas2['dates'];      
}
//jquery car3
$resultado3=mysqli_query($conexion, "SELECT id, numberCard, imgs, titleCard, textCard, dates FROM cambios WHERE numberCard=3 ");
while($filas3 = mysqli_fetch_array($resultado3)){
    $id3 = $filas3['id'];
    $numbberCar3 = $filas3['numberCard'];
    $imgs3  = $filas3 ['imgs'];
    $titleCard3 = $filas3['titleCard'];
    $textCard3 = $filas3['textCard'];
    $dates3 = $filas3['dates'];      
}

?> 