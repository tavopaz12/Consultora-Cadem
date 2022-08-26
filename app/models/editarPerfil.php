<?php  

require_once "conexion.php";

class EditarPerfilMoldel{
	public function editarPerfilModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, apellidos = :apellidos, email = :email, ciudad = :ciudad, fecha = :fecha, ocupacion = :ocupacion, biografia = :biografia WHERE id = :id");

		$stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":apellidos", $datosModel["apellidos"], PDO::PARAM_STR);
		$stmt -> bindParam(":ciudad", $datosModel["ciudad"], PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
		$stmt -> bindParam(":ocupacion", $datosModel["ocupacion"], PDO::PARAM_STR);
		$stmt -> bindParam(":biografia", $datosModel["biografia"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();
	}
}