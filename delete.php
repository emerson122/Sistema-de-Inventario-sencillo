<?php 
require("conexion.php");
$idP=$_GET['id'];
$sql = "DELETE FROM productos WHERE id = $idP";

if ($conn->query($sql)===TRUE) {
	echo "<script>
		alert('Registro Borrado');
		window.location.href='index.php';
		</script>";
	}
else {
	echo "<script>
		alert('Error al borrar');
		window.location.href='index.php';
		</script>";
				}
$conn->close();
?>