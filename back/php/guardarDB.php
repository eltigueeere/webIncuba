<?php
$usuario = "lalo";
$contrasena = "Ereslomasb0&";  
$servidor = "127.0.0.1";
$basededatos = "webIncuba";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena) or die (':( error con mysql');
$db = mysqli_select_db( $conexion, $basededatos) or die (':( error con DB' );
//if (isset($_POST['login']))
//RECUPERANDO VARIABLES
$numberCard = $_POST['number'];
$imgs = $_POST['imgs'];
$titleCard = $_POST['title'];
$textCard = $_POST['text'];
//jquery
$sql="INSERT INTO cambios (numberCard, imgs, titleCard, textCard) VALUES ('$numberCard', '$imgs', '$titleCard', '$textCard')";
//execute jquery
$ejecutar=mysqli_query($conexion, $sql);
//verificando
if (!$ejecutar){
    echo"error";
} else {
    header("Location: ../../");
}
?>