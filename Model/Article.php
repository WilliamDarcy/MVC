<?php
class Article_Model
{
	public $listeArticle;

	public function __construct()
	{
		$this->listeArticle = array("Le B747-8 est-il meilleur que l'A380 ? en tout cas Airbus ne peut emp�cher Boeing de le dire", 
			"Le millionnaire Elon Musk a tenu une conf�rence lundi soir pour dévoiler les plans de son projet de train super-sonique.", 
			"La Cor�e du Nord a enfin d�voil� son premier smartphone baptis� Arirang. "
			);
	}

	public function LireArticle($id)
	{
		return $this->listeArticle[$id];
	}
}