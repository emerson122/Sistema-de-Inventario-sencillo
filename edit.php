<?php 
require("conexion.php");
$id=$_POST['id'];
$producto = $_POST['noinventario'];
$precio = $_POST['descripcion'];
$cantidad = $_POST['departamento'];
$importe = $_POST['existencia'];
$sql = "UPDATE productos SET noinventario='$producto',descripcion='$precio',departamento='$cantidad',existencia='$importe' WHERE id='$id'";
if ($conn->query($sql)===TRUE) {
	echo "<script>
		alert('Registro actualizado');
		window.location.href='index.php';
		</script>";
	}
else {
	echo "<script>
		alert('Error al actualizar');
		window.location.href='index.php';
		</script>";
				}
$conn->close();
?>