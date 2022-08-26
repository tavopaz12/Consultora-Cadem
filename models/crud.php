<?php
#extension de clase: los objetos pueden ser extendidos, y pueden heredar propiedades y metodos. para definir una clase con extension, dedemos definir una clase padre, y se utiliza dentro de una clase hija 

require_once "conexion.php";

class Datos extends Conexion{

	#Registro de usuarios
	#------------------------------------------------
	public function registroUsuarioModel($datosModel, $tabla){
		#prepare() Prepara una sentencia SQL para ser ejecutada por el metodo PDOStatement(). La sentencia SQL puede contener cero o mas marcadores de parametros con nombre (:name) o signos de interrogacion (?) por los cuales los valores reales seran sustituidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmente los parametros. 

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (usuario, apellidos, password, email, photo, ciudad, fecha) VALUES (:usuario,:apellidos,:password,:email,:photo,:ciudad,:fecha)");

		#bindParam() vincula una variable PHP a un parametro de sustitucion con nombre o de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia.

		$stmt->bindParam(":usuario",$datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad",$datosModel["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha",$datosModel["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos",$datosModel["apellidos"], PDO::PARAM_STR);
		$stmt->bindParam(":password",$datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":photo",$datosModel["photo"], PDO::PARAM_STR);

		if ($stmt->execute()){

			return 'success';

		}
		
		else {

			return 'error';
		}

	}
	
	#Ingreso usuarios
	#---------------------------------------------------
	public function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id, email, password, usuario, apellidos, photo, ciudad, fecha FROM $tabla WHERE email = :email");
		$stmt->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);
		$stmt->execute();

		#El metodo fetch obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement.
		return $stmt->fetch();
		$stmt -> close();
	}
}
