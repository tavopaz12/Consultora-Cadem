<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Expires" content="0">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
	<link rel="stylesheet" href="./css/font-awesome.css">
	<link rel="stylesheet" href="./css/estilos.css?v=<?php echo time(); ?>">
	<script src="./js/jquery-3.2.1.js?v=<?php echo time(); ?>"></script>
	<script src="./js/main.js?v=<?php echo time(); ?>"></script>
	<script src="views/js/validarRegistro.js?v=<?php echo time(); ?>"></script>
	</head>

<body>
	<header id="navbar">
		<a href="inicio" class="logo">
			<img src="./img/logo.png" alt="" class="logo-cadem">
		</a>
		<span id="button-menu" class="fa fa-bars"></span>

	<?php
		include "modules/navegacion.php";
	?>
		
	</header>

		<!--Ventana Modal de registro necesario-->
		<div id="modal" tabindex="-1" role="dialog">
	  		<div class="modal-dialog" role="document">
	    		<div class="modal-content">
	      			<div class="modal-header">
	        			<h5 class="modal-title">Advertencia</h5>
	        			<button type="button" onclick="cerrar()" class="close">
	          				<span aria-hidden="true">&times;</span>
	        			</button>
	      			</div>
	      			<div class="modal-body">
	        			<p>Para solocitar mas informacion o poder acceder a nuestros cursos es necesario que ustede este registrado...</p>
	        			<br>
	        			<hr>
	        			<br>
						<a href="nueva_cuenta"><button class="close2">Registrarme</button></a>
						<a href="ingreso"><button class="salir">Ya tengo una cuenta</button></a>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<?php  
			$mvc = new MvcController();
			$mvc -> enlacesPaginasController();
		?>
</body>
</html>