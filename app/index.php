<?php 
require_once "models/enlaces.php";
require_once "models/editarPerfil.php";
require_once "controllers/template.php";
require_once "controllers/enlaces.php";
require_once "controllers/editarPerfil.php";

$template = new TemplateController();
$template -> template();

