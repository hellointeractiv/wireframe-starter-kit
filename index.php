<?php 

/*---------------------------------------------------------------
 * config pass or not
 *--------------------------------------------------------------- */
$passs = "";//laisser "" si pas de mot de passe

/*---------------------------------------------------------------
 * init
 *--------------------------------------------------------------- */
$path = dirname(__FILE__);
require_once $path.'/core/init.php';



if($connect || $passs==""){
	
	/*---------------------------------------------------------------
	 * YOUR ROUTES
	 *--------------------------------------------------------------- */
	if(	$route->get("home")->statut || $route->post("")->statut || $route->get("")->statut ){ //$route->post("") for after connexion
	
		echo $twig->render("home.twig");
	
	
	}else if(	$route->get("about")->statut){
	
		echo $twig->render("about.twig");
		
	
	}else{
	
		echo $twig->render("404.twig");
	
	}
	/*---------------------------------------------------------------
	 * end routes
	 *--------------------------------------------------------------- */
	 
}else{

	echo $twig->render("connexion.twig");

}

?>