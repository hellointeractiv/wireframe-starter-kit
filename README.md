# wireframe-starter-kit
wireframing directly in html with routing and templating process
Create html wireframes with Asphalte, twig, bootstrap, material design


## dépendences
- Asphalte
- Twig 
- Bootstrap
- material design for bootstrap

# how to use it
```php
	if(	$route->get("home")->statut || 
			$route->post("")->statut || 
			$route->get("")->statut 
	){ 																			
	//$route->post("") si il y a un mot de passe à la connexion on aura un post
	
	
		echo $twig->render("home.twig");
	
	
	}else if(	$route->get("about")->statut){
	
		echo $twig->render("about.twig");
		
	
	}else{
	
		echo $twig->render("404.twig");
	
	}


```
View more about routing at https://github.com/hellointeractiv/asphalte
View more about templating and twig at http://twig.sensiolabs.org/documentation
