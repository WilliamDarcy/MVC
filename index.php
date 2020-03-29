
<?php 

define('CHEMIN_ABSOLU', __DIR__);
//fonction autoload pour faire des include automatiques en fonction du nom de la classe.
spl_autoload_register(function ($className) {

	list($filename, $suffix) = explode('_', $className);
	$emplacement =  CHEMIN_ABSOLU. '/'. $suffix .'/'. ucfirst($filename) .'.php';
	if (file_exists($emplacement))
	{
		include_once($emplacement);
	}
});
//On récupère les données de la requête
$request = $_SERVER['QUERY_STRING'];

$parsed = explode('&', $request);

//On récupère le nom du contrôleur ainsi que le nom de l'action et de l'id.
$controleur = array_shift($parsed);


list($action, $id) = explode('=',reset($parsed));



//On instancie le contrôleur puis on appelle la méthode action définie dans la requête.
$classe = ucfirst($controleur) .'_Controller';
$controller = new $classe;
$controller->$action($id);

	




?>