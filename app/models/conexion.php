<?php

class Conexion{
	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=cadem","root","");
		return $link;
	}
}