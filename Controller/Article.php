<?php
class Article_Controller
{
	private $template = 'Article';
	public function Lire($id)
	{
		//On va rechercher l'article dans la base de données.	
		$Model = new Article_Model();
		$article = $Model->LireArticle($id);

		//On crée un objet ViewModel qui va faire un include de la vue pour l'afficher.
		$ViewModel = new View_Model($this->template);
		$ViewModel->assign('article', $article);
		$ViewModel->render();
		
	}
}