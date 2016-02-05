<?php

	// Inclusion et initialisation du MainController
	include("Controllers/MainController.php");
	$mainController = new MainController();
	
	// Inclusion des divers fichiers pour le bon fonctionnement du site
	include("inc/inclusions.php");
	
	// Le controller et l'action par défaut sont Index et home
	if(empty($_GET)) {
		$controllerName = "Index";
		$actionName = "home";
	} else {
		$controllerName = $_GET["controller"];
		$actionName = $_GET["action"];
	}
	
	// Inclusion du controller
	include("Controllers/" . $controllerName . "Controller.php");
	
	// Définition de la class du controller
	$classController = $controllerName . "Controller";
	
	// Initilisation du controller
	$controller = new $classController();
	
	// Exécution de l'action
	$variables = $controller->{$actionName . "Action"}();
	
	// Le tableau retourné par l'action est transformé en objet
	$var = new stdClass();
	foreach($variables as $key => $value) {
		$var->{$key} = $value;
	}
	
	// Exécution de la vue
	ob_start();
	include("views/" . $controllerName . "/" . $actionName .".php");
	$content = ob_get_clean();

	// Inclusion du header
	include("inc/header.php");
	
	// Inclusion du menu
	include("inc/menu.php");
	
	// Affichage de la vue
	echo $content;
	
	// Inclusion du footer
	include("inc/footer.php")
?>