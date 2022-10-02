<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bulma/css/bulma.css">
	<title>Sistema de Inventarios</title>
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$(".agregar").click(function() {
				$(".modal-card-title").text("Agregar Venta");
				$("#myModal").addClass("is-active");
			});
			$(".delete, #cancel").click(function() {
				$("#myModal").removeClass("is-active");
				$("#editModal").removeClass("is-active");
			});
		});

		function preguntar(id) {
			if (confirm('Estas Seguro de borrar la venta ' + id)) {
				window.location.href = "delete.php?id=" + id;
			};
		};	
	</script>
</head>

<body>
	<div id="arriba" class="hero is-primary">
		<div class="hero-body">
			<div class="container">
				<img src="images/logoucol.png">
				<h1 class="title">
					Universidad Nacional Autónoma de Honduras
				</h1>
				<h2 class="subtitle">
				Facultad de Ciencias Económicas, Administrativas y Contables
				</h2>
			</div>
		</div>
		<div class="title is-4" style="background-color: gray; text-align: center; ">
			<H2>Sistema de inventarios</H2>
		</div>
	</div>

	<div id="medio" style="width: 1000px; align-items: center; margin: 5px 0px 0px 155px">
		<div style="margin-bottom:30px;">
			<button class="button is-primary is-medium is-pulled-right agregar" id="showModal">Agregar producto</button>
			<br />
		</div>
		<h4 class="title is-4">Listado de productos</h3>
			<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
				<thead>
					<tr>
						<th>#</th>
						<th>No. Inventario</th>
						<th>Descripci&oacute;n</th>
						<th>Departamento</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php require("consulta.php") ?>
				</tbody>
			</table>
	</div>

	<!-- modales -->
	<div class="modal" id="myModal">
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<p class="modal-card-title">Modal title</p>
				<button class="delete" aria-label="close"></button>
			</header>
			<section class="modal-card-body">
				<!--formulario-->
				<?php require("agregar.php"); ?>
				<!--termina formulario-->
			</section>
		</div>
	</div>

	<div id="abajo">
		<footer class="footer">
			<div class="content has-text-centered">
				<p>
					&copy;Derechos reservados - <a href="">Informatica Administrativa</a> - CU
				</p>
			</div>
		</footer>
	</div>
</body>

</html>