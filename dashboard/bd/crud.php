<?php 
include_once "conexion.php";
$objeto = new conexionDB();
$conexion = $objeto->getConexion();

//Recepcion de datos

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$consulta = "INSERT INTO usuarios(usuario,password,nombre) VALUES('$usuario','$password','$nombre')";
$resultado = conexion->prepare($consulta);
$resultado->execute();

$consulta = "SELECT nombre,usuario FROM usuarios ORDER BY nombre";
$resultado = conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);


print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = null;

 ?>