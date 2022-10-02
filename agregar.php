<div id="add">
	<div class="bordesAdd" class="col-12 forma">
		<FORM method="POST" action="add.php">
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">No. de Inventario</label>
				</div>
				<div class="field-body">
					<div class="field">
						<input id="producto" name="noinventario" class="input" type="text" placeholder="Numero de inventario" required>
						<p class="help is-danger">
							Este campo es requerido
						</p>

					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Descripcion</label>
				</div>
				<div class="field-body">
					<div class="field">

						<input style="width: 300px" id="descripcion" name="descripcion" class="input" type="text" placeholder="Descripcion del Producto" required>
						<p class="help is-danger">
							Este campo es requerido
						</p>

					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Departamento</label>
				</div>
				<div class="field-body">
					<div class="field">

						<input style="width: 300px" id="departamento" name="departamento" class="input" type="text" placeholder="Departamento" onfocusout="calcImporte();" required>
						<p class="help is-danger">
							Este campo es requerido
						</p>

					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Existencia</label>
				</div>
				<div class="field-body">
					<div class="field">

						<input style="width: 300px" id="existencia" name="existencia" class="input" type="text" placeholder="Esistencia del Producto" required>

					</div>
				</div>
			</div>

			<div class="field is-horizontal">
				<div class="field-label">
					
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
							<button type="submit" class="button is-success">
								Guardar
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