<nav class="navegacion">
			<ul class="menu">
				<li class="title-menu">
					<a href="mi_perfil">
					<img src="../<?php echo $_SESSION['photo'];?>" alt="" class="img-circle">
					<p class="nombreCompleto"><?php
						echo $_SESSION["usuario"], " ", $_SESSION["apellidos"]; 
					?></p></a>					
				</li>
				
				<li><a href="inicio" class="a-menu"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
				<li><a href="nosotros" class="a-menu"><span class="fa fa-users icon-menu"></span>Nosotros</a></li>

				<li class="item-submenu" menu="1">
					<a class="a-menu"><span class="fa fa-suitcase icon-menu"></span>Servicios</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-suitcase icon-menu"></span>Servicios</li>
						<li class="go-back">Atras</li>

						<li><a href="cursos_de_capacitacion" class="a-menu">Cursos de capacitación</a></li>
						<li><a href="consultoria" class="a-menu">Consultoria empresarial</a></li>
					</ul>
				</li>

				<li><a href="contacto" class="a-menu"><span class="fa fa-envelope icon-menu"></span>Contacto</a></li>
				<li><a href="eventos" class="a-menu"><span class="fa fa-calendar icon-menu"></span>Eventos</a></li>
				<li><a id="salir" onclick="abrirModal()" class="a-menu"><span class="fa fa-sign-out icon-menu"></span>Salir</a></li>
			</ul>
</nav>

<script type="text/javascript">
	function abrirModal(){
		  document.getElementById("modal").style.display = "block";

	}
</script>