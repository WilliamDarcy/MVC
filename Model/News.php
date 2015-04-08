<?php
class News_Model
{
	private $article = array('Titre' => 'Une nouvelle journée', 'Contenu' => 'Il fait beau et chaud');
	public function __construct()
	{

	}

	public function getNews()
	{
		return $this->article;
	}

}