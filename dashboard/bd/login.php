<?php
session_start();
include_once 'conexion.php';
$objeto = new conexionDB();
$cnx = $objeto->getConexion();

$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$pass = md5($password);//encriptar

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = $cnx->prepare($consulta);
$resultado->execute();

if ($resultado->rowCount() >= 1) {
	$data = $resultado->fetchAll(PDO::FETCH_ASSOC);
	$_SESSION["s_usuario"] = $usuario;
}else{
	$_SESSION["s_usuario"] = null;
	$data = null;
}

print json_encode($data);
$cnx = null;

?>