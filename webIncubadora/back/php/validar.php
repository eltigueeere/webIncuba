<?php
//include('conexion.php');
$usuario = "lalo";
$contrasena = "Ereslomasb0&";  
$servidor = "127.0.0.1";
$basededatos = "webIncuba";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena) or die (':( error con mysql');

$db = mysqli_select_db( $conexion, $basededatos) or die (':( error con DB' );
if (isset($_POST['login'])) {
	//VARIABLES DEL USUARIO
$usuario = $_POST['user'];
$pass = $_POST['pass'];
//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
if (empty($usuario) | empty($pass)) 
	{
    //header("Location: ../index.html");
    echo"cajas";
	exit();
	}
//VALIDANDO EXISTENCIA DEL USUARIO
/*$resultado=mysqli_query($conexion, "SELECT id, usuario, pass FROM usuarios");
while($filas = mysqli_fetch_array($resultado)){
    echo"dos";
    echo"ID". $filas['id']."<br>";
}*/
$resultado=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and pass = '$pass' ");
if ($row = mysqli_fetch_array($resultado)){
    header("Location: ../views/control.php");
} else{
    echo"no";
}


} //primer if
?> 