<?php 
require("conexion.php");
$noinventario = $_POST['noinventario'];
$descripcion = $_POST['descripcion'];
$departamento = $_POST['departamento'];
$existencia = $_POST['existencia'];
$sql = "INSERT INTO productos (noinventario, descripcion, departamento, existencia) VALUES ('$noinventario', '$descripcion', '$departamento', '$existencia')";
if ($conn->query($sql)===TRUE) {
	echo "<script>
		alert('Registro agregado');
		window.location.href='index.php';
		</script>";
	}
else {
	echo "<script>
		alert('Error al guardar');
		window.location.href='index.php';
		</script>";
				}
$conn->close();
?>
