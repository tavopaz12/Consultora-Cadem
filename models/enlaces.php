<?php

class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){

		if($enlacesModel == "nosotros" || 
		   $enlacesModel == "consultoria" || 
		   $enlacesModel == "contacto" || 
		   $enlacesModel == "cursos_de_capacitacion"
		   ){

			$module = "views/modules/".$enlacesModel.".html"; 
		}

		else if($enlacesModel == "index"){
			$module = "views/modules/inicio.html";
		}

		else if($enlacesModel == "inicio"){
			$module = "views/modules/inicio.html";
		}

		else if ($enlacesModel == "nueva_cuenta" || 
				 $enlacesModel == "ingreso") {
			$module = "views/modules/".$enlacesModel.".php";
		}

		else if($enlacesModel == "ok"){
			$module = "views/modules/nueva_cuenta.php";
		}

		else if($enlacesModel == "error"){
			$module = "views/modules/nueva_cuenta.php";
		}
		else if($enlacesModel == "imagen_no_valida"){
			$module = "views/modules/nueva_cuenta.php";
		}

		else if($enlacesModel == "fallo"){
			$module = "views/modules/ingreso.php";
		}

		else{
			$module = "views/modules/error.html";			
		}

		return $module;
	}
}
