<?php 
	require("conexion.php");
	$sql = "SELECT id, noinventario, descripcion, departamento FROM productos";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	// Datos de salida
		while($row = $result->fetch_assoc()) {
			$id = $row["id"];
			echo "<tr>";
		    echo"<th>".$row["id"]."</th>";
			echo"<td>".$row["noinventario"]."</td>";
			echo"<td>".$row["descripcion"]."</td>";
			echo"<td>".$row["departamento"]."</td>";
			//echo"<td>".$row["importe"]."</td>";
			echo "<td><a href='editar.php?id=$id' class='button is-info is-rounded editar' value='editar' name='editar'>Editar</a> <a class='button is-danger is-rounded' onclick='preguntar($id)'>Borrar</a></td>";
			echo"</tr>";
		}
	} 
	else {
		echo "0 results";
	}
	$conn->close();
 ?>