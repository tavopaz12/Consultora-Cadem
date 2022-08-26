<title>Nueva Cuenta | CADEM</title>
<article>
		<section id="section-signUp">
			<h1 style="text-align: center;">Crear Una Nueva Cuenta</h1>
			<br>
			<p style="color: red;"><b>La contraseña requiere un minimo de 6 caracteres e incluir número(s)</b></p>
			<br>
			<hr>
			<br>
			
			<?php
				$registro = new MvcController();
				$registro -> registroUsuarioController();

				if(isset($_GET["action"])){

					if($_GET["action"] == "ok"){

						echo '<div class="alert2">Registro Exitoso</div><br>';
					} else if($_GET["action"] == "error"){

						echo '<div class="alert">Registro Fallido</div><br>';
					} else if ($_GET["action"] == "imagen_no_valida"){

						echo '<div class="alert">Registro Fallido <br>Por favor seleccione una imagen con extension .jpg o .png</div><br>';
					}  
				}
			?>

			<form method="post" enctype="multipart/form-data" onsubmit="return validarRegistro()">
				<input name="ciudadRegistro" type="hidden" value="Cosolapa, Oax">
				<input name="fechaRegistro" type="hidden" value="01/01/2001">
					
					<label for="usuarioRegistro"><b>Nombre(s):</b> <span>*</span></label>
					<p id="input-signUp"><input type="text" name="usuarioRegistro" id="usuarioRegistro" required></p>

					<label for="apellidosRegistro"><b>Apellidos:</b> <span>*</span></label>
					<p id="input-signUp"><input type="text" name="apellidosRegistro" id="apellidosRegistro" required ></p>

					<label for="emailRegistro"><b>Correo electronico:</b> <span>*</span><p></p></label>
					<p id="input-signUp"><input type="email" name="emailRegistro" id="emailRegistro" required ></p>

					<label for="showPassword"><b>Contraseña:</b> <span>*</span></label>
					<p id="input-signUp"><input type="password" id="showPassword" name="passwordRegistro" pattern="(?=.*\d)(?=.*[a-z]).{6,}" required style="width: 90%;"><i class="fa fa-eye" onclick="myFunction()" style="width: 10%;position: relative; padding: 3px; background-color: #EEE0E5;color: black; cursor: pointer;text-align:center;"></i></p>

					<label for="confirPassword"><b>Confirmar Contraseña:</b> <span>*</span></label>
					<p id="input-signUp"><input type="password" name="confirPassword" id="confirPassword" required ></p>

					<label for="nuevaImagen"><b>Elija su foto de perfil...</b> <span>*</span></label>
					<p id="input-signUp"><input type="file" name="nuevaImagen" id="nuevaImagen"></p>
			
					<p for="terminos"><input type="checkbox" id="terminos"><a href="./views/modules/TÉRMINOS Y CONDICIONES.pdf" download="TÉRMINOS Y CONDICIONES.pdf"> Acepto términos y condiciones</a></p>
					<br>

					<button type="submit">Crear cuenta</button>

					<br><br>
					<center><p>¿Ya tienes cuenta? <a href="ingreso">Iniciar sesión</a></p></center>
			</form>
		</section>
	</article>

	<script>
	function myFunction() {
  var x = document.getElementById("showPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

$('i').click(function() {
  $(this).toggleClass('fa fa-eye').toggleClass('fa fa-eye-slash');
});
</script>


