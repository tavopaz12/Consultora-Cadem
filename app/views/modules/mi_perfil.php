<title>Mi Perfil | CADEM</title>

<style>
	#modal2{
		position:fixed;
		display: block;
		right:0;
		bottom:0;
		left:0;
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0,0.5);
		z-index:1051;
		overflow:hidden;
		outline:0;
	}
	.close3{
		padding: 8px;
		color: black;
		font-weight: bold;
		background-color: #B0C4DE;
		cursor: pointer;
		height: 45px;
		width: 100%;
	}

	.modal-dialog2{
		top: 150px;
		position:relative;
		max-width:50%;
		margin:auto;
		pointer-events:none;
	}
	
	.modal-content2{
		position:relative;
		display:flex;
		flex-direction:column;
		width:100%;
		pointer-events:auto;
		background-color:white;
		background-clip:padding-box;
		border:1px solid black;
		border-radius:.3rem;
		outline:0;
	}

	.modal-header2{
		display:flex;
		background-color: #228B22;
		color: white;
		justify-content:space-between;
		padding:1rem;
		border-bottom:1px solid black;
		border-top-left-radius:.3rem;
		border-top-right-radius:.3rem;
	}

	.modal-title2{
		margin:auto;
		font-size: 20px;
	}
	.modal-body2{
		position:relative;
		-webkit-box-flex:1;
		-ms-flex:1 1 auto;
		flex:1 1 auto;
		padding:1rem;
	}

	.modal-body2 p {
		font-size: 24px;
		margin: auto;
		text-align: center;
	}

	.editar-perfil .miPerfil-row:after{
	  content: "";
	  display: table;
	  clear: both;	
	}
	.editar-perfil .miPerfil-row input{
		width: 80%;
	}
	.editar-perfil .miPerfil-row button{
		width: 100%;
		padding: 8px;
		font-size: 14px;
		cursor: pointer;
	}
	.editar-perfil .form-column1-miPerfil{
	  float: left;
	  width: 48%;
	}
	.editar-perfil .form-column2-miPerfil{
	  float: right;
	  width: 48%;
	}
	.miPerfil-banner{
		margin-top: 0px;
		max-width: 100%;
		background-size: 100%;
		height: 500px;
       	background-attachment: fixed;
	}

	.bloque-contenido-perfil{
		width: 95%;
		margin: -320px auto 100px;
		background-color: rgba(245,245,245,0.9);
		padding: 15px;
		border-radius: 10px;
	}
 
	.bloque-contenido-perfil .contenedor-perfil{
		display: table;
	}

	.mi-perfil{
		text-align: center;
		width: 40%;
		border-right: 2px solid black;
		border-radius: 0px;
		display: table-cell;
		clear:both;
		padding-right: 30px;
	}
	.bloque-contenido-perfil .editar-perfil input, textarea{
		padding:5px;
		font-size: 14px;
		margin-top:5px;
		background-color: #F5F5DC;
	}

	.editar-perfil{	
		width: 60%;
		display: table-cell;
		padding: 0 20px 20px;
		border-radius: 6px;
	}

	.img-circle2{
		height: 220px;
	    width: 220px;
	    background-repeat: no-repeat;
	    background-position: 50%;
	    border-radius: 50%;
	    background-size: 100% auto;
	    margin-bottom:15px;
	}

	@media screen and (max-width: 960px){
		.mi-perfil{
		width: 100%;
		text-align: center;
		border: none;
		display: table-row;
	}

	.editar-perfil{	
		width: 100%;
		border-radius: 0px;
		width: 100%;
		display: table-row;
	}
	.bloque-contenido-perfil{
		margin: -380px auto 100px;
	}
	@media screen and (max-width: 960px){
		.close3{
			width: 35%;
		}

		#modal2{
			width: 100%;
		}
		.modal-dialog2{
			max-width:90%;
		}
	}	
}

</style>

<div class="miPerfil-banner" style='background-image: url("../img/portada.jpg");'>

</div>

<article class="bloque-contenido-perfil">
	<div class="contenedor-perfil">		
		<section class="mi-perfil">
			<h1>Informacion de perfil</h1>
			<br>
			<img src="../<?php echo $_SESSION['photo'];?>" class="img-circle2">
			<br>
			<p><b>Nombre:</b> <?php echo $_SESSION['usuario'], " ", $_SESSION['apellidos'];?></p>
			<br>
			<p><b>Correo Electronico:</b> <?php echo $_SESSION['email'];?></p>
			<br>
			<p><b>Contraseña:</b> *******</p>
		</section>
		
		<hr style="background-color: purple; margin: 8px 0px ; height: 3px;">

		<aside class="editar-perfil">
			<center><h1>Actualizar mi información</h1></center>
			<br>
			<div class="miPerfil-row">
				<?php  
					$editarPerfil = new EditarPerfil();
					$editarPerfil -> editarPerfilController();
				?>
					<form method="POST">
						<input name="idPerfil" type="hidden" value="<?php echo $_SESSION['id'];?>">

						<div class="form-column1-miPerfil">
							<p>Nombre:<br> 
							<input name="editarUsuario" type="text" value="<?php echo $_SESSION['usuario'];?>"></p>
							<br>

							<p>Apellidos:<br> 
							<input name="editarApellidos" type="text" value="<?php echo $_SESSION['apellidos'];?>"></p>
							<br>						

							<p>Cuidad:<br>
							<input type="text" name="editarCiudad" value="<?php echo $_SESSION['ciudad'];?>"></p>
							<br>
						</div>

						<div class="form-column2-miPerfil">	
							<p>Ocupación:<br>
							<input name="editarOcupacion" type="text" value="<?php echo $_SESSION['ocupacion'];?>"></p>
					 		<br>

							<p>Fecha de nacimiento:<br>
							<input type="text" name="editarFecha" value="<?php echo $_SESSION['fecha'];?>"></p>
							<br>

							<p>Email:<br>
							<input type="email" name="editarEmail" value="<?php echo $_SESSION['email'];?>"></p>
							<br>
						</div>
			</div>

						<p>Biografia:  
						<textarea name="editarBiografia" id="input-form1" cols="100" rows="10" placeholder="Puede escribir cuales son sus gustos, a que se dedica, etc..."><?php echo $_SESSION['biografia'];?></textarea></p>
						<br>

						<div class="miPerfil-row">
							<div class="form-column1-miPerfil">
								<button type="submit" style="background-color: green; color: white;">Guardar Cambios</button>
							</div>

							<div class="form-column2-miPerfil">
								<button type="reset" style="background-color: red; color: white;">Cancelar</button>									
							</div>
						</div>
					</form>
		</aside>
	</div>
</article>
	<?php
		include "footer.php";
	?>