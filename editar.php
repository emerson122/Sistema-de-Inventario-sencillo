<?php
require("header.php");
require("conexion.php");
$idP = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id='" . $idP . "'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div ">
	<H3 class=" title" style="text-align: center;">Actualizar Producto</H3>
	<div class="bordesAdd" class="col-12 forma">
		<FORM method="POST" action="edit.php">
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">No. de Inventario</label>
				</div>
				<div class="field-body">
					<div class="field">
						<input style="width: 300px;" id="producto" name="noinventario" class="input" type="text" placeholder="Nombre del Producto" value="<?php echo ($row['noinventario']) ?>" required>
						<input type="hidden" name="id" value="<?php echo ($idP) ?>">
					</div>
				</div>
			</div>
			<!-- next-->
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Descripcion</label>
				</div>
				<div class="field-body">
					<div class="field">

						<input style="width: 300px" id="precio" name="descripcion" class="input" type="text" placeholder="Precio del Producto" value="<?php echo ($row['descripcion']) ?>" required>

					</div>
				</div>
			</div>
			<!-- next-->
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Departamento</label>
				</div>
				<div class="field-body">
					<div class="field">

						<input style="width: 300px" id="cantidad" name="departamento" class="input" type="text" placeholder="Cantidad de Producto" onfocusout="calcImporte();" value="<?php echo ($row['departamento']) ?>" required>

					</div>
				</div>
			</div>
			<!-- next-->
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Existencia</label>
				</div>
				<div class="field-body">
					<div class="field">

						<input style="width: 300px" id="importe" name="existencia" class="input" type="text" placeholder="Importe del Producto" value="<?php echo ($row['existencia']) ?>" required>

					</div>
				</div>
			</div>
			<!-- next-->

			<div class="field is-horizontal">
				<div class="field-label">
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
							<button type="submit" class="button is-success">
								Actualizar
							</button>
						</div>
					</div>
					<div class="field">
						<div class="control">
							<a href="index.php" class="button is-danger">
								Cancelar
							</a>
						</div>
					</div>
				</div>
			</div>
		</FORM>
	</div>
</div>
<?php
require("footer.php");
?>