<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

// Crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexion
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
?>