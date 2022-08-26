<?php

require_once "../../controllers/controller.php";
require_once "../../models/crud.php";

class Ajax{

	public $validarEmail;

	public function validarEmailAjax(){

		$datos = $this->validarEmail;

		$respuesta = MvcController::validarEmailController($datos);

		echo $respuesta;
	}
}

$a = new Ajax();
$a -> validarEmail = $_POST["validarEmail"];
$a -> validarEmailAjax();


