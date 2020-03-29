<?php
class Article_Model
{
	public $listeArticle;

	public function __construct()
	{
		$this->listeArticle = array("Le B747-8 est-il meilleur que l'A380 ? en tout cas Airbus ne peut empêcher Boeing de le dire", 
			"Le millionnaire Elon Musk a tenu une conférence lundi soir pour dévoiler les plans de son projet de train super-sonique.", 
			"La Corée du Nord a enfin dévoilé son premier smartphone baptisé Arirang. "
			);
	}

	public function LireArticle($id)
	{
		return $this->listeArticle[$id];
	}
}