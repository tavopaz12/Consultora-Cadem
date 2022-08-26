<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if($enlaces == "inicio" ||
		   $enlaces == "nosotros" ||
		   $enlaces == "consultoria" ||
		   $enlaces == "contacto" ||
		   $enlaces == "cursos_de_capacitacion" ||
		   $enlaces == "salir" || 
		   $enlaces == "mi_perfil"){

			$module = "views/modules/".$enlaces.".php";
		}

		else if($enlaces == "manejo_de_redes_sociales" || $enlaces == "seguridad_informatica"
				|| $enlaces == "gestion_de_servicios_de_tecnologias_de_la_informacion" || $enlaces == "disenio_digital"
				|| $enlaces == "redes_sociales_uso_personal_administrativo" || $enlaces == "excelencia_en_el_servicio"
			    || $enlaces == "neuromarketing" || $enlaces == "neuroventas" || $enlaces == "psicologia_publicitaria"
			    || $enlaces == "del_diseniador_al_negocio" || $enlaces == "smarketing" || $enlaces == "comunicacion_asertiva"
			    || $enlaces == "imagen_personal_profesional" || $enlaces == "inteligencia_emocional" || $enlaces == "redaccion_para_ejecutivos" || $enlaces == "ortografia_redaccion_para_asistentes" || $enlaces == "labor_secretarial"){
			$module = "views/modules/pags/".$enlaces.".php";
		}	
		else if($enlaces == "index"){
			$module = "views/modules/inicio.php";
		}
		else{
			$module = "views/modules/error.html";		
		}

		return $module;

	}


}

# || $enlaces == "labor_secretarial"
# || $enlaces == ""
# || $enlaces == ""
# || $enlaces == ""
# || $enlaces == ""
# || $enlaces == ""
# || $enlaces == ""
# || $enlaces == ""
# || $enlaces == ""
# || $enlaces == ""
# || $enlaces == ""
# || $enlaces == ""
