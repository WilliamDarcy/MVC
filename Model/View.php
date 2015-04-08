<?php
class View_Model
{
	public $data;
	private $render; 

	public function __construct($nom)
	{
		$chemin = CHEMIN_ABSOLU .'/View/'. $nom . '.php';
		
		if (file_exists($chemin))
		{
			$this->render = '/View/'. $nom . '.php';
		}
	}

	public function assign($variable, $value)
	{
		$this->data[$variable] = $value;

	}

	public function render()
	{
		include_once($this->render);
	}
}