<?php 
	require_once "Models/ModelGameK.php";
	require_once "Views/ViewGameK.php";
	class ControllerGameK
	{
		var $model,$view;
		public function __construct()
		{
			$this->view = new ViewsGameK();
			$this->model = new ModelGameK();
		}
		public function getPageHome(){
		$this->view->getPageHome();
	}
}
 ?>