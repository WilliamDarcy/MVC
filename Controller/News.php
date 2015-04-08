<?php

class News_Controller
{
	public $template = 'news';

	public function Voir()
	{
		$model = new News_Model();
		$info = $model->getNews();
		$ViewModel = new View_Model('News');
		$ViewModel->assign('Titre', $info['Titre']);
		$ViewModel->assign('Contenu', $info['Contenu']);
		$ViewModel->render();
	}
}