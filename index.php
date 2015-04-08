
<?php 
define('SITE_ROOT','http://localhost');
define('CHEMIN_ABSOLU', 'c:/xampp/htdocs/MVC');

//fonction autoload pour faire des include automatiques en fonction du nom de la classe.
function __autoload($className)
{
	list($filename, $suffix) = explode('_', $className);
	$emplacement =  CHEMIN_ABSOLU. '/'. $suffix .'/'. ucfirst($filename) .'.php';
	
	if (file_exists($emplacement))
	{
		include_once($emplacement);
	}
}
//On r�cup�re les donn�es de la requête
$request = $_SERVER['QUERY_STRING'];

$parsed = explode('&', $request);

//On r�cup�re le nom du contr�leur ainsi que le nom de l'action et de l'id.
$controleur = array_shift($parsed);


list($action, $id) = explode('=',reset($parsed));



//On instancie le contr�leur puis on appelle la m�thode action d�finie dans la requ�te.
$classe = ucfirst($controleur) .'_Controller';
$controller = new $classe;
$controller->$action($id);

	




?>