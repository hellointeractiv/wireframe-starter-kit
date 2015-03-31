<?php 

require_once $path.'/core/Twig/Autoloader.php';
require_once $path.'/core/asphalte.php';

session_start();

Twig_Autoloader::register();
$path_tpls = $path.'/assets/tpl/';
$path_componements = $path.'/assets/componements/';
$loader = new Twig_Loader_Filesystem(array($path_tpls,$path_componements));
$twig = new Twig_Environment($loader, array(
    'cache' =>false,
));


	if(
		isset($_POST["pass"]) && $_POST["pass"]==$passs
	){

		$_SESSION["passs"] = $_POST["pass"];
		setcookie('passs', $_POST["pass"], strtotime( '+365 days' ));
		$connect = true;
		
	}else if(
		isset($_SESSION["passs"]) && $_SESSION["passs"]==$passs ||
		isset($_COOKIE['passs']) && $_COOKIE['passs']==$passs
	){
		
		$connect = true;
	
	}else{
	
		$connect = false;
	
	}

/*---------------------------------------------------------------
 * init route
 *--------------------------------------------------------------- */
$route = new Asphalte;



?>