<?php

class MvcController{

	#Llamada a la plantilla
	#------------------------------------------------

	public function plantilla(){
	
		include "views/template.php";
	}

	#Interaccion del usuario
	#------------------------------------------------
	
	public function enlacesPaginasController(){

		if(isset($_GET["action"])){

			$enlacesController = $_GET["action"];

		} 
		else {
			$enlacesController = "index";
		}

		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

		include $respuesta;

	}

	#Registro de usuarios
	#------------------------------------------------
	public function registroUsuarioController(){

			if(isset($_POST["usuarioRegistro"])){
					if(isset($_FILES["nuevaImagen"]["tmp_name"])){

						$imagen = $_FILES["nuevaImagen"]["tmp_name"];

						$aleatorio = mt_rand(100, 999);
						$nombre = $_POST["usuarioRegistro"];

						$ruta = "fotos/profile".$nombre.$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($imagen);

						$destino = $origen;

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaImagen"]["tmp_name"] == ""){

						$ruta = "fotos/photo.jpg";	

					}


						#preg_match().- Realiza una comporacion con una expresion regular
						if(preg_match('/^[a-zA-Z\sáÁéÉíÍóÓúÚñÑüÜ]+$/', $_POST["usuarioRegistro"]) &&
			   			   preg_match('/^[a-zA-Z\sáÁéÉíÍóÓúÚñÑüÜ]+$/', $_POST["apellidosRegistro"]) &&
			   			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordRegistro"]) && 
			   			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["emailRegistro"])) {

							#cryp().- devolverá el hash de un string utilizando el algoritmo estándar basado en DES de Unix o algoritmos  alternativos que puedan estar disponibles en el sistema.
				   			$encriptar = crypt($_POST["passwordRegistro"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

							$datosController = array('usuario' => $_POST["usuarioRegistro"], 
								   'apellidos' => $_POST["apellidosRegistro"],
								   'email' => $_POST["emailRegistro"],
								   'password' => $encriptar, "photo"=> $ruta,
								    'ciudad' => $_POST["ciudadRegistro"],
									'fecha' => $_POST["fechaRegistro"]);

							$respuesta = Datos::registroUsuarioModel($datosController, "usuarios");

								if($respuesta == "success"){

									header("location:ok");
								}

								else {
									header("location:error");
								}
						} 

					} 
			}
	
	#Ingreso de usuarios
	#---------------------------------------------------
	public function ingresoUsuarioController(){
		
		if(isset($_POST["emailIngreso"])){

			$encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			$datosController = array('email' => $_POST["emailIngreso"], 'password' => $encriptar);

			$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");

			if($respuesta["email"] == $_POST["emailIngreso"] && $respuesta["password"] == $encriptar){		

				session_start();

				$_SESSION["validar"] = true;

				$_SESSION["email"] = $respuesta["email"];
				$_SESSION["password"] = $respuesta["password"];
				$_SESSION["usuario"] = $respuesta["usuario"];
				$_SESSION["id"] = $respuesta["id"];
				$_SESSION["apellidos"] = $respuesta["apellidos"];
				$_SESSION["ciudad"] = $respuesta["ciudad"];
				$_SESSION["fecha"] = $respuesta["fecha"];
				$_SESSION["ocupacion"] = $respuesta["ocupacion"];
				$_SESSION["biografia"] = $respuesta["biografia"];
				$_SESSION["photo"] = $respuesta["photo"];

				header("location:app/inicio");
			} 
			else {
				header("location:fallo");
			}
		}				
	}
}