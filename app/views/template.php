<?php 

session_start();

if(!$_SESSION["validar"]){

	header("location:../ingreso");

	exit();

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Expires" content="0">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/x-icon" href="..//img/favicon.ico">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<link rel="stylesheet" href="../css/estilos.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="../css/sweetalert.css">
	<script src="../js/jquery-3.2.1.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/sweetalert.min.js"></script>
</head>
<body>
	<header id="navbar">
		<a href="inicio" class="logo">
			<img src="../img/logo.png" alt="" class="logo-cadem">
		</a>
		<span id="button-menu" class="fa fa-bars"></span>

	<?php
		include "modules/navegacion.php";
	?>

	<!--Ventana Modal de cerrar sesión-->
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
        			<p>¿<?php echo $_SESSION["usuario"];?> seguro que desea salir?</p>
        			<br>
        			<hr>
        			<br>
					<button onclick="cerrar()" class="close2">Cancelar</button>
					<a href="salir" style="text-decoration: none;"><button class="salir">Salir</button></a>
      			</div>
    		</div>
  		</div>
	</div>

		
	</header>

		<?php

			$modulos = new Enlaces();
			$modulos -> enlacesController();
		
		?>
</body>
</html>