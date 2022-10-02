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
	</script>
	<style type="text/css">
		.bordesAdd {
			padding: 2px 8px 8px 0px;
			margin: auto;
			border-style: groove;
			width: 600px;
			height: 300px;
			border: round;
			border-radius: 16px 16px 16px 16px;
			-moz-border-radius: 16px 16px 16px 16px;
			-webkit-border-radius: 16px 16px 16px 16px;
			padding-top: 16px;
		}

	</style>
</head>

<body>
	<!--Inicia el header-->
	<div id="arriba" class="hero is-primary">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">
					Universidad de Colima
				</h1>
				<h2 class="subtitle">
					Facultad de Telematica
				</h2>
			</div>
		</div>
		<div class="title is-4" style="background-color: gray; text-align: center; ">
			<H2>Sistema de inventarios</H2>
		</div>
	</div>
	<!--Termina el header-->