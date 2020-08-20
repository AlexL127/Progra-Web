<?php
	class conexionDB{
		public function getConexion(){
			try {
				$cnx=new PDO("mysql:host=localhost;dbname=hospital","root","password");
				return $cnx;
			} catch (Exception $e) {
				die("El error de conexion es:".$e->getMessage());
			}
		}
	}
?>