/*Validar Registro*/

function validarRegistro() {	
	var usuario = document.querySelector("#usuarioRegistro").value;
	var password = document.querySelector("#showPassword").value;
	var password2 = document.querySelector("#confirPassword").value;
	var email = document.querySelector("#emailRegistro").value;
	var apellidos = document.querySelector("#apellidosRegistro").value;
	var terminos = document.querySelector("#terminos").checked;

	/*Validar Usuario*/

	if(usuario != ""){

		var expresion = /^[a-zA-Z\sáÁéÉíÍóÓúÚñÑüÜ]+$/;


		if(!expresion.test(usuario)){

			document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br><div class='alert3'>¡No escriba caracteres especiales o números!</div>";
			return false;
		}
	}

	if(apellidos != ""){

		var expresion = /^[a-zA-Z\sáÁéÉíÍóÓúÚñÑüÜ]+$/;

		if(!expresion.test(apellidos)){

			document.querySelector("label[for='apellidosRegistro']").innerHTML += "<br><div class='alert3'>¡No escriba caracteres especiales o números!</div>";
			return false;
		}
	}

	/*Validar password*/

	if(password != ""){

		var caracteres = password.length;
		var expresion = /^[a-zA-Z0-9]+$/;
		var contraseña1 = password;
		var contraseña2 = password2;

		if(!expresion.test(password)){

			document.querySelector("label[for='showPassword']").innerHTML += "<br><div class='alert3'>¡No escriba caracteres especiales o números!</div>";
			return false;
		}

		if(caracteres < 6){

			document.querySelector("label[for='showPassword']").innerHTML += "<br><div class='alert3'>¡Escriba por favor mas de 6 caracteres!</div>";
			return false;
		}

		if(contraseña1 != contraseña2){
			document.querySelector("label[for='confirPassword']").innerHTML += "<br><div class='alert3'>¡Las contraseñas no coinciden, intente de nuevo!</div>";
			return false;
		}
	}

	/*Validar email*/

	if(email != ""){

		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if(!expresion.test(email)){

			document.querySelector("label[for='emailRegistro']").innerHTML += "<br><div class='alert3'>¡Escriba correctamente el email!</div>";
			return false;
		}
	}

	/*Validar terminos*/

	if(!terminos){
			document.querySelector("p[for='terminos']").innerHTML += "<br><br><div class='alert3'>¡No se logro el registro, acepte términos y condiciones!</div>";
			document.querySelector("#usuarioRegistro").value = usuario;
			document.querySelector("#showPassword").value = password;
			document.querySelector("#confirPassword").value = password2;
			document.querySelector("#emailRegistro").value = email;
			document.querySelector("#apellidosRegistro").value = apellidos;

			return false;
	}

return true;
}

/*Fin Validar Registro*/
