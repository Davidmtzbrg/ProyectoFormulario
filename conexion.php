<?php

$host_name = 'localhost';
$database = 'ejercicio';
$user_name = 'root';
$password = '';
$serviodr = '127.0.0.1';

$conexion = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_errno($conexion)) {
	
} else {
	//echo "Conexion Exitosa";

}

?>