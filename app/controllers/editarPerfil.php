<?php

class EditarPerfil{

	#EDITAR PERFIL
	#---------------------------------------------------------------

	public function editarPerfilController(){
		if (isset($_POST["editarUsuario"])){
			
			$datosController = array('id'=> $_POST["idPerfil"],'usuario' => $_POST["editarUsuario"],
				'apellidos'=> $_POST["editarApellidos"],'email' => $_POST["editarEmail"],
				'ciudad' => $_POST["editarCiudad"],'fecha' => $_POST["editarFecha"],'ocupacion' => $_POST["editarOcupacion"],
			    'biografia' => $_POST["editarBiografia"]);

			$respuesta = EditarPerfilMoldel::editarPerfilModel($datosController, "usuarios");

			if ($respuesta == "ok") {

				$_SESSION["email"] = $_POST["editarEmail"];
				$_SESSION["usuario"] = $_POST["editarUsuario"];
				$_SESSION["id"] = $_POST["idPerfil"];
				$_SESSION["apellidos"] = $_POST["editarApellidos"];
				$_SESSION["ciudad"] = $_POST["editarCiudad"];
				$_SESSION["fecha"] = $_POST["editarFecha"];
				$_SESSION["ocupacion"] = $_POST["editarOcupacion"];
				$_SESSION["biografia"] = $_POST["editarBiografia"];
				
				echo '<script>

						swal({
							  title: "¡OK!",
							  text: "¡El usuario ha sido editado correctamente!",
							  type: "success",
							  confirmButtonText: "Ok",
							  closeOnConfirm: false
						},

						function(isConfirm){
								 if (isConfirm) {	   
								    window.location = "mi_perfil";
								  } 
						});


					</script>';
			}
		}
	}

}