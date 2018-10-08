<?php
	/**
	 * Mostrar errores de PHP
	 */
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	/**
	 * Archivos necesarios de inicio
	 */
	//require_once "config/constantes.php";
	require_once "config/autoload.php";
	
	require_once "config/request.php";
	require_once "config/router.php";
	//require_once "daos/singletonDao.php";
	/**
	 * Alias
	 */
	use config\autoload as Autoload;
	use config\router 	as Router;
	use config\request 	as Request;
	//use Daos\SingletonDao as SingletonDao;
	
	Autoload::start();
	session_start();
	Router::direccionar(new Request());
?>